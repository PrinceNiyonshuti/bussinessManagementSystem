<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
        // $newDish = new Company;
        // $newDish->name = $request['name'];
        // $newDish->address = $request['address'];
        // $newDish->telephone = $request['telephone'];
        // $newDish->website = $request['website'];
        // $newDish->director = $request['director'];
        // if (isset($request['logo'])) {
        //     $newDish->logo = $request->file('logo')->store('company_logos');
        // } else {
        //     $newDish->logo = $request['null'];
        // }
        // $newDish->save();

        // $newdata = request()->validate(
        //     ['name' => 'required']
        // );

        // Company::create($newdata);

        $company_data = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'website' => 'required',
            'director' => 'required',
            'logo' => 'required|image'
        ]);
        $company_data['logo'] = request()->file('logo')->store('logos');
        Company::create($company_data);

        return redirect('/company');
    }
}
