<?php include 'header.php'; ?>
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
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Class Type :</label>
                                        <select class="form-select btn-square" name="class_type">
                                            <option value="">-- Select Class Type --</option>
                                            <option value="live">Live Class</option>
                                            <option value="bfys">BFYS Class</option>
                                            <option value="revisionary">Revisionary Class</option>
                                        </select>
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
                                <div class="col-sm-4" id="DefaultPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" id="FoundationPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                            <option value="1">Paper 1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" id="IntermediatePaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                            <option value="1">Paper 1</option>
                                            <option value="2">Paper 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4" id="FinalPaper">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="paper">
                                            <option value="">-- Select Paper --</option>
                                            <option value="1">Paper 1</option>
                                            <option value="2">Paper 2</option>
                                            <option value="3">Paper 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-8">
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
                                            <option value="1">CA Amit Bathia</option>
                                            <option value="2">CA Ritu Chhatwani</option>
                                            <option value="3">CA Sneha Juneja</option>
                                            <option value="4">CA. Abhinay Gupta</option>
                                            <option value="5">CA. Achal Jain</option>
                                            <option value="6">CA. Aditya Kulkarni</option>
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
                                    <div class="text-end"><a class="btn btn-success me-3" href="#">Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<script>
    $(document).ready(function() {
        function announcement_type_toggleFields() {
            var selectedType = $('input[name="announcement_type"]:checked').val();
            document.getElementById('Inputtext').style.display = (selectedType === "text") ? 'block' : 'none';
            document.getElementById('Inputpdf').style.display = (selectedType === "pdf") ? 'block' : 'none';
        }
        announcement_type_toggleFields();
        $('input[name="announcement_type"]').on('change', function() {
            announcement_type_toggleFields();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#FoundationPaper, #IntermediatePaper, #FinalPaper').hide();
        $('#DefaultPaper').show();
        $('select[name="course"]').on('change', function() {
            const course = $(this).val();
            $('#FoundationPaper, #IntermediatePaper, #FinalPaper').hide();
            if (course === 'Foundation') {
                $('#FoundationPaper').show();
                $('#DefaultPaper').hide();
            } else if (course === 'Intermediate') {
                $('#IntermediatePaper').show();
                $('#DefaultPaper').hide();
            } else if (course === 'Final') {
                $('#FinalPaper').show();
                $('#DefaultPaper').hide();
            } else {
                $('#DefaultPaper').show();
            }
        });
    });
</script>
