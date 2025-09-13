@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Upcoming Feeds Videos/ Tips</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.feeds.index') }}">
                                <i class="fa fa-list"></i> feeds List</a>
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
                            <form action="{{ route(currentUser()->role . '.feeds.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Course :</label>
                                                <select class="form-select btn-square" name="course">
                                                    <option value="">Please Select</option>
                                                    <option value="all" {{ old('course') == 'all' ? 'selected' : '' }}>
                                                        All
                                                    </option>
                                                    <option value="foundation"
                                                        {{ old('course') == 'foundation' ? 'selected' : '' }}>Foundation
                                                    </option>
                                                    <option value="intermediate"
                                                        {{ old('course') == 'intermediate' ? 'selected' : '' }}>Intermediate
                                                    </option>
                                                    <option value="final" {{ old('course') == 'final' ? 'selected' : '' }}>
                                                        Final</option>
                                                </select>
                                                @error('course')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Category :</label>
                                                <div class="col-sm-12 form-control btn-square d-flex">
                                                    <div class="col-sm-6">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="Education" type="radio"
                                                                name="category" value="education"
                                                                {{ old('category') == 'education' ? 'checked' : '' }}
                                                                checked>
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="Education">Education</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="Other" type="radio"
                                                                name="category" value="other"
                                                                {{ old('category') == 'other' ? 'checked' : '' }}>
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="Other">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('category')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Select Type :</label>
                                                <div class="col-sm-12 form-control btn-square d-flex">
                                                    <div class="col-sm-6">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="Video" type="radio"
                                                                name="type" value="video"
                                                                {{ old('type') == 'video' ? 'checked' : '' }}>
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="Video">Video</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="file" type="radio"
                                                                name="type" value="file"
                                                                {{ old('type') == 'file' ? 'checked' : '' }}>
                                                            <label class="form-check-label mb-0 px-1" for="file">File
                                                                Upload</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('type')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="Inputtext">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Video Id :</label>
                                                        <input class="form-control btn-square" type="text"
                                                            placeholder="Video Id" name="video_id"
                                                            value="{{ old('video_id') }}">
                                                        @error('video_id')
                                                            <span class="text-danger f-w-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid"
                                                            src="{{ URL::asset('assets/custom/embad.jpg') }}"
                                                            alt="looginpage">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="Inputpdf">
                                            <div class="mb-3">
                                                <label>Upload File:</label>
                                                <input class="form-control btn-square" type="file" name="file">
                                                <span class="text-muted f-w-500">Only MP4 format allowed. Max file size: 20
                                                    MB</span><br>

                                                @error('file')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label>Title :</label>
                                                <input class="form-control btn-square" type="text" placeholder="Title"
                                                    name="title" value="{{ old('title') }}">
                                                @error('title')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-success me-3" type="submit">Add</button>
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
    @push('scripts')
        <script>
            $(document).ready(function() {
                function type_toggleFields() {
                    var selectedType = $('input[name="type"]:checked').val();
                    document.getElementById('Inputtext').style.display = (selectedType === "video") ? 'block' : 'none';
                    document.getElementById('Inputpdf').style.display = (selectedType === "file") ? 'block' : 'none';
                }
                type_toggleFields();
                $('input[name="type"]').on('change', function() {
                    type_toggleFields();
                });
            });
        </script>
    @endpush
@endsection
