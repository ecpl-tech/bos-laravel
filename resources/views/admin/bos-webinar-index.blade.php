@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>BOS Webinar Details</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ isset($webinar) ? route(currentUser()->role . '.bos_webinar_details.update', $webinar->id) : route(currentUser()->role . '.bos_webinar_details.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form theme-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label>Title :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Title" name="title" value="{{ old('title', $webinar->title ?? '') }}">
                                            @error('title')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label>Description :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Description" name="description" value="{{ old('title', $webinar->description ?? '') }}">
                                            @error('description')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Date :</label>
                                            <input class="form-control btn-square" type="date" placeholder="Date" name="webinar_date" value="{{ old('title', $webinar->webinar_date ?? '') }}">
                                            @error('webinar_date')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Time :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Time" name="webinar_time" value="{{ old('title', $webinar->webinar_time ?? '') }}">
                                            @error('webinar_time')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="mb-3">
                                            <label>Video URL :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Video URL" name="video_url" value="{{ old('title', $webinar->video_url ?? '') }}">
                                            @error('video_url')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                                        <h6 class="sub-title">Is Public</h6>
                                        <div class="form-check radio radio-primary ps-0">
                                            <ul class="radio-wrapper">
                                                <li> 
                                                    <input class="form-check-input" id="radio-icon" type="radio" name="is_public" value="1" {{ old('is_public', $webinar->is_public ?? '') == '1' ? 'checked=""' : '' }}>
                                                    <label class="form-check-label" for="radio-icon"><i class="fa fa-eye"></i><span>Yes</span></label>
                                                </li>
                                                <li> 
                                                    <input class="form-check-input" id="radio-icon4" type="radio" name="is_public" value="0" {{ old('is_public', $webinar->is_public ?? '') == '0' ? 'checked=""' : '' }}>
                                                    <label class="form-check-label" for="radio-icon4"><i class="fa fa-eye-slash"></i><span>No</span></label>
                                                </li>
                                            </ul>
                                            @error('is_public')
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Webinar Date</th>
                                        <th>Webinar Time</th>
                                        <th>Video URL</th>
                                        <th>Is Public</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($webinars as $key => $data)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>{{ $data->webinar_date }}</td>
                                            <td>{{ $data->webinar_time }}</td>
                                            <td>{{ $data->video_url }}</td>
                                            <td>
                                                <form
                                                    action="{{ route(currentUser()->role . '.bos_webinar_details.is_public', $data->id) }}"
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
                                                        <a href="{{ route(currentUser()->role . '.bos_webinar_details.edit', $data->id) }}"
                                                            class="form-actions"><i data-feather="edit"></i></a>
                                                    </li>
                                                    <li class="delete">
                                                        <form
                                                            action="{{ route(currentUser()->role . '.bos_webinar_details.destroy', $data->id) }}"
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

