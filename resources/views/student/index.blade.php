@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <a href="{{ route('student.create') }}" class="btn btn-info">Add New Student</a>
            <div class="row">

        
                    <div class="card-head">
                        
                    </div>

                    <div class="card-body">

                        

                        <table class="table table-bordered table-stiped fs-1 text-black">

                            <thead>
                                <tr>
                                    <th>Student No.</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Birthday</th>
                                    <th>Zip</th>
                                </tr>
                            </thead>

                            <tbody  >
                                @foreach ($students as $items)
                                <tr>
                                    
                                    <td>{{$items->stud_no}}</td>
                                    <td>{{$items->stud_fname}}</td>
                                    <td>{{$items->stud_mname}}</td>
                                    <td>{{$items->stud_lname}}</td>
                                    <td>{{$items->stud_bday}}</td>
                                    <td>{{$items->zip}}</td>
                                    <td> 
                                        <span class="badge bg-success"><a href="{{  route('student.edit',$items->id)}}" class="btn btn-success mx-3  "><h5>Edit</h5></a></span>
                                    </td>
                                    <td> 
                                        
                                    <span class="badge bg-danger"><a href="{{  route('student.delete',$items->id)}}" class="m-3 p-lg-5"><h5>Delete</h5></a></span>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div> 
    </div>
    <!-- /.content -->
@endsection