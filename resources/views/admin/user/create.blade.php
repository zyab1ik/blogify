@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adding a user</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Adding a user</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">User's form</h3>
                            </div>
                            <form class="form-horizontal" action="{{ route('admin.user.store') }} " method="POST">
                                @csrf
                                <div class="card-body p-2">
                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="User name"
                                           id="username">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-body p-2">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" id="email">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-body p-2">
                                    <label for="selectOption">Select role</label>
                                    <select name="role" id="selectOption" class="custom-select">
                                        @foreach($roles as $id => $role)
                                            <option value="{{ $id }}"
                                                {{ $id == old('role') ? ' selected' : ''}}
                                            >{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
