@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Employees</div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            @foreach($employees as $employee)
            @include('employees.modal', ['employee' => $employee])

            <tr data-toggle="modal" data-target="#employee-modal-{{$employee->id}}">
                <td>{{$employee->firstName}}</td>
                <td>{{$employee->lastName}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>


@endsection

