@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>User List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role.'.user.add') }}">
                                <i class="fa fa-plus"></i> Add User</a>
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
                            <div class="table-responsive custom-scrollbar">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->mobile }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->show_password }}</td>
                                                <td>{{ $value->role }}</td>
                                                <td>
                                                    <form action="{{ route(currentUser()->role . '.user.status', $value->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="media-body switch-md icon-state">
                                                            <label class="switch custom">
                                                                <input type="checkbox" name="status"
                                                                    @if ($value['is_public'] === '1') checked @endif
                                                                    onchange="this.form.submit()">
                                                                <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a
                                                                href="{{ route(currentUser()->role.'.user.edit', $value->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a></li>
                                                        <li class="delete"><a
                                                                href="{{ route(currentUser()->role.'.user.destroy', $value->id) }}"
                                                                class="form-actions"><i data-feather="trash-2"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
