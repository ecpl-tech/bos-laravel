@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Mock Test Paper</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="{{ route(currentUser()->role . '.mock_test_papers.index') }}">
                            <i class="fa fa-list"></i> Mock Test Paper List</a>
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
                        {{-- <form action="{{ route(currentUser()->role . '.mock_test_papers.store') }}" method="POST"> --}}
                            <form action="{{ isset($mtp) ? route(currentUser()->role . '.mock_test_papers.update', $mtp->id) : route(currentUser()->role . '.mock_test_papers.store') }}" method="POST">
                        @csrf
                            <div class="form theme-form">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Course :</label>
                                            <select class="form-select btn-square" name="course">
                                                <option value="">-- Select Course --</option>
                                                <option value="foundation" {{ (isset($mtp) && $mtp->course == 'foundation') ? 'selected' : '' }}>Foundation</option>
                                                <option value="intermediate" {{ (isset($mtp) && $mtp->course == 'intermediate') ? 'selected' : '' }}>Intermediate</option>
                                                <option value="final" {{ (isset($mtp) && $mtp->course == 'final') ? 'selected' : '' }}>Final</option>
                                            </select>
                                            @error('course')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="mb-3">
                                            <label>Title :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Title"
                                                name="title" value="{{ old('title', $mtp->title ?? '') }}">
                                            @error('title')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Start date & End date :</label>
                                            <div class="input-group flatpicker-calender">
                                                <input class="form-control btn-square" placeholder="Start date & End date "
                                                    id="range-date" type="date" name="active_date" value="{{ old('active_date', $mtp->active_date ?? '') }}">
                                            </div>
                                            @error('active_date')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" name="submit" class="btn btn-success me-3 text-end">Add</button>
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

