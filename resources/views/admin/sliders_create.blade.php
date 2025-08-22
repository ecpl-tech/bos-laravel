@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h4>Slider Create</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="sliderForm" action="{{ route('admin.sliders.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Upload Image: </label>
                                                <input class="form-control btn-square" type="file" name="img">
                                                @error('img')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Level :</label>
                                                <select class="form-select btn-square" name="level">
                                                    <option value="">Please Select</option>
                                                    <option value="all" {{ old('level') == 'all' ? 'selected' : '' }}>All
                                                    </option>
                                                    <option value="foundation"
                                                        {{ old('level') == 'foundation' ? 'selected' : '' }}>Foundation
                                                    </option>
                                                    <option value="intermediate"
                                                        {{ old('level') == 'intermediate' ? 'selected' : '' }}>Intermediate
                                                    </option>
                                                    <option value="final" {{ old('level') == 'final' ? 'selected' : '' }}>
                                                        Final</option>
                                                </select>
                                                @error('level')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Is Public :</label>
                                                <div class="col-sm-12 form-control btn-square d-flex">
                                                    <div class="col-sm-4">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="active" type="radio"
                                                                name="is_public" value="1" checked>
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="active">Active</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-check radio radio-success mb-0 mt-1">
                                                            <input class="form-check-input" id="inactive" type="radio"
                                                                name="is_public" value="0">
                                                            <label class="form-check-label mb-0 px-1"
                                                                for="inactive">Inactive</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('is_public')
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
                                        <div class="col-sm-12">
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
                                                    <input type="hidden" name="description" id="description">
                                                    <div id="editor">{!! old('description') !!}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-success me-3">Add</button>
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
@endsection
