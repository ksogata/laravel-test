<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $employees = DB::table('employees')->orderBy('lastName', 'ASC')->get();
        // Log::debug($employees);
        return view('employees.index')->with('employees', $employees);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->empId = rand(100000, 999999);
        $employee->namePrefix = $request->input('namePrefix');
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->middleInitial = $request->input('middleInitial', 'A');
        $employee->gender = $request->input('gender');
        $employee->email = $request->input('email');
        $employee->fatherName = $request->input('fatherName');
        $employee->motherName = $request->input('motherName');
        $employee->motherMaiden = $request->input('motherMaiden');
        $employee->startDate = $request->input('startDate');
        $employee->dob = $request-> input('dob');
        $employee->salary = $request->input('salary');
        $employee->ssn = $request->input('ssn');
        $employee->phone = $request->input('phone');
        $employee->city = $request->input('city');
        $employee->state = $request->input('state');
        $employee->zip = $request->input('zip');
        $employee->save();
        return redirect()->route('employees.index')->with('info', 'Employee Added Successfully');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request)
    {
        $employee = Employee::find($request->input('id'));
        $employee->namePrefix = $request->input('namePrefix');
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->middleInitial = $request->input('middleInitial', 'A');
        $employee->gender = $request->input('gender');
        $employee->email = $request->input('email');
        $employee->fatherName = $request->input('fatherName');
        $employee->motherName = $request->input('motherName');
        $employee->motherMaiden = $request->input('motherMaiden');
        $employee->startDate = $request->input('startDate');
        $employee->dob = $request-> input('dob');
        $employee->salary = $request->input('salary');
        $employee->ssn = $request->input('ssn');
        $employee->phone = $request->input('phone');
        $employee->city = $request->input('city');
        $employee->state = $request->input('state');
        $employee->zip = $request->input('zip');
        $employee->save();
        return redirect()->route('employees.index')->with('info', 'Employee Updated Successfully');
    }

    public function destroy($id) {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('info', 'Employee Deleted Successfully');
    }
}
