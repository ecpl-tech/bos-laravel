@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Faculty List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route('admin.faculty.add') }}">
                                <i class="fa fa-plus"></i> Add Faculty</a>
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
                                            <th>Assign Paper</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faculties as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->mobile }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->show_password }}</td>
                                                <td>
                                                    <a href="{{ route('admin.faculty.assign.paper', $value->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Assign Paper
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.faculty.status', $value->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="media-body switch-md icon-state">
                                                            <label class="switch custom">
                                                                <input type="checkbox" name="status"
                                                                    @if ($value['status'] === '1') checked @endif
                                                                    onchange="this.form.submit()">
                                                                <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit"><a
                                                                href="{{ route('admin.faculty.edit', $value->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a></li>
                                                        <li class="delete"><a
                                                                href="{{ route('admin.faculty.destroy', $value->id) }}"
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
