@extends ('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Slider Listing</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route('admin.sliders.create') }}">
                                <i class="fa fa-plus"></i> Add Slider</a>
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
                                            <th>Slider</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Date & Time</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $key => $slider)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $slider->img) }}" class="img-responsive"
                                                        width="100px">
                                                </td>
                                                <td>{{ $slider->title }}</td>
                                                <td>{{ $slider->description }}</td>
                                                <td>{{ $slider->created_at->format('d-m-Y H:i:s') }}</td>
                                                <td>{{ $slider->level }}</td>
                                                <td>
                                                    <form action="{{ route('admin.sliders.is_public', $slider->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="media-body switch-md icon-state">
                                                            <label class="switch custom">
                                                                <input type="checkbox" name="is_public"
                                                                    @if ($slider['is_public'] === '1') checked @endif
                                                                    onchange="this.form.submit()">
                                                                <span class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit">
                                                            <a href="{{ route('admin.sliders.edit', $slider->id) }}"
                                                                class="form-actions"><i data-feather="edit"></i></a>
                                                        </li>
                                                        <li class="delete">
                                                            <form action="{{ route('admin.sliders.destroy', $slider->id) }}"
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
