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
                        <a class="btn btn-primary" href="mock_test_paper_add.php">
                            <i class="fa fa-plus"></i> Add Mock Test Paper</a>
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
                                        <th>Title</th>
                                        <th>Start date & End date</th>
                                        <th>POUs</th>
                                        <th>Student</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Final</td>
                                        <td>Mock Test Papers Series - II for Students appearing in May 2023 Final
                                            Examination</td>
                                        <td>2023-04-05 to 2023-04-14 </td>
                                        <td>
                                            <a href="mtp_subscribe_pou.php?mtp=2" class="py-1 d-block">
                                                <span class="badge badge-danger p-1">103</span>
                                            </a>
                                            <a href="mtp_subscribe_pou_count.php?mtp=2" class="py-1 d-block">
                                                <span class="badge badge-warning p-1">Count</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="mtp_subscribe_student.php?mtp=2" class="py-1 d-block">
                                                <span class="badge badge-danger p-1">17699</span>
                                            </a>
                                        </td>
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
                                                    <a href="mock_test_paper.php?upd=2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Edit">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                </li>
                                                <li class="edit">
                                                    <a href="mock_test_paper.php?dlt=2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Delete">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </li>
                                                <li class="edit">
                                                    <a href="mock_test_paper_details.php?dlt=2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Add Paper">
                                                        <i data-feather="plus-circle"></i>
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
