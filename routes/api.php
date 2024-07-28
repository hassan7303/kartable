<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class SiteBilderController extends Controller
{
    public function __construct()
    {
        require_once "../../../../../init.php";
    }

}
