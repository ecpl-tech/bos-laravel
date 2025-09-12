@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Mock Test Paper Details</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ isset($mtpd) ? route(currentUser()->role . '.mock_test_paper_details.update', $mtpd->id) : route(currentUser()->role . '.mock_test_paper_details.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form theme-form">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Paper :</label>
                                            <input type="hidden" name="mtp_id" value="{{ $mtp->id }}">
                                            <input type="hidden" name="course" value="{{ $course }}">
                                            <select class="form-select btn-square" name="paper_id">
                                                <option value="" disabled selected>--- Please Select Paper ---</option>
                                                @foreach ($papers as $paper)
                                                    <option value="{{ $paper->id }}" {{ (isset($mtpd) && $mtpd->paper_id == $paper->id) ? 'selected' : '' }}>{{ $paper->papername }}</option>
                                                @endforeach
                                            </select>
                                            @error('paper_id')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Paper Date :</label>
                                            <input class="form-control btn-square" type="date" name="paper_date" value="{{ old('paper_date', $mtpd->paper_date ?? '') }}">
                                            @error('paper_date')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Paper Time :</label>
                                            <input class="form-control btn-square" type="text" placeholder="Ex..2PM to 5PM" name="paper_time" value="{{ old('paper_time', $mtpd->paper_time ?? '') }}">
                                            @error('paper_time')
                                                <span class="text-danger f-w-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Question File :</label>
                                            <input class="form-control btn-square" type="file" name="question" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Question Activation Date&Time :</label>
                                            <input class="form-control digits" id="example-datetime-local-input" type="datetime-local" name="question_date" value="{{ old('question_date', $mtpd->question_date ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Answer File :</label>
                                            <input class="form-control btn-square" type="file" name="answer" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Answer Activation Date&Time :</label>
                                            <input class="form-control digits" id="example-datetime-local-input" type="datetime-local" name="answer_date" value="{{ old('answer_date', $mtpd->answer_date ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Corrigendum :</label>
                                            <input class="form-control btn-square" type="file" name="corrigendum" value="">
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
                                        <th>Paper</th>
                                        <th>Title</th>
                                        <th>Paper Date</th>
                                        <th>Paper Time</th>
                                        <th>Question</th>
                                        <th>Active Time</th>
                                        <th>Answare</th>
                                        <th>Active Time</th>
                                        <th>Corrigendum</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mtp->mtpDetails as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ ucfirst($course) }}</td>
                                            <td>{{ $value->paper->papername }}</td>
                                            <td>{{ $mtp->title }}</td>
                                            <td>{{ $value->paper_date }}</td>
                                            <td>{{ $value->paper_time }}</td>
                                            <td>
                                                @if($value->question)
                                                <ul class="action">
                                                    <li class="edit mx-2">
                                                        <a href="{{ URL::asset($value->question) }}" target="_blank"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Question View">
                                                            <i class="fa fa-file-pdf-o font-danger fs-5"></i>
                                                        </a>
                                                    </li>
                                                    <li class="edit mx-2">
                                                        <a href="{{ route(currentUser()->role.'.mock_test_paper_details.destroy', ['question',$value->id]) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            data-bs-original-title="Delete PDF">
                                                            <i class="fa fa-trash font-danger fs-5"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $value->question_date ?? '-' }}</td>
                                            <td>
                                                @if($value->answer)
                                                <ul class="action">
                                                    <li class="edit mx-2">
                                                        <a href="{{ URL::asset($value->answer) }}" target="_blank"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Answer View">
                                                            <i class="fa fa-file-pdf-o font-danger fs-5"></i>
                                                        </a>
                                                    </li>
                                                    <li class="edit mx-2">
                                                        <a href="{{ route(currentUser()->role.'.mock_test_paper_details.destroy', ['answer',$value->id]) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            data-bs-original-title="Delete PDF">
                                                            <i class="fa fa-trash font-danger fs-5"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $value->answer_date ?? '-' }}</td>
                                            <td>
                                                @if($value->corrigendum)
                                                <ul class="action">
                                                    <li class="edit mx-2">
                                                        <a href="{{ URL::asset($value->corrigendum) }}" target="_blank"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Answer View">
                                                            <i class="fa fa-file-pdf-o font-danger fs-5"></i>
                                                        </a>
                                                    </li>
                                                    <li class="edit mx-2">
                                                        <a href="{{ route(currentUser()->role.'.mock_test_paper_details.destroy', ['corrigendum',$value->id]) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            data-bs-original-title="Delete PDF">
                                                            <i class="fa fa-trash font-danger fs-5"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $value->updated_at }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="{{ route(currentUser()->role.'.mock_test_paper_details.edit', [$course, $mtp->id, $value->id]) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Edit">
                                                            <i data-feather="edit"></i>
                                                        </a>
                                                    </li>
                                                    <li class="edit">                                          
                                                        <a href="{{ route(currentUser()->role . '.mock_test_paper_details.delete', $value->id) }}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Delete">
                                                            <i data-feather="trash-2"></i>
                                                        </a>
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

