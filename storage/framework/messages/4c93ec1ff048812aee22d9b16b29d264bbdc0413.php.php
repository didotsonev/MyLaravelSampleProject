<?php

namespace App\Http\Controllers\Company;

use App\Mail\CreatedCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Xinax\LaravelGettext\Facades\LaravelGettext;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Validation rules
     */
    protected function rules(Request $request)
    {
        switch($request->method())
        {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
            case 'POST':
                {
                    return [
                        'name' => 'required|max:255',
                        'email' => 'required|email|max:255|unique:companies,email',
                        'website' => 'nullable|url|max:255',
                        'logo' => 'image|dimensions:min_width=100,min_height=100',
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'name' => 'required|max:255',
                        'email' => 'required|email|max:255',
                        'website' => 'nullable|url|max:255',
                        'logo' => 'image|dimensions:min_width=100,min_height=100',
                    ];
                }
            default:break;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules($request));

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        //create folder for this company files
        File::makeDirectory(public_path("company_logos/$company->id"));

        $logo = $request->file('logo');

        if ($logo) {
            $this->storeLogo($logo, $company);
        }

        Mail::to($company->email)->send(new CreatedCompany($company));

        return view('companies.t_row', compact('company'));
    }

    /**
     * Store company logo
     *
     * @param $logo
     * @param $company
     */
    protected function storeLogo($logo, $company)
    {
        $logoName = $logo->getClientOriginalName();

        $logo->storeAs("$company->id/", "{$logoName}", ['disk' => 'company_logos']);

        $company->update([
            'logo' => "{$logoName}"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::with('employees')->findOrFail($id);

        if ($company->logo) {
            $company->logo_path = "company_logos". DIRECTORY_SEPARATOR ."$company->id". DIRECTORY_SEPARATOR ."$company->logo";
        } else {
            $company->logo_path = "images". DIRECTORY_SEPARATOR ."no_image_available.png";
        }

        if ($company) {
            return view('companies.show', compact('company'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        if ($company) {
            return view('companies.create_edit_form', compact('company'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        if ($company) {
            $this->validate($request, $this->rules($request));

            $company->update([
                'name' => $request->name,
                'email' => $request->email,
                'website' => $request->website,
            ]);

            $logo = $request->file('logo');

            if ($company->logo && $logo) {
                File::delete('company_logos/'. $company->id .'/'. $company->logo);
            }

            if ($logo) {
                $this->storeLogo($logo, $company);
            }

            return view('companies.t_row', compact('company'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        if ($company) {
            //delete the company folder with all files
            File::deleteDirectory(public_path("company_logos/$id"));

            //delete all employees of this company
            $company->employees()->delete();

            $company->delete();

            return _i('Company deleted successfully');
        }
    }
}
