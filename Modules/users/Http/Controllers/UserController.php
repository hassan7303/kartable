<?php

namespace Modules\Users\Http\Controllers;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Throwable;

/*
|--------------------------------------------------------------------------
| User Module Provider
|--------------------------------------------------------------------------
|
| Here is where you can register and boot all of the Provider for an user module.
|
*/

class UserController extends Controller
{
    /**
     * Save Login Users
     *
     * @param Request $request
     *  
     * @return array 
     * @throws Throwable 
     */
    public function login(Request $request):array
    {
        return Helpers::successRequest("ok");
    }
}