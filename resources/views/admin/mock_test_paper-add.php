<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Mock Test Paper Add</h4>
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
                                        <label>Paper :</label>
                                        <select class="form-select btn-square" name="class_type">
                                            <option value="" disabled selected>--- Please Select Paper ---
                                            </option>
                                            <option value="42">Paper-1: Financial Reporting</option>
                                            <option value="43">Paper-2: Advanced Financial Management</option>
                                            <option value="44">Paper-3: Advanced Auditing, Assurance and
                                                Professional Ethics</option>
                                            <option value="45">Paper-4: Direct Tax Laws and International Taxation
                                            </option>
                                            <option value="46">Paper-5: Indirect Tax Laws</option>
                                            <option value="47">Paper-6: Integrated Business Solutions</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Paper Date :</label>
                                        <input class="form-control btn-square" type="date" name="paper_date">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Paper Time :</label>
                                        <input class="form-control btn-square" type="text"
                                            placeholder="Ex..2PM to 5PM" name="topic">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Question File :</label>
                                        <input class="form-control btn-square" type="file">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Question Activation Date&Time :</label>
                                        <input class="form-control digits" id="example-datetime-local-input"
                                            type="datetime-local">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Answer File :</label>
                                        <input class="form-control btn-square" type="file">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Answer Activation Date&Time :</label>
                                        <input class="form-control digits" id="example-datetime-local-input"
                                            type="datetime-local">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Corrigendum :</label>
                                        <input class="form-control btn-square" type="file">
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
