<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
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
        return view('admin.employee.index', [
            'employees' => Employee::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.employee.create');
    }

    public function store(EmployeeRequest $request)
    {
        $employee_data = new Employee;
        $employee_data->company_id = $request['company_id'];
        $employee_data->name = $request['name'];
        $employee_data->surname = $request['surname'];
        $employee_data->email = $request['email'];
        $employee_data->telephone = $request['telephone'];
        $employee_data->emp_start_date = $request['emp_start_date'];
        $employee_data['emp_number'] = Str::random(7);
        $employee_data->save();

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
            'employee' => $employee
        ]);
    }

    public function update(EmployeeRequest $request,$id)
    {
        $existingEmployee = Employee::find($id);
        if($existingEmployee){
            $existingEmployee->company_id = $request['company_id'];
            $existingEmployee->name = $request['name'];
            $existingEmployee->surname = $request['surname'];
            $existingEmployee->email = $request['email'];
            $existingEmployee->telephone = $request['telephone'];
            $existingEmployee->emp_start_date = $request['emp_start_date'];
            $existingEmployee->save();
        }
        return redirect('/employee')->with('success', 'Employee updated successfully!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('success', 'Employee Deleted successfully!');
    }
}
