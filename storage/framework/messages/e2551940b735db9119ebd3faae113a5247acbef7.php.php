<?php

namespace App\Http\Controllers\Company;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
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
                        "first_name" => "required|max:255|string|alpha_dash",
                        "last_name" => "max:255|string|alpha_dash",
                        "email" => "email|string|max:255|unique:employees,email",
                        "phone" => "regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/",
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        "first_name" => "required|max:255|string|alpha_dash",
                        "last_name" => "max:255|string|alpha_dash",
                        "email" => "email|string|max:255",
                        "phone" => "regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/",
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
        //
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
    public function store(Request $request, Company $company)
    {
        $this->validate($request, $this->rules($request));

        $employee = $company->employees()->create($request->all());
    }

    /**
     * Display specific recource.
     *
     * @param Company $company
     * @param Employee $employee
     */
    public function show(Company $company, Employee $employee)
    {

        return view('employees.show', compact('company', 'employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, Employee $employee)
    {

        return view('employees.create_edit_form', compact('company', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company, Employee $employee)
    {
        $this->validate($request, $this->rules($request));

        $employee->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, Employee $employee)
    {
        $employee->delete();
    }
}