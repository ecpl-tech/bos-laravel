@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Mock Test Paper List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="{{ route(currentUser()->role . '.mock_test_papers.create') }}">
                            <i class="fa fa-plus"></i> Add Mock Test Paper</a>
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
                                        <th>Start date & End date</th>
                                        <th>POUs</th>
                                        <th>Student</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mtps as $mtp)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mtp->course }}</td>
                                        <td>{{ $mtp->title }}</td>
                                        <td>{{ $mtp->active_date }}</td>
                                        <td>
                                            <a href="#" class="py-1 d-block">
                                                <span class="badge badge-danger p-1">103</span>
                                            </a>
                                            <a href="#" class="py-1 d-block">
                                                <span class="badge badge-warning p-1">Count</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" class="py-1 d-block">
                                                <span class="badge badge-danger p-1">17699</span>
                                            </a>
                                        </td>
                                        <td>
                                            <form
                                                action="{{ route(currentUser()->role . '.mock_test_papers.is_public', $mtp->id) }}"
                                                method="post">
                                                @csrf
                                                <div class="media-body switch-md icon-state">
                                                    <label class="switch custom">
                                                        <input type="checkbox" name="is_public"
                                                            @if ($mtp['is_public'] === '1') checked @endif
                                                            onchange="this.form.submit()">
                                                        <span class="switch-state"></span>
                                                    </label>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="{{ route(currentUser()->role . '.mock_test_papers.edit', $mtp->id) }}" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Edit">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                </li>
                                                <li class="edit">                                          
                                                    <a href="{{ route(currentUser()->role . '.mock_test_papers.destroy', $mtp->id) }}" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Delete">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </li>
                                                <li class="edit">
                                                    <a href="{{ route(currentUser()->role . '.mock_test_paper_details.index', [$mtp->course,$mtp->id]) }}" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Add Paper">
                                                        <i data-feather="plus-circle"></i>
                                                    </a>
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

