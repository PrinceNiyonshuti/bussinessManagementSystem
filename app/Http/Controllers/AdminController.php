<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function create()
    {
        return view('admin.index',[
            'companies'=> Company::count(),
            'employees'=> Employee::count(),
            'clients'=> Client::count(),
        ]);
    }
}
