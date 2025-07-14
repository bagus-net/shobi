@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit User</h2>

        <!-- Form untuk mengedit data user -->
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('POST') <!-- Gunakan POST untuk mengupdate, dengan method spoofing -->
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $user->username) }}" required>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                <small>Leave empty to keep the current password</small>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control" required>
                    <option value="1" {{ $user->role == '1' ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->role == '2' ? 'selected' : '' }}>Operator</option>
                    <option value="3" {{ $user->role == '3' ? 'selected' : '' }}>Supervisor</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update User</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Cancel</a>
        </form>
    </div>
@endsection
