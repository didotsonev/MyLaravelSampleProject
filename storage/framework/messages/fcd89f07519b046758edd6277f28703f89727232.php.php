<?php

namespace App\Http\Middleware;

use App\Http\Localization\JS;
use Closure, Session, Auth;
use JavaScript;

class AppLocale
{
    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['no_NO','en_US'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has('locale'))
        {
            Session::put('locale', $request->getPreferredLanguage($this->languages));
        }

        app()->setLocale(Session::get('locale'));

        JavaScript::put([
            'lang' => JS::all(),
            'foo' => 'bar',
        ]);

        return $next($request);
    }

}