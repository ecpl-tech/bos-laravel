@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Batch Details</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ isset($batchDetails) ? route(currentUser()->role . '.batch_details.update', $batchDetails->id) : route(currentUser()->role . '.batch_details.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form theme-form">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Paper :</label>
                                            <select class="form-select btn-square" name="course">
                                                <option value="" disabled selected>--- Please Select Course ---</option>
                                                <option value="foundation" {{ old('course', $batchDetails->course ?? '') == 'foundation' ? 'selected' : '' }}>Foundation</option>
                                                <option value="intermediate" {{ old('course', $batchDetails->course ?? '') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                                <option value="final" {{ old('course', $batchDetails->course ?? '') == 'final' ? 'selected' : '' }}>Final</option>
                                            </select>
                                            @error('course')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Batch :</label>
                                            <input class="form-control btn-square" type="text" name="batch" value="{{ old('batch', $batchDetails->batch ?? '') }}">
                                            @error('batch')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Batch Status :</label>
                                            <select class="form-select btn-square" name="batch_status">
                                                <option value="" disabled selected>--- Please Select Course ---</option>
                                                <option value="previous" {{ old('batch_status', $batchDetails->batch_status ?? '') == 'previous' ? 'selected' : '' }}>Previous</option>
                                                <option value="current" {{ old('batch_status', $batchDetails->batch_status ?? '') == 'current' ? 'selected' : '' }}>Current</option>
                                                <option value="upcoming" {{ old('batch_status', $batchDetails->batch_status ?? '') == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                                            </select>
                                            @error('batch_status')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Batch Start Date :</label>
                                            <input class="form-control btn-square" type="date" name="batch_start_date" value="{{ old('batch_start_date', $batchDetails->batch_start_date ?? '') }}">
                                            @error('batch_start_date')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Batch End Date :</label>
                                            <input class="form-control btn-square" type="date" name="batch_end_date" value="{{ old('batch_end_date', $batchDetails->batch_end_date ?? '') }}">
                                            @error('batch_end_date')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                                        <h6 class="sub-title">Is Public</h6>
                                        <div class="form-check radio radio-primary ps-0">
                                            <ul class="radio-wrapper">
                                                <li> 
                                                    <input class="form-check-input" id="radio-icon" type="radio" name="is_public" value="1" {{ old('is_public', $batchDetails->is_public ?? '') == '1' ? 'checked=""' : '' }}>
                                                    <label class="form-check-label" for="radio-icon"><i class="fa fa-eye"></i><span>Yes</span></label>
                                                </li>
                                                <li> 
                                                    <input class="form-check-input" id="radio-icon4" type="radio" name="is_public" value="0" {{ old('is_public', $batchDetails->is_public ?? '') == '0' ? 'checked=""' : '' }}>
                                                    <label class="form-check-label" for="radio-icon4"><i class="fa fa-eye-slash"></i><span>No</span></label>
                                                </li>
                                            </ul>
                                            @error('is_public')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label>Display Name:</label>
                                            <input class="form-control btn-square" type="text" placeholder="Display Name" name="display_name" value="{{ old('display_name', $batchDetails->display_name ?? '') }}">
                                            @error('display_name')
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

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Paper List</h4>
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
                                        <th>Batch</th>
                                        <th>Status</th>
                                        <th>Display Name</th>
                                        <th>Batch Start & End Date</th>
                                        <th>Is Public</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batches as $key => $data)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ ucfirst($data->course) }}</td>
                                            <td>{{ $data->batch }}</td>
                                            <td>@if ($data->batch_status == 'upcoming') 
                                                    <span class="btn btn-warning btn-xs">{{ ucfirst($data->batch_status) }}</span> 
                                                @elseif ($data->batch_status == 'current') 
                                                    <span class="btn btn-success btn-xs">{{ ucfirst($data->batch_status) }}</span> 
                                                @else
                                                    <span class="btn btn-secondary btn-xs">{{ ucfirst($data->batch_status) }}</span>
                                                @endif</td>
                                            <td>{{ $data->display_name }}</td>
                                            <td>{{ $data->batch_start_date." to ".$data->batch_end_date }}</td>
                                            <td>
                                                <form
                                                    action="{{ route(currentUser()->role . '.batch_details.is_public', $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="media-body switch-md icon-state">
                                                        <label class="switch custom">
                                                            <input type="checkbox" name="is_public"
                                                                @if ($data['is_public'] === '1') checked @endif
                                                                onchange="this.form.submit()">
                                                            <span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="{{ route(currentUser()->role . '.batch_details.edit', $data->id) }}"
                                                            class="form-actions"><i data-feather="edit"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        <form
                                                            action="{{ route(currentUser()->role . '.batch_details.destroy', $data->id) }}"
                                                            method="POST" style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="btn-link">
                                                                <button type="submit" class="btn btn-link p-0 m-0"
                                                                    onclick="return confirm('Are you sure?')">
                                                                    <i data-feather="trash-2"></i>
                                                                </button>
                                                            </div>
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

