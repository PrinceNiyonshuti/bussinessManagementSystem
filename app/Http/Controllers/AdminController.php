<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        $analytics = [
            'companies_count' => Company::count(),
            'employees_count' => Employee::count(),
            'clients_count' => Client::count(),
        ];
        return view('admin.index', ['analytics' => $analytics]);
    }
}
