@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12">
                        <h4>Faculty Add</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.faculty.store') }}" method="POST">
                                @csrf
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Name of Faculty :</label>
                                                <input class="form-control btn-square" type="text"
                                                    placeholder="Faculty Name" name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Email :</label>
                                                <input class="form-control btn-square" value="{{ old('email') }}"
                                                    type="email" placeholder="Email" name="email">
                                                @error('email')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Mobile No :</label>
                                                <input class="form-control btn-square" type="text"
                                                    placeholder="Mobile No" name="mobile" value="{{ old('mobile') }}">
                                                @error('mobile')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label>Password :</label>
                                                <input class="form-control btn-square" type="password"
                                                    placeholder="Password" name="password" value="{{ old('password') }}">
                                                @error('password')
                                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Status</label>
                                            <div class="col-sm-12 form-control btn-square d-flex">
                                                <div class="col-sm-4">
                                                    <div class="form-check radio radio-success mb-0 mt-1">
                                                        <input class="form-check-input" id="Active" type="radio"
                                                            name="status" value="1"
                                                            {{ old('status', '1') == '1' ? 'checked' : '' }}>
                                                        <label class="form-check-label mb-0 px-1"
                                                            for="Active">Active</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-check radio radio-success mb-0 mt-1">
                                                        <input class="form-check-input" id="Inactive" type="radio"
                                                            name="status" value="0"
                                                            {{ old('status') == '0' ? 'checked' : '' }}>
                                                        <label class="form-check-label mb-0 px-1"
                                                            for="Inactive">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('status')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label>Select Paper :</label>
                                            <div class="row">
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                        <h6 class="sub-title">Final</h6>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-1" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-1">Paper 1:
                                                                Financial Reporting (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-2" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-2">Paper 2:
                                                                Strategic Financial Management (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-3" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-3">Paper 3:
                                                                Advanced Auditing and Professional Ethics (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-4" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-4">Paper 4:
                                                                Corporate & Economic Laws (old)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                        <h6 class="sub-title">Intermediate</h6>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-5" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-5">Paper 1:
                                                                Financial Reporting (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-6" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-6">Paper 2:
                                                                Strategic Financial Management (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-7" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-7">Paper 3:
                                                                Advanced Auditing and Professional Ethics (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-8" type="checkbox"
                                                                value="">
                                                            <label class="form-check-label" for="Check-8">Paper 4:
                                                                Corporate & Economic Laws (old)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="card-wrapper border rounded-3 checkbox-checked">
                                                        <h6 class="sub-title">Foundation</h6>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-9"
                                                                type="checkbox" value="">
                                                            <label class="form-check-label" for="Check-9">Paper
                                                                1:
                                                                Financial Reporting (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-10"
                                                                type="checkbox" value="">
                                                            <label class="form-check-label" for="Check-10">Paper
                                                                2:
                                                                Strategic Financial Management (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-11"
                                                                type="checkbox" value="">
                                                            <label class="form-check-label" for="Check-11">Paper
                                                                3:
                                                                Advanced Auditing and Professional Ethics (old)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="Check-12"
                                                                type="checkbox" value="">
                                                            <label class="form-check-label" for="Check-12">Paper
                                                                4:
                                                                Corporate & Economic Laws (old)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-primary me-3" href="#">Add</button>
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
