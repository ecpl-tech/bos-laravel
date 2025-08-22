@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>User {{ isset($user) ? 'Update' : 'Add' }}</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="{{ route(currentUser()->role.'.user.list') }}">
                            <i class="fa fa-list"></i> User List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form theme-form">
                            {{-- <form action="{{ route($currentUser->role . '.user.store') }}" method="post" enctype="multipart/form-data"> --}}
                            <form action="{{ isset($user) ? route(currentUser()->role . '.user.update', $user->id) : route(currentUser()->role . '.user.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Name* :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Name" name="name" value="{{ old('name', $user->name ?? '') }}">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Mobile* :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Mobile" name="mobile" value="{{ old('mobile', $user->mobile ?? '') }}">
                                            @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Email* :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Email" name="email" value="{{ old('email', $user->email ?? '') }}">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Password* :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Password" name="password" value="{{ old('password', $user->show_password ?? '') }}">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="role">Role* :</label>
                                            <select class="form-select btn-square" id="role" name="role">
                                                <option value="">Select Role</option>
                                                <option value="superadmin" {{ old('role', $user->role ?? '') == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                                                <option value="admin" {{ old('role', $user->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="faculty" {{ old('role', $user->role ?? '') == 'faculty' ? 'selected' : '' }}>Faculty</option>
                                                <option value="esahayta" {{ old('role', $user->role ?? '') == 'esahayta' ? 'selected' : '' }}>eSahayta</option>
                                                <option value="techsupport" {{ old('role', $user->role ?? '') == 'techsupport' ? 'selected' : '' }}>Tech Support</option>
                                            </select>
                                            @error('role')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="button" value="{{ isset($user) ? 'Update' : 'Add' }}" class="btn btn-success me-3" onclick="this.form.submit()">
                                        {{-- <div class="text-end"><a class="btn btn-success me-3" href="#">Add</a> --}}

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
