<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotifyAdmin;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employee.index', ['employees' => Employee::latest()->paginate(10)]);
    }
    public function create()
    {
        return view('admin.employee.create');
    }

    public function store()
    {
        // \dd(\request()->all());
        $employee_data = request()->validate([
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|min:3|max:100',
            'surname' => 'required|min:3|max:100',
            'email' => 'required|email',
            'telephone' => 'required|min:10|numeric',
            'emp_start_date' => 'required',
        ]);
        $employee_data['emp_number'] = Str::random(7);
        Employee::create($employee_data);

        // finding all the admins
        $admin = User::where('name', 'prince')->get();

        // defining notification data
        $notificationData = [
            'body' => 'New employee called ' . $employee_data['name'] . ' , have been created',
            'footer' => 'Thank you for using and trusting in Business Management System'
        ];
        Notification::send($admin, new NotifyAdmin($notificationData));

        return redirect('/employee')->with('success', 'Employee created successfully!');;
    }

    public function edit(Employee $employee)
    {
        return view('admin.employee.edit', [
            'company' => $employee
        ]);
    }

    public function update(Employee $employee)
    {
        $attributes = request()->validate([
            'name' => 'required|min:3|max:100',
            'address' => 'required|min:3|max:100',
            'telephone' => 'required|min:10|numeric',
            'website' => 'required',
            'director' => 'required|min:3|max:100',
            'logo' => 'image'
        ]);

        if (isset($attributes['logo'])) {
            $attributes['logo'] = request()->file('logo')->store('company_logos');
        }

        $employee->update($attributes);
        return redirect('/employee')->with('success', 'Company updated successfully!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('success', 'Company Deleted successfully!');
    }
}