@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h4>Pou User Edit</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.pou_user.update', $user->id) }}" method="POST">
                                @csrf @method('PUT')
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Name of Branch :</label>
                                                <input class="form-control btn-square" type="text"
                                                    placeholder="Name of Branch" name="name"
                                                    value="{{ old('name', $user->name) }}">
                                                @error('name')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Region :</label>
                                                <input class="form-control btn-square" type="text" placeholder="Region"
                                                    name="region" value="{{ old('region', $user->region) }}">
                                                @error('region')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Email :</label>
                                                <input class="form-control btn-square" type="email" placeholder="Email"
                                                    name="email" value="{{ old('email', $user->email) }}">
                                                @error('email')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Password :</label>
                                                <input class="form-control btn-square" type="text" placeholder="Password"
                                                    name="password" value="{{ old('password', $user->show_password) }}">
                                                @error('password')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-primary me-3" href="#">Add</button>
                                            </div>
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
@endsection
