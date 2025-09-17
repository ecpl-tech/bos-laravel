@extends('admin.layout.app')
@section('main-section')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Push Notification List</h4>
                    </div>
                    <div class="col-6">
                        <div class="justify-content-end d-flex">
                            <a class="btn btn-primary" href="{{ route(currentUser()->role . '.push-notification.create') }}">
                                <i class="fa fa-plus"></i> Add Push Notification</a>
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
                                            <th>Course</th>
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Send Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pushnotifications as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->course }}</td>
                                                <td>{{ $value->subject }}</td>
                                                <td>{!! $value->description !!}</td>
                                                <td>
                                                    @if ($value->sent_status == 1)
                                                        <button class="btn btn-success btn-sm" disabled>
                                                            <i class="fa fa-check-circle me-1"></i> Sent
                                                        </button>
                                                    @else
                                                        <form
                                                            action="{{ route(currentUser()->role . '.push-notification.send', $value->id) }}"
                                                            method="POST" class="d-inline send-form">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary btn-sm send-btn">
                                                                <i class="fa fa-paper-plane me-1"></i> Send
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>
                                                    <ul class="action">
                                                        <li class="edit">
                                                            @if ($value->sent_status == 1)
                                                                <a href="javascript:void(0)" class="form-actions text-muted"
                                                                    style="pointer-events: none; opacity: 0.5;">
                                                                    <i data-feather="edit"></i>
                                                                </a>
                                                            @else
                                                                <a href="{{ route(currentUser()->role . '.push-notification.edit', $value->id) }}"
                                                                    class="form-actions">
                                                                    <i data-feather="edit"></i>
                                                                </a>
                                                            @endif
                                                        </li>
                                                        <li class="delete">
                                                            @if ($value->sent_status == 1)
                                                                <a href="javascript:void(0)" class="form-actions text-muted"
                                                                    style="pointer-events: none; opacity: 0.5;">
                                                                    <i data-feather="trash-2"></i>
                                                                </a>
                                                            @else
                                                                <form
                                                                    action="{{ route(currentUser()->role . '.push-notification.destroy', $value->id) }}"
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
                                                            @endif
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
