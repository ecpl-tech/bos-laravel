@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Pou User List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route('admin.pou_user.create') }}">
                                <i class="fa fa-plus"></i> Add Pou</a>
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
                                            <th>Region</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Contact Email</th>
                                            <th>Password</th>
                                            <th>Profile</th>
                                            <th>Is Public</th>
                                            <th>Active</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->region }}</td>
                                                <td>{{ $value->address }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->contact_email }}</td>
                                                <td>{{ $value->show_password }}</td>
                                                <td>{{ $value->profile }}</td>
                                                <td>
                                                    <form action="{{ route('admin.pou_user.is_public', $value->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="media-body switch-md icon-state">
                                                            <label class="switch custom">
                                                                <input type="checkbox" name="is_public"
                                                                    @if ($value['is_public'] === '1') checked @endif
                                                                    onchange="this.form.submit()">
                                                                <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit">
                                                            <a href="{{ route('admin.pou_user.edit', $value->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a>
                                                        </li>
                                                        <li class="delete">
                                                            <form
                                                                action="{{ route('admin.pou_user.destroy', $value->id) }}"
                                                                method="POST" style="display:inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="btn-link">
                                                                    <button type="submit" class="btn btn-link p-0 m-0"
                                                                        onclick="return confirm('Are you sure?')">
                                                                        <i data-feather="trash-2"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </li>

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
