<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Event PDF Upload</h4>
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
                                        <label>Course :</label>
                                        <select class="form-select btn-square" name="course">
                                            <option value="">-- Select Course --</option>
                                            <option value="Foundation">Foundation</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="course">
                                            <option value="">Select Paper</option>
                                            <option value="1">Paper 1: Financial Reporting</option>
                                            <option value="2">Paper 2: Advanced Financial Management</option>
                                            <option value="3">Paper 3: Advanced Auditing, Assurance and
                                                Professional Ethics</option>
                                            <option value="4">Paper 4: Direct Tax Laws and International Taxation
                                            </option>
                                            <option value="5">Paper 5: Indirect Tax Laws</option>
                                            <option value="6">Paper 6: Integrated Business Solutions
                                                (Multi-disciplinary case study with Strategic Management)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Faculty :</label>
                                        <select class="form-select btn-square" name="faculty">
                                            <option value="">Select Paper</option>
                                            <option value="102">CA. Ashish Gupta (BoS Faculty)</option>
                                            <option value="43">CA. Diwas Gupta</option>
                                            <option value="50">CS. Vivek Banerjee (BoS Faculty)</option>
                                            <option value="49">CA. Parvesh Aghi</option>
                                            <option value="17">CA. Ashish Gupta</option>
                                            <option value="50">CS. Vivek Banerjee &amp; CA. Ashish Gupta</option>
                                            <option value="115">CA. Diwas Gupta &amp; CA. Ashish Gupta</option>
                                            <option value="41">CA. Jagabandhu Padhy</option>
                                            <option value="129">CA Amit Bathia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Category :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="notes" type="radio"
                                                        name="category" value="notes">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="notes">Notes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="assignments" type="radio"
                                                        name="category" value="assignments">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="assignments">Assignments</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Session :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="morning" type="radio"
                                                        name="session" value="morning">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="morning">Morning</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="afternoon" type="radio"
                                                        name="session" value="afternoon">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="afternoon">Afternoon</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="mb-3">
                                        <label>Batch :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="batch-01" type="radio"
                                                        name="batch" value="batch-01">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="batch-01">Batch-01</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="batch-02" type="radio"
                                                        name="batch" value="batch-02">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="batch-02">Batch-02</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="batch-03" type="radio"
                                                        name="batch" value="batch-03">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="batch-03">Batch-03</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="batch-04" type="radio"
                                                        name="batch" value="batch-04">
                                                    <label class="form-check-label mb-0 px-1"
                                                        for="batch-04">Batch-04</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label>Date :</label>
                                        <input class="form-control btn-square" type="date" placeholder="Date"
                                            name="topic">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="mb-3">
                                        <label>Topic :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Topic"
                                            name="topic">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label>File :</label>
                                        <input class="form-control btn-square" type="file" name="file">
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
