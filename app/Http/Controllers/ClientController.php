<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\User;
use App\Notifications\NotifyAdmin;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.client.index', [
            'clients' => Client::latest()->paginate(10)
            // 'clients' => Client::with('company')->get()
        ]);
    }
    public function create()
    {
        return view('admin.client.create');
    }

    public function store()
    {
        $client_data = request()->validate([
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|min:3|max:100',
            'surname' => 'required|min:3|max:100',
            'address' => 'required',
            'telephone' => 'required|min:9|numeric|unique:clients,telephone'
        ]);
        Client::create($client_data);

        // finding all the admins
        $admin = User::where('name', 'prince')->get();
        $company = Company::select()->where('id', $client_data['company_id'])->first();
        // \dd($company['name']);

        // defining notification data
        $notificationData = [
            'body' => 'New client called ' . $client_data['name'] . ' , have been created for ' . $company['name'] . ' company',
            'footer' => 'Thank you for using and trusting in Business Management System'
        ];
        Notification::send($admin, new NotifyAdmin($notificationData));

        return redirect('/client')->with('success', 'Employee created successfully!');;
    }

    public function edit(Client $client)
    {
        return view('admin.client.edit', [
            'client' => $client
        ]);
    }

    public function update(Client $client)
    {
        $attributes = request()->validate([
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|min:3|max:100',
            'surname' => 'required|min:3|max:100',
            'address' => 'required',
            'telephone' => ['required', 'min:9', 'numeric', Rule::unique('clients', 'telephone')->ignore($client->id)]
        ]);

        $client->update($attributes);
        return redirect('/client')->with('success', 'Client updated successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('success', 'Client Deleted successfully!');
    }
}
