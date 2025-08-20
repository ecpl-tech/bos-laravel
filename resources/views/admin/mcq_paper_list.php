<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>BOS MCQ Paper List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="mcq_paper_add.php">
                            <i class="fa fa-plus"></i> Add BOS MCQ Paper</a>
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
                                        <th>Course</th>
                                        <th>Paper Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Login Access</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Foundation</td>
                                        <td>Paper 1: Accounting</td>
                                        <td>Fnd_ACC</td>
                                        <td>1234566</td>
                                        <td>Yes</td>
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
                                                    <a href="mcq_paper_add.php" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Edit">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                </li>
                                                <li class="edit">
                                                    <a href="mcq_chapter_list.php?paper_id=1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View Chapters">
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
