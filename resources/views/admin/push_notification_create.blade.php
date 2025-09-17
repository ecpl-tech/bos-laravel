@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Push Notification Create</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.push-notification.index') }}">
                                <i class="fa fa-list"></i> Push Notification List</a>
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
                            <form id="PushNotificationForm"
                                action="{{ route(currentUser()->role . '.push-notification.store') }}" method="POST">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Course :</label>
                                                <select class="form-select btn-square" name="course">
                                                    <option value="">-- Select Course --</option>
                                                    <option value="All" {{ old('course') == 'All' ? 'selected' : '' }}>
                                                        All</option>
                                                    <option value="Foundation"
                                                        {{ old('course') == 'Foundation' ? 'selected' : '' }}>
                                                        Foundation</option>
                                                    <option value="Intermediate"
                                                        {{ old('course') == 'Intermediate' ? 'selected' : '' }}>
                                                        Intermediate
                                                    </option>
                                                    <option value="Final" {{ old('course') == 'Final' ? 'selected' : '' }}>
                                                        Final</option>
                                                    <option value="Member"
                                                        {{ old('course') == 'Member' ? 'selected' : '' }}>
                                                        Member</option>
                                                </select>
                                                @error('course')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="mb-3">
                                                <label>Subject :</label>
                                                <input class="form-control btn-square" type="text" placeholder="Subject"
                                                    name="subject" value="{{ old('subject') }}">
                                                @error('subject')
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
                                                        value="{{ old('description') }}">
                                                    <div id="editor">{!! old('description') !!}</div>
                                                </div>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
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
            var editor = new Quill("#editor", {
                modules: {
                    toolbar: "#toolbar"
                },
                theme: "snow",
                placeholder: "Enter your messages...",
            });
            document.querySelector("#PushNotificationForm").addEventListener("submit", function() {
                let plainText = editor.getText().trim();
                if (plainText.length === 0) {
                    e.preventDefault();
                }
                document.querySelector("#description").value = editor.root.innerHTML;
            });
        </script>
    @endpush
@endsection
