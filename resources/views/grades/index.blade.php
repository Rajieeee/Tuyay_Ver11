@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Grades') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('ITELEC4 =') }} <span style="color: green;">1.0</span>
                            </p>
                            <p class="card-text">
                                {{ __('CIS =') }} <span style="color: green;">1.0</span>
                            </p>
                            <p class="card-text">
                                {{ __('IAS =') }} <span style="color: green;">1.0</span>
                            </p>
                            <p class="card-text">
                                {{ __('SIA =') }} <span style="color: green;">1.0</span>
                            </p>
                            <p class="card-text">
                                {{ __('MS =') }} <span style="color: green;">1.0</span>
                            </p>
                            <p class="card-text">
                                {{ __('HCI =') }} <span style="color: green;">1.0</span>
                            </p>
                            <p class="card-text">
                                {{ __('CAPSTONE =') }} <span style="color: green;">1.0</span>
                            </p>
                            <br>
                            <p class="card-text">
                                {{ __('GWA =') }} <span style="color: black; font-weight: 700; font-size: 1.2rem;">1.000</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection