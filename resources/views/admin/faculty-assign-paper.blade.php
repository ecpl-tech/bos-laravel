@extends ('admin.layout.app')
@section('main-section')
    <style>
        .radio-wrapper li,
        .checkbox-wrapper li {
            max-width: 170px;
        }
    </style>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h4>Faculty Assign Paper</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('admin.faculty.assign.paper.store', $faculty->id) }}" method="POST">
                        @csrf
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Course</h4>
                                        </div>
                                        @php
                                            $courses = ['foundation', 'intermediate', 'final'];
                                        @endphp
                                        <div class="card-body">
                                            <ul class="nav nav-tabs border-tab mb-0" id="bottom-tab" role="tablist">
                                                @foreach ($courses as $key => $value)
                                                    <li class="nav-item">
                                                        <a class="nav-link nav-border txt-info tab-info {{ $key == 0 ? 'active' : '' }} pt-0"
                                                            id="tab-{{ $value }}" data-bs-toggle="tab"
                                                            href="#content-{{ $value }}" role="tab"
                                                            aria-controls="content-{{ $value }}"
                                                            aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                                            <i class="icofont icofont-newspaper"></i>
                                                            </i>{{ ucfirst($value) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <div class="tab-content" id="bottom-tabContent">
                                                @foreach ($courses as $key => $value)
                                                    <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                                        id="content-{{ $value }}" role="tabpanel"
                                                        aria-labelledby="tab-{{ $value }}">
                                                        <div class="card-body px-0 pb-0">
                                                            <div class="card-wrapper border rounded-3 checkbox-checked">
                                                                <h6 class="sub-title text-capitalize">{{ $value }}
                                                                </h6>
                                                                @foreach ($Papers->where('course', $value) as $paper)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            id="Check-{{ $paper->id }}" type="checkbox"
                                                                            name="paper_ids[]" value="{{ $paper->id }}"
                                                                            {{ in_array($paper->id, $assignedPapers) ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="Check-{{ $paper->id }}">
                                                                            {{ $paper->papername }}
                                                                            ({{ $paper->scheme }})
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @error('paper_ids')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="text-end">
                                                        <button class="btn btn-primary me-3" href="#">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Assign Paper Name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($assignedPaperList as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->paper->papername . ' (' . $value->paper->scheme . ')' ?? 'N/A' }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.faculty.assign.paper.status', $value->id) }}"
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
                                            </tr>
                                        @empty
                                            <tr class="bg-dark">
                                                <td valign="top" colspan="3" class="dataTables_empty">No data available
                                                    in table</td>
                                            </tr>
                                        @endforelse
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
