<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function index()
    {
        return view('admin.company.index', ['companies' => Company::all()]);
    }
    public function create()
    {
        return view('admin.company.create');
    }

    public function store()
    {
        $company_data = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'website' => 'required',
            'director' => 'required',
            'logo' => 'required|image'
        ]);
        $company_data['logo'] = request()->file('logo')->store('company_logos');
        Company::create($company_data);

        return redirect('/company');
    }

    public function edit(Company $company)
    {
        return view('admin.company.edit', [
            'company' => $company
        ]);
    }

    public function update(Company $company)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => ['required'],
            'website' => 'required',
            'director' => 'required',
            'logo' => 'image'
        ]);

        if (isset($attributes['logo'])) {
            $attributes['logo'] = request()->file('logo')->store('company_logos');
        }

        $company->update($attributes);
        return redirect('/company')->with('success', 'Company updated successfully!');
    }
}
