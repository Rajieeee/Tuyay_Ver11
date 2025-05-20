@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ __('Student Management') }}</h1>
                @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-6 m-auto">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Add new student</h3>
                    </div>

                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="row card-body col-12">
                            <div class="form-group col-12">
                                <label for="exampleInputEmail1">Student No.
                                </label>
                                <input type="number" class="form-control g-2" id="stud_no" name="stud_no"
                                    placeholder="Enter your Student No." required>
                            </div>
                            @error('stud_no') <span class="text-danger">{{$message}}</span> @enderror
                            <div class="form-group col-12">
                                <label for="exampleInputEmail1">First Name
                                </label>
                                <input type="text" class="form-control g-2" id="stud_fname" name="stud_fname"
                                    placeholder="Enter your Firstname" required>
                            </div>
                            @error('stud_fname') <span class="text-danger">{{$message}}</span> @enderror

                            <div class="form-group col-12">
                                <label for="exampleInputFile">Middle Name</label>

                                <input type="text" class="form-control" id="stud_mname" name="stud_mname"
                                    placeholder="Enter your Middle Name">
                            </div>
                            @error('stud_mname') <span class="text-danger">{{$message}}</span> @enderror

                            <div class="form-group col-12">
                                <label for="exampleInputPassword1">Last Name</label>
                                <input type="text" class="form-control" id="stud_lname" name="stud_lname"
                                    placeholder="Enter your Last Name" required>
                            </div>
                            @error('stud_lname') <span class="text-danger">{{$message}}</span> @enderror



                            <div class="form-group col-6">
                                <label for="exampleInputEmail1">Birthday</label>
                                <input type="date" class="form-control" id="stud_bday" name="stud_bday">
                            </div>



                            <div class="form-group col-6">
                                <label for="exampleInputPassword1">Zip</label>
                                <input type="number" class="form-control" id="zip" name="zip" placeholder="">
                            </div>
                            @error('stud_bday') <span class="text-danger">{{$message}}</span> @enderror
                            @error('stud_zip') <span class="text-danger">{{$message}}</span> @enderror

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer ">
                            <button type="submit" class="btn btn-success col-12">Submit</a>
                        </div>


                    </form>


                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection