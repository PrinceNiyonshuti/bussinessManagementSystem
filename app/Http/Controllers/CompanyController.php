<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Models\User;
use App\Notifications\NotifyAdmin;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class CompanyController extends Controller
{
    //
    public function index()
    {
        return view('admin.company.index', ['companies' => Company::latest()->paginate(10)]);
    }
    public function create()
    {
        return view('admin.company.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        $newCompany = new Company;
        $newCompany->name = $request['name'];
        $newCompany->address = $request['address'];
        $newCompany->telephone = $request['telephone'];
        $newCompany->website = $request['website'];
        $newCompany->director = $request['director'];
        $newCompany->logo = $request->file('logo')->store('company_logos');
        $newCompany->save();

        // finding the admin
        $admin = User::where('name', 'prince')->get();

        // defining notification data
        $notificationData = [
            'body' => 'New company called ' . $newCompany['name'] . ' , have been created',
            'footer' => 'Thank you for using and trusting in Business Management System'
        ];
        // $admin->notify(new NotifyAdmin($notificationData));
        Notification::send($admin, new NotifyAdmin($notificationData));

        return redirect('/company')->with('success', 'Company created successfully!');;
    }

    public function edit(Company $company)
    {
        return view('admin.company.edit', [
            'company' => $company
        ]);
    }

    public function update(StoreCompanyRequest $request,$id)
    {
        $existingCompany =  Company::find($id);
        if($existingCompany){
            $existingCompany->name = $request['name'];
            $existingCompany->address = $request['address'];
            $existingCompany->telephone = $request['telephone'];
            $existingCompany->website = $request['website'];
            $existingCompany->director = $request['director'];
            if (isset($request['logo'])) {
                $existingCompany->logo = $request->file('logo')->store('company_logos');
            }
            $existingCompany->save();
        }
        return redirect('/company')->with('success', 'Company updated successfully!');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('success', 'Company Deleted successfully!');
    }
}
