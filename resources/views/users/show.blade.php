@extends('layouts.master')

@section('title')
Detail User
@endsection

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Detail User</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ $user->role }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            </table>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
