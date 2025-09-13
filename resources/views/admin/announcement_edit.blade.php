@extends('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Announcement Edit</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.announcement.index') }}">
                                <i class="fa fa-list"></i> Announcement List</a>
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
                            <form id="announcementForm"
                                action="{{ route(currentUser()->role . '.announcement.update', $announcement->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Course :</label>
                                                <select class="form-select btn-square" name="course">
                                                    <option value="">-- Select Course --</option>
                                                    <option value="All"
                                                        {{ old('course', $announcement->course) == 'All' ? 'selected' : '' }}>
                                                        All</option>
                                                    <option value="Foundation"
                                                        {{ old('course', $announcement->course) == 'Foundation' ? 'selected' : '' }}>
                                                        Foundation</option>
                                                    <option value="Intermediate"
                                                        {{ old('course', $announcement->course) == 'Intermediate' ? 'selected' : '' }}>
                                                        Intermediate
                                                    </option>
                                                    <option value="Final"
                                                        {{ old('course', $announcement->course) == 'Final' ? 'selected' : '' }}>
                                                        Final</option>
                                                </select>
                                                @error('course')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Category :</label>
                                                <select class="form-select btn-square" name="category">
                                                    <option value="">-- Select Category --</option>
                                                    <option value="bos"
                                                        {{ old('category', $announcement->category) == 'bos' ? 'selected' : '' }}>
                                                        BOS
                                                    </option>
                                                    <option value="examination"
                                                        {{ old('category', $announcement->category) == 'examination' ? 'selected' : '' }}>
                                                        Examination
                                                    </option>
                                                    <option value="faq"
                                                        {{ old('category', $announcement->category) == 'faq' ? 'selected' : '' }}>
                                                        FAQ</option>
                                                </select>
                                                @error('category')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Select Type :</label>
                                                <div class="col-sm-12 form-control btn-square d-flex">
                                                    <div class="col-sm-4">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="Text" type="radio"
                                                                name="type" value="text"
                                                                {{ old('type', $announcement->type) == 'text' ? 'checked' : '' }}>
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="Text">Text</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="pdf" type="radio"
                                                                name="type" value="pdf"
                                                                {{ old('type', $announcement->type) == 'pdf' ? 'checked' : '' }}>
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="pdf">PDF</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('type')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12" id="Inputtext">
                                            <div class="mb-3">
                                                <label>Description :</label>
                                                <div class="toolbar-box">
                                                    <div id="toolbar">
                                                        <button class="ql-bold">Bold </button>
                                                        <button class="ql-italic">Italic </button>
                                                        <button class="ql-underline">underline</button>
                                                        <button class="ql-strike">Strike </button>
                                                        <button class="ql-list" value="ordered">List </button>
                                                        <button class="ql-list" value="bullet"> </button>
                                                        <button class="ql-indent" value="-1"> </button>
                                                        <button class="ql-indent" value="+1"></button>
                                                        <button class="ql-link"></button>
                                                        <button class="ql-image"></button>
                                                    </div>
                                                    <input type="hidden" name="description" id="description"
                                                        value="{{ old('description', $announcement->description) }}">
                                                    <div id="editor">{!! old('description', $announcement->type == 'text' ? $announcement->description : '') !!}</div>
                                                </div>
                                                @error('description')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12" id="Inputpdf">
                                            <div class="mb-3">
                                                <label>PDF URL :</label>
                                                <input class="form-control btn-square" type="text" placeholder="PDF URL"
                                                    name="pdf_link"
                                                    value="{{ old('pdf_link', $announcement->type == 'pdf' ? $announcement->description : '') }}">
                                                @error('pdf_link')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="mb-3">
                                                <label>Title :</label>
                                                <input class="form-control btn-square" type="text"
                                                    placeholder="Announcement Title" name="title"
                                                    value="{{ old('title', $announcement->title) }}">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Date :</label>
                                                <input class="form-control btn-square" type="date" name="date"
                                                    value="{{ old('date', $announcement->date) }}">
                                                @error('date')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <div class="col-12 checkbox-checked">
                                                    <input type="checkbox" name="mock_test_paper" value="1"
                                                        {{ old('mock_test_paper', $announcement->mock_test_paper) ? 'checked' : '' }}>
                                                    <label for="flexCheckDefault">Mock Test Paper</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-success me-3" type="submit">Update</button>
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
                    document.getElementById('Inputtext').style.display = (selectedType === "text") ? 'block' : 'none';
                    document.getElementById('Inputpdf').style.display = (selectedType === "pdf") ? 'block' : 'none';
                }
                type_toggleFields();
                $('input[name="type"]').on('change', function() {
                    type_toggleFields();
                });
            });
        </script>
        <script src="{{ URL::asset('assets/js/editors/quill.js') }}"></script>
        <script>
            var editor = new Quill("#editor", {
                modules: {
                    toolbar: "#toolbar"
                },
                theme: "snow",
                placeholder: "Enter your messages...",
            });
            document.querySelector("#announcementForm").addEventListener("submit", function() {
                let plainText = editor.getText().trim();
                if (plainText.length === 0) {
                    e.preventDefault();
                }
                document.querySelector("#description").value = editor.root.innerHTML;
            });
        </script>
    @endpush
@endsection
