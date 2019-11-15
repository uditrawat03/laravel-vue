<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Company types
    public function getTypes(){
        return \App\Models\CompanyType::get();
    }

    // Company Status
    public function getStatuses(){
        return \App\Models\CompanyStatus::get();
    }
}
