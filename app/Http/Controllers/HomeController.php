<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home', ['companies' => Company::latest()->paginate(8)]);
    }
    public function show(Company $company)
    {
        return view('company', [
            'company' => $company
        ]);
    }
}
