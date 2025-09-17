@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ Str::upper(request('class')) }}  - Lecture List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary mx-1" href="{{ route(currentUser()->role . '.lecture.add') }}">
                            <i class="fa fa-plus"></i> Add Lecture</a>
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
                        <div class="list-product-header">
                            <div class="collapse show mb-0" id="collapseProduct">
                                <div class="card card-body list-product-body m-0">
                                    <form method="GET" action="">
                                    <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">
                                        
                                            <div class="col">
                                                <select class="form-select" name="course">
                                                    <option value="">-- Select Course --</option>
                                                    @foreach($courses ?? [] as $course)
                                                        <option value="{{ $course }}" {{ request('course') == $course ? 'selected' : '' }}>{{ $course }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="paper_name" class="form-select">
                                                    <option value="">Select Paper</option>
                                                    @foreach($papers ?? [] as $paper)
                                                        <option value="{{ $paper }}" {{ request('paper_name') == $paper ? 'selected' : '' }}>{{ $paper }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                {{-- <div class="input-group">
                                                    <input class="form-control" name="date_start" type="date" value="{{ request('date_start') }}" placeholder="Start date">
                                                    <input class="form-control" name="date_end" type="date" value="{{ request('date_end') }}" placeholder="End date">
                                                </div> --}}
                                                <div class="input-group flatpicker-calender">
                                                    <input class="form-control" placeholder="Start date & End date" id="range-date" name="date_range" type="date" value="{{ request('date_range') }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <select name="faculty_name" class="form-select">
                                                    <option value="">Select Faculty Names</option>
                                                    @foreach($faculties ?? [] as $faculty)
                                                        <option value="{{ $faculty }}" {{ request('faculty_name') == $faculty ? 'selected' : '' }}>{{ $faculty }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Apply</button>

                                                <a href="{{ route(currentUser()->role . '.lecture.list', ['class' => request('class')]) }}" class="btn btn-light">Clear</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Course</th>
                                        <th>Date & Time</th>
                                        <th>Session</th>
                                        <th>Paper Detail</th>
                                        <th>Topic</th>
                                        <th>Faculty</th>
                                        <th>Batch</th>
                                        <th>Video URL</th>
                                        <th>Zoom Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($class_list as $lecture)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $lecture->course }}</td>
                                        <td>{{ $lecture->date }} </br> {{ $lecture->time }}</td>
                                        <td>{{ ucfirst($lecture->session) }}</td>
                                        <td>{{ $lecture->class == 'bfys' ? $lecture->bfys_paper : $lecture->paper_name }}</td>
                                        <td>{{ $lecture->topic }}</td>
                                        <td>{{ $lecture->faculty_name }}</td>
                                        <td>{{ $lecture->batch }}</td>
                                        <td>{{ $lecture->video_url }}</td>
                                        <td>{{ $lecture->zoom_link }}</td>
                                        <td>
                                            <form
                                                action="{{ route(currentUser()->role . '.lecture.status', $lecture->id) }}"
                                                method="post">
                                                @csrf
                                                <div class="media-body switch-md icon-state">
                                                    <label class="switch custom">
                                                        <input type="checkbox" name="is_public"
                                                            @if ($lecture['is_public'] === '1') checked @endif
                                                            onchange="this.form.submit()">
                                                        <span class="switch-state"></span>
                                                    </label>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="{{ route(currentuser()->role.'.lecture.edit', $lecture->id) }}">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <form action="{{ route(currentuser()->role.'.lecture.destroy', $lecture->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="border:none; background:none; padding:0; color: var(--theme-deafult);" onclick="return confirm('Are you sure you want to delete this lecture?');">
                                                            <i data-feather="trash-2"></i>
                                                        </button>
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
