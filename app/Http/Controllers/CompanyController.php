<?php

namespace App\Http\Controllers;

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

    public function store()
    {
        $company_data = request()->validate([
            'name' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:100',
            'telephone' => 'required|min:10|numeric',
            'website' => 'required',
            'director' => 'required|min:3|max:100',
            'logo' => 'required|image'
        ]);
        $company_data['logo'] = request()->file('logo')->store('company_logos');
        Company::create($company_data);

        // finding the admin
        $admin = User::where('name', 'prince')->get();
        // dd($admin['fillable']);

        // $mail_data = [
        //     'recipient' => $admin['email'],
        //     'fromEmail' => 'npprince47@gmail.com',
        //     'fromName' => 'Business Management System',
        //     'subject' => 'New ' . $company . ' Created',
        //     'body' => 'Dear  ' . $admin['name'] . ' , New ' . $company . ' called ' . $company_data['name'] . ' , have been created '

        // ];
        // Mail::send('mail.email-template', $mail_data, function ($message) use ($mail_data) {
        //     $message->to($mail_data['recipient'])
        //         ->from($mail_data['fromEmail'], $mail_data['fromName'])
        //         ->subject($mail_data['subject']);
        // });

        // defining notification data
        $notificationData = [
            'body' => 'New company called ' . $company_data['name'] . ' , have been created',
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

    public function update(Company $company)
    {
        $attributes = request()->validate([
            'name' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:100',
            'telephone' => 'required|min:10|numeric',
            'website' => 'required',
            'director' => 'required|min:3|max:100',
            'logo' => 'image'
        ]);

        $company_data = request()->validate([
            'name' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:100',
            'telephone' => 'required|min:10|numeric',
            'website' => 'required',
            'director' => 'required|min:3|max:100',
            'logo' => 'required|image'
        ]);

        if (isset($attributes['logo'])) {
            $attributes['logo'] = request()->file('logo')->store('company_logos');
        }

        $company->update($attributes);
        return redirect('/company')->with('success', 'Company updated successfully!');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('success', 'Company Deleted successfully!');
    }
}
