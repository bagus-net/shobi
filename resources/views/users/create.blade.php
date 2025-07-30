@extends('layouts.master')

@section('title')
@lang('Create Users')
@endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Tables @endslot
    @slot('title') Add Users @endslot
@endcomponent

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST" id="myForm">
                    @csrf


                    <div class="mb-3 row">
                        <label for="name" class="col-md-2 col-form-label">Name:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Enter name" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-2 col-form-label">Email:</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Enter email" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="role" class="col-md-2 col-form-label">Role:</label>
                        <div class="col-md-10">
                            <select name="role" id="role" class="form-control" required>
                                @foreach($roles as $key => $label)
                                    <option value="{{ $key }}" {{ old('role') == $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <!-- Password Input -->
                        <label for="password" class="col-md-2 col-form-label">Password:</label>
                        <div class="col-md-10">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <!-- Confirm Password Input -->
                        <label for="password_confirmation" class="col-md-2 col-form-label">Confirm Password:</label>
                        <div class="col-md-10">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password" required>
                        </div>
                    </div>

                    <!-- Submit and Back Buttons -->
                    <div class="text-end">
                        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@endsection

@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
