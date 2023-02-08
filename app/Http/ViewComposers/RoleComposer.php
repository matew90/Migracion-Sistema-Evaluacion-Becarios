<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\general\Role;
use App\Models\general\User;
use App\Models\general\Status;
use App\Models\general\Menu;
use App\Models\general\Submenu;
use Auth;
use Session;
use Log;
use Route;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class RoleComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    // protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->user = Auth::user();
        $this->route = explode('.', Route::currentRouteName());
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
		
        if (Auth::user() == null) {
            return 0;
        }

        $major_menu=[];
        $indexKey = "";

        if ($this->user->role->rol_level==100) {
            $getSubmenu = Submenu::all()->groupBy('men_uID');
        } else {
            //$getSubmenu = Submenu::whereIn('men_uID', array_keys(json_decode($this->user->role->rol_permissions, true)))->get()->groupBy('men_uID');
            $getSubmenu = Submenu::all()->groupBy('men_uID');
        }

        if (isset($this->route[1])) {
            $getRouteInfo = Submenu::where('sub_route', $this->route[1])->first();
            $sub = json_decode($getRouteInfo->sub_bread, true);
            foreach ($sub as $key => $value) {
                if (!empty(array_search($this->route[2], $value))) {
                    $indexKey = $key;
                }
            }
        } else {
            $getRouteInfo = Menu::where('men_route', $this->route[0])->first();
        }

        if ($getRouteInfo == null) {
            Log::error('Error get route name, don\'t found database: '.Auth::user()->us_uID." Line: 56. RoleComposer.");
            return view('errors.404');
        }

        $info=[
          'submenu' => $getSubmenu,
          'act_menu' => $getRouteInfo,
          'act_submenu' => $indexKey
        ];
		
        // foreach ($info['submenu'] as $key => $value){
        //   dd($value->toArray());
        // }



        // dd($info['act_menu']->toArray());
        return $view->with('info', $info);
    }
}
