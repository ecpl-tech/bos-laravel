@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Students Journal Edit</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.student_journals.index') }}">
                                <i class="fa fa-list"></i> Students Journal List</a>
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
                            <form action="{{ route(currentUser()->role . '.student_journals.update', $journal->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label>Title :</label>
                                                <input class="form-control btn-square" type="text" placeholder="Title"
                                                    name="title" value="{{ $journal->title, old('title') }}">
                                                @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label>PDF Url :</label>
                                                <input class="form-control btn-square" type="text" placeholder="PDF Url"
                                                    name="url" value="{{ $journal->url, old('url') }}">
                                                @error('url')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end"><button class="btn btn-success me-3"
                                                    type="submit">Update</button>
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
