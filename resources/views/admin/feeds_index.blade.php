@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Upcoming Feeds Videos/ Tips List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.feeds.create') }}">
                                <i class="fa fa-plus"></i> Upcoming Feeds Videos/ Tips Add</a>
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
                                            <th>Course</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Type</th>
                                            <th>File Name</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feeds as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->course }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->category }}</td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->file_name }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit">
                                                            <a href="{{ route(currentUser()->role . '.feeds.edit', $value->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a>
                                                        </li>
                                                        <li class="delete">
                                                            <form
                                                                action="{{ route(currentUser()->role . '.feeds.destroy', $value->id) }}"
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
