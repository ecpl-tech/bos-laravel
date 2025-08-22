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
                        <form action="{{ route('admin.lecture.store') }}" method="POST">
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
                                                        name="class_type" value="live">
                                                    <label class="form-check-label mb-0 px-1"
                                                    for="live">Live Class</label>
                                            </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="bfys" type="radio"
                                                        name="class_type" value="bfys">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="bfys">BFYS Class</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="revisionary" type="radio"
                                                        name="class_type" value="revisionary">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="revisionary">Revisionary Class</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Course :</label>
                                        <select class="form-select btn-square" name="course">
                                            <option value="">-- Select Course --</option>
                                            <option value="Foundation">Foundation</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="DefaultPaper">
                                    <div class="mb-3">
                                        <label>Paper Name :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Paper Name"
                                            name="bfys_paper">
                                    </div>
                                </div>
                                <div class="col-sm-6 paperList" id="FoundationPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                            @foreach($papersByCourse['foundation'] as $foundation)
                                                <option value="{{ $foundation['id'] }}">{{ $foundation['papername'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 paperList" id="IntermediatePaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                            @foreach($papersByCourse['intermediate'] as $intermediate)
                                                <option value="{{ $intermediate['id'] }}">{{ $intermediate['papername'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 paperList" id="FinalPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                            @foreach($papersByCourse['final'] as $final)
                                                <option value="{{ $final['id'] }}">{{ $final['papername'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Topic :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Topic"
                                            name="topic">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Session :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Morning" type="radio"
                                                        name="session" value="morning">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Morning">Morning</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Afternoon" type="radio"
                                                        name="session" value="afternoon">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Afternoon">Afternoon</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Evening" type="radio"
                                                        name="session" value="evening">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Evening">Evening</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label>Date :</label>
                                        <input class="form-control btn-square" type="date" placeholder="Date"
                                            name="topic">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label>Time :</label>
                                        <input class="form-control btn-square" type="time" placeholder="Time"
                                            name="topic">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Faculty Name :</label>
                                        <select class="form-select btn-square" name="faculty_id">
                                            <option value="">-- Select Section --</option>
                                            {{-- Faculty options will be dynamically populated by JS --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Video URL :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Video URL"
                                            name="video_url">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Zoom URL :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Zoom URL"
                                            name="zoomurl">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success me-3 text-end">Add</button>
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
        $('#FoundationPaper, #IntermediatePaper, #FinalPaper, #DefaultPaper').hide();

        // Show course dropdown only if any session is selected
        $('input[name="class_type"]').on('change', function() {
            const classType = $('input[name="class_type"]:checked').val();
            if (classType) {
                $('select[name="course"]').closest('.mb-3').show();
            } else {
                $('select[name="course"]').closest('.mb-3').hide();
                $('#FoundationPaper, #IntermediatePaper, #FinalPaper, #DefaultPaper').hide();
            }
            // If bfys, show only DefaultPaper
            if (classType === 'bfys') {
                $('#DefaultPaper').show();
                $('#FoundationPaper, #IntermediatePaper, #FinalPaper').hide();
            } else {
                $('#DefaultPaper').hide();
            }
        });

        // Show paper based on course, unless bfys session
        $('select[name="course"]').on('change', function() {
            const course = $(this).val();
            const classType = $('input[name="class_type"]:checked').val();
            $('#FoundationPaper, #IntermediatePaper, #FinalPaper, #DefaultPaper').hide();
            if (classType === 'bfys') {
                $('#DefaultPaper').show();
            } else {
                if (course == 'Foundation') {
                    $('#FoundationPaper').show();
                } else if (course == 'Intermediate') {
                    $('#IntermediatePaper').show();
                } else if (course == 'Final') {
                    $('#FinalPaper').show();
                }
            }
        });

        // Hide course and paper fields initially
        $('select[name="course"]').closest('.mb-3').hide();

        // Dynamic faculty dropdown based on selected paper
        var facultyByPaper = @json($facultyByPaper);
        $('select[name="paper"]').on('change', function() {
            var selectedPaperId = $(this).val();
            var $facultySelect = $('select[name="faculty_id"]');
            $facultySelect.empty();
            $facultySelect.append('<option value="">-- Select Section --</option>');
            if (facultyByPaper[selectedPaperId]) {
                facultyByPaper[selectedPaperId].forEach(function(faculty) {
                    $facultySelect.append('<option value="'+faculty.id+'">'+faculty.name+'</option>');
                });
            }
        });
    });
</script>
@endsection

