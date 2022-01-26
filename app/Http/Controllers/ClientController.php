<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
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

    public function store(ClientRequest $request)
    {
        $client_data = new Client;
        $client_data->company_id = $request['company_id'];
        $client_data->name = $request['name'];
        $client_data->surname = $request['surname'];
        $client_data->address = $request['address'];
        $client_data->telephone = $request['telephone'];
        $client_data->save();

        // finding all the admins
        $admin = User::where('name', 'prince')->get();
        $company = Company::select()->where('id', $client_data['company_id'])->first();

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

    public function update(ClientRequest $request,$id)
    {
        $existingClient = Client::find($id);
        if ($existingClient) {
            $existingClient->company_id = $request['company_id'];
            $existingClient->name = $request['name'];
            $existingClient->surname = $request['surname'];
            $existingClient->address = $request['address'];
            $existingClient->telephone = $request['telephone'];
            $existingClient->save();
        }
        return redirect('/client')->with('success', 'Client updated successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('success', 'Client Deleted successfully!');
    }
}
