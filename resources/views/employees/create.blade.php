@extends('layouts.app')
@section('title','Create Employee')
@section('content')
<div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
    <h1>Create Employee</h1>
    <form action="{{route('employees.store')}}" method = "post">
        @csrf
        <div class="form-row form-group">
            <div class="col-md-1">
                    <label for="namePrefix">Prefix</label>
                    <input type="text" name = "namePrefix" id = "namePrefix" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="firstName">First Name</label>
                <input type="text" name = "firstName" id = "firstName" class="form-control" required>
            </div>
            <div class="col-md-1">
                <label for="middleInitial">Middle</label>
                <input type="text" name = "middleInitial" id = "middleInitial" class="form-control">
            </div>
            <div class="col-md-5">
                <label for="lastName">Last Name</label>
                <input type="text" name = "lastName" id = "lastName" class="form-control" required>
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col-md-6">
                <label for="email">Email</label>
                <input type="text" name = "email" id = "email" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="phone">Phone Number</label>
                <input type="text" name = "phone" id = "phone" class="form-control" required>
            </div>
            <div class="col-md-1">
                <label for="gender">Gender</label>
                <input type="text" name = "gender" id = "gender" class="form-control" required>
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col-md-6">
                <label for="city">City</label>
                <input type="text" name = "city" id = "city" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="state">State</label>
                <input type="text" name = "state" id = "state" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label for="zip">Zip</label>
                <input type="text" name = "zip" id = "zip" class="form-control" required>
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="text" name = "dob" id = "dob" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="ssn">SSN</label>
                <input type="text" name = "ssn" id = "ssn" class="form-control" required>
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col-md-6">
                <label for="startDate">Date of Joining</label>
                <input type="text" name = "startDate" id = "startDate" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="salary">Salary</label>
                <input type="text" name = "salary" id = "salary" class="form-control" required>
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col-md-6">
                <label for="motherName">Mother's Name</label>
                <input type="text" name = "motherName" id = "motherName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="motherMaiden">Mother's Maiden Name</label>
                <input type="text" name = "motherMaiden" id = "motherMaiden" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="fatherName">Father's Name</label>
            <input type="text" name = "fatherName" id = "fatherName" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">{{ __('Create') }}</button>
        <a class="btn btn-danger" href="{{ route('employees.index') }}">{{ __('Cancel') }}</a>
    </form>
    </div>
</div>
@endsection
