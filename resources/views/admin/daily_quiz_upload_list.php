<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Mock Test Paper List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="daily_quiz_upload_add.php">
                            <i class="fa fa-plus"></i> MCQ Question Upload</a>
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
                                        <th>Level</th>
                                        <th>Topic</th>
                                        <th>Quiz Date</th>
                                        <th>Upload Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>all</td>
                                        <td>Daily Quiz</td>
                                        <td>2023-05-22</td>
                                        <td>2023-05-22</td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body text-end icon-state">
                                                    <label class="switch mb-0">
                                                        <input type="checkbox" value="active" name="status" checked>
                                                        <span class="switch-state bg-success"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="daily_questions_list.php?c_id=2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View Questions">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
