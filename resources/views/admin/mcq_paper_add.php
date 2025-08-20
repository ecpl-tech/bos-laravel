<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>BOS MCQ Paper Add</h4>
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
                                            <option value="Foundation">Foundation</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Final">Final</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Paper Name :</label>
                                        <input class="form-control btn-square" type="text" name="paper_name"
                                            placeholder="Paper Name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Username :</label>
                                        <input class="form-control btn-square" type="text" name="username"
                                            placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Password: :</label>
                                        <input class="form-control btn-square" type="text" name="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label>Login Access :</label>
                                        <div class="col-sm-12 form-control btn-square d-flex">
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="Yes" type="radio"
                                                        name="login_access" value="Yes">
                                                    <label class="form-check-label mb-0 px-1" for="Yes">Yes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check radio radio-success mb-0 mt-1">
                                                    <input class="form-check-input" id="No" type="radio"
                                                        name="login_access" value="No">
                                                    <label class="form-check-label mb-0 px-1" for="No">No</label>
                                                </div>
                                            </div>
                                        </div>
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
