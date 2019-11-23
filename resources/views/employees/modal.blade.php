<!-- Modal HTML Markup -->
<div id="employee-modal-{{$employee->id}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Employee #{{$employee->empId}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm">Name:</div>
                    <div class="col-sm">
                        {{$employee->namePrefix}}
                        {{$employee->firstName}}
                        {{$employee->middleInitial}}.
                        {{$employee->lastName}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">Gender:</div>
                    <div class="col-sm">{{$employee->gender}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Father's Name:</div>
                    <div class="col-sm">{{$employee->fatherName}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Mother's Name:</div>
                    <div class="col-sm">{{$employee->motherName}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Date of Birth:</div>
                    <div class="col-sm">{{$employee->dob}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Date of Join:</div>
                    <div class="col-sm">{{$employee->startDate}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Salary:</div>
                    <div class="col-sm">{{$employee->salary}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">City:</div>
                    <div class="col-sm">{{$employee->city}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">State:</div>
                    <div class="col-sm">{{$employee->state}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Zip:</div>
                    <div class="col-sm">{{$employee->zip}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">SSN:</div>
                    <div class="col-sm">{{$employee->ssn}}</div>
                </div>
                <div class="row">
                    <div class="col-sm">Phone:</div>
                    <div class="col-sm">{{$employee->phone}}</div>
                </div>

                @if (Auth::check())
                    <a href="{{route('employees.edit', ['id'=>$employee->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route('employees.destroy', ['id'=>$employee->id])}}" class="btn btn-danger">Destroy</a>
                @endif
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
