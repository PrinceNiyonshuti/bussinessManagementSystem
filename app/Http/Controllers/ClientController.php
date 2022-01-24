<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Notifications\NotifyAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.employee.index', [
            'employees' => Client::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.employee.create');
    }

    public function store()
    {
        $client_data = request()->validate([
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|min:3|max:100',
            'surname' => 'required|min:3|max:100',
            'email' => 'required|email|unique:employees,email',
            'telephone' => 'required|min:9|numeric|unique:employees,telephone',
            'emp_start_date' => 'required',
        ]);
        Client::create($client_data);

        // finding all the admins
        $admin = User::where('name', 'prince')->get();

        // defining notification data
        $notificationData = [
            'body' => 'New client called ' . $client_data['name'] . ' , have been created',
            'footer' => 'Thank you for using and trusting in Business Management System'
        ];
        Notification::send($admin, new NotifyAdmin($notificationData));

        return redirect('/employee')->with('success', 'Employee created successfully!');;
    }

    public function edit(Client $client)
    {
        return view('admin.employee.edit', [
            'employee' => $client
        ]);
    }

    public function update(Client $client)
    {
        $attributes = request()->validate([
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|min:3|max:100',
            'surname' => 'required|min:3|max:100',
            'email' => 'required|email',
            'telephone' => 'required|min:10|numeric',
            'emp_start_date' => 'required',
        ]);

        $client->update($attributes);
        return redirect('/employee')->with('success', 'Employee updated successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('success', 'Employee Deleted successfully!');
    }
}
