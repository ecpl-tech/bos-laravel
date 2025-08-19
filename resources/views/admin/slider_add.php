<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Slider Banner</h4>
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
                                        <label>Upload Image: :</label>
                                        <input class="form-control btn-square" type="file" name="images">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>To Whom :</label>
                                        <select class="form-select btn-square" name="course">
                                            <option value="">Please Select</option>
                                            <option value="all">All</option>
                                            <option value="foundation">Foundation</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Status :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="active" type="radio"
                                                        name="status" value="active">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="active">Active</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="inactive" type="radio"
                                                        name="status" value="inactive">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="inactive">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Title :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Title"
                                            name="title">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Description :</label>
                                        <div class="toolbar-box">
                                            <div id="toolbar">
                                                <button class="ql-bold">Bold </button>
                                                <button class="ql-italic">Italic </button>
                                                <button class="ql-underline">underline</button>
                                                <button class="ql-strike">Strike </button>
                                                <button class="ql-list" value="ordered">List </button>
                                                <button class="ql-list" value="bullet"> </button>
                                                <button class="ql-indent" value="-1"> </button>
                                                <button class="ql-indent" value="+1"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </div>
                                            <div id="editor"></div>
                                        </div>
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
