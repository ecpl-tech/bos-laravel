<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Upcoming Feeds Videos/ Tips</h4>
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
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Course :</label>
                                        <select class="form-select btn-square" name="course">
                                            <option value="">-- Select Course --</option>
                                            <option value="All">All</option>
                                            <option value="Foundation">Foundation</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Category :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Education" type="radio"
                                                        name="category" value="Education">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Education">Education</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Other" type="radio"
                                                        name="category" value="Other">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Other">Other</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Select Type :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Video" type="radio"
                                                        name="type" value="video">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="Video">Video</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="file" type="radio"
                                                        name="type" value="file">
                                                    <label class="form-check-label mb-0 px-1" for="file">File
                                                        Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="Inputtext">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Video Id :</label>
                                                <input class="form-control btn-square" type="text"
                                                    placeholder="Video Id" name="video_id">
                                            </div>
                                            <div class="col-sm-6">
                                                <img class="img-fluid" src="assets/custom/embad.jpg" alt="looginpage">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="Inputpdf">
                                    <div class="mb-3">
                                        <label>Upload File:</label>
                                        <input class="form-control btn-square" type="file" name="file">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Title :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Title"
                                            name="title">
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
        function type_toggleFields() {
            var selectedType = $('input[name="type"]:checked').val();
            document.getElementById('Inputtext').style.display = (selectedType === "video") ? 'block' : 'none';
            document.getElementById('Inputpdf').style.display = (selectedType === "file") ? 'block' : 'none';
        }
        type_toggleFields();
        $('input[name="type"]').on('change', function() {
            type_toggleFields();
        });
    });
</script>
