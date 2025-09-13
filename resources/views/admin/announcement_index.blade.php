@extends('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Announcement List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.announcement.create') }}">
                                <i class="fa fa-plus"></i> Add Announcement</a>
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
                                            <th>Mock Test Paper</th>
                                            <th>Course</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Is New</th>
                                            <th>Is Public</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($announcements as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    @if ($value->mock_test_paper)
                                                        ✅
                                                    @else
                                                        ❌
                                                    @endif
                                                </td>
                                                <td>{{ $value->category }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->description }}</td>
                                                <td>{{ $value->date }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route(currentUser()->role . '.announcement.is_new', $value->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="media-body switch-md icon-state">
                                                            <label class="switch custom">
                                                                <input type="checkbox" name="is_new"
                                                                    @if ($value['is_new'] === '1') checked @endif
                                                                    onchange="this.form.submit()">
                                                                <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form
                                                        action="{{ route(currentUser()->role . '.announcement.is_public', $value->id) }}"
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
                                                            <a href="{{ route(currentUser()->role . '.announcement.edit', $value->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a>
                                                        </li>
                                                        <li class="delete">
                                                            <form
                                                                action="{{ route(currentUser()->role . '.announcement.destroy', $value->id) }}"
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
