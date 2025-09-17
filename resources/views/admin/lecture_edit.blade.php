@extends ('admin.layout.app')
@section('main-section')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Lecture Add</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route(currentUser()->role . '.lecture.update', $lecture->id) }}" method="POST">
                        @csrf
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Session :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="live" type="radio"
                                                        name="class_type" value="live" {{ $lecture->class == 'live' ? 'checked' : '' }}>
                                                    <label class="form-check-label mb-0 px-1"
                                                    for="live">Live Class</label>
                                            </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="bfys" type="radio"
                                                        name="class_type" value="bfys" {{ $lecture->class == 'bfys' ? 'checked' : '' }}>
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="bfys">BFYS Class</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="revisionary" type="radio"
                                                        name="class_type" value="revisionary" {{ $lecture->class == 'revisionary' ? 'checked' : '' }}>
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="revisionary">Revisionary Class</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('class_type')
                                            <span class="text-danger f-w-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Course :</label>
                                        <select class="form-select btn-square" name="course">
                                            <option value="">-- Select Course --</option>
                                            <option value="Foundation" {{ old('course', $lecture->course) == 'Foundation' ? 'selected' : '' }}>Foundation</option>
                                            <option value="Intermediate" {{ old('course', $lecture->course) == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                            <option value="Final" {{ old('course', $lecture->course) == 'Final' ? 'selected' : '' }}>Final</option>
                                        </select>
                                    </div>
                                    @error('course')
                                        <span class="text-danger f-w-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6" id="DefaultPaper">
                                    <div class="mb-3">
                                        <label>Paper Name :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Paper Name"
                                            name="bfys_paper" value="{{ old('bfys_paper', $lecture->bfys_paper) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 paperList" id="FoundationPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper[foundation][]">
                                            <option value="">-- Select Paper --</option>
                                            @foreach($papersByCourse['foundation'] as $foundation)
                                                <option value="{{ $foundation['id'] }}" {{ (old('paper.foundation.0', $lecture->paper_id) == $foundation['id']) ? 'selected' : '' }}>{{ $foundation['papername'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 paperList" id="IntermediatePaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper[intermediate][]">
                                            <option value="">-- Select Paper --</option>
                                            @foreach($papersByCourse['intermediate'] as $intermediate)
                                                <option value="{{ $intermediate['id'] }}" {{ (old('paper.intermediate.0', $lecture->paper_id) == $intermediate['id']) ? 'selected' : '' }}>{{ $intermediate['papername'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 paperList" id="FinalPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper[final][]">
                                            <option value="">-- Select Paper --</option>
                                            @foreach($papersByCourse['final'] as $final)
                                                <option value="{{ $final['id'] }}" {{ (old('paper.final.0', $lecture->paper_id) == $final['id']) ? 'selected' : '' }}>{{ $final['papername'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @error('paper_id')
                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                @enderror
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Topic :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Topic"
                                            name="topic" value="{{ old('topic', $lecture->topic) }}">
                                    </div>
                                </div>
                                @error('topic')
                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                @enderror
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Session :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Morning" type="radio"
                                                        name="session_time" value="morning" {{ old('session_time', $lecture->session) == 'morning' ? 'checked' : '' }}  >
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Morning">Morning</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Afternoon" type="radio"
                                                        name="session_time" value="afternoon" {{ old('session_time', $lecture->session) == 'afternoon' ? 'checked' : '' }}>
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Afternoon">Afternoon</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Evening" type="radio"
                                                        name="session_time" value="evening" {{ old('session_time', $lecture->session) == 'evening' ? 'checked' : '' }}>
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Evening">Evening</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('session_time')
                                    <span class="text-danger f-w-500">{{ $message }}</span>
                                @enderror
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label>Date :</label>
                                        <input class="form-control btn-square" type="date" placeholder="Date"
                                            name="date" value="{{ old('date', $lecture->date) }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label>Time :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Time"
                                            name="time" value="{{ old('time', $lecture->time) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Faculty Name :</label>
                                        <select class="form-select btn-square" name="faculty_id">
                                            <option value="">-- Select Faculty --</option>
                                            @if(isset($facultyByPaper[$lecture->paper_id]))
                                                @foreach($facultyByPaper[$lecture->paper_id] as $faculty)
                                                    <option value="{{ $faculty['id'] }}" {{ (old('faculty_id', $lecture->faculty_id) == $faculty['id']) ? 'selected' : '' }}>{{ $faculty['name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Video URL :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Video URL"
                                            name="video_url" value="{{ old('video_url', $lecture->video_url) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Zoom URL :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Zoom URL"
                                            name="zoomurl" value="{{ old('zoomurl', $lecture->zoom_link) }}">
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
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    // Show/hide course and paper fields based on selected session and course
    function updateFields() {
        const classType = $('input[name="class_type"]:checked').val();
        const course = $('select[name="course"]').val();

        // Hide all paper fields
        $('#FoundationPaper, #IntermediatePaper, #FinalPaper, #DefaultPaper').hide();

        // Hide course field initially
        $('select[name="course"]').closest('.mb-3').hide();

        if (classType) {
            $('select[name="course"]').closest('.mb-3').show();
            if (classType === 'bfys') {
                $('#DefaultPaper').show();
            } else {
                if (course === 'Foundation') {
                    $('#FoundationPaper').show();
                } else if (course === 'Intermediate') {
                    $('#IntermediatePaper').show();
                } else if (course === 'Final') {
                    $('#FinalPaper').show();
                }
            }
        }
    }

    // On page load
    updateFields();

    // When session (class_type) changes
    $('input[name="class_type"]').on('change', function() {
        $('select[name="course"]').val('');
        $('#FoundationPaper select, #IntermediatePaper select, #FinalPaper select').val('');
        $('select[name="faculty_id"]').empty().append('<option value="">-- Select Faculty --</option>');
        updateFields();
    });

    // When course changes
    $('select[name="course"]').on('change', function() {
        $('#FoundationPaper select, #IntermediatePaper select, #FinalPaper select').val('');
        $('select[name="faculty_id"]').empty().append('<option value="">-- Select Faculty --</option>');
        updateFields();
    });

    // Dynamic faculty dropdown based on selected paper
    var facultyByPaper = @json($facultyByPaper);
    $('select[name^="paper["]').on('change', function() {
        var selectedPaperId = $(this).val();
        var $facultySelect = $('select[name="faculty_id"]');
        $facultySelect.empty().append('<option value="">-- Select Faculty --</option>');
        if (facultyByPaper[selectedPaperId]) {
            facultyByPaper[selectedPaperId].forEach(function(faculty) {
                $facultySelect.append('<option value="'+faculty.id+'">'+faculty.name+'</option>');
            });
        }
    });
});
</script>
@endsection
    
                
