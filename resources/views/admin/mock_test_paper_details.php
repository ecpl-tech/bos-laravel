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
                        <a class="btn btn-primary" href="mock_test_paper-add.php">
                            <i class="fa fa-plus"></i> Add </a>
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
                                        <th>Paper</th>
                                        <th>Title</th>
                                        <th>Paper Date</th>
                                        <th>Paper Time</th>
                                        <th>Question</th>
                                        <th>Active Time</th>
                                        <th>Answare</th>
                                        <th>Active Time</th>
                                        <th>Corrigendum</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Final</td>
                                        <td>Paper 1: Financial Reporting</td>
                                        <td>Mock Test Papers Series - II for Students appearing in May 2023 Final
                                            Examination</td>
                                        <td>2023-04-05</td>
                                        <td>2 PM to 5 PM</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit mx-2">
                                                    <a href="mock_test_paper_details.php?id=2&upd=1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Question View">
                                                        <i class="fa fa-file-pdf-o font-danger fs-5"></i>
                                                    </a>
                                                </li>
                                                <li class="edit mx-2">
                                                    <a href="mock_test_paper_details.php?id=2&upd=1"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-original-title="Delete PDF">
                                                        <i class="fa fa-trash font-danger fs-5"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>2023-04-05 13:10:00</br></td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit mx-2">
                                                    <a href="mock_test_paper_details.php?id=2&upd=1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Answer View">
                                                        <i class="fa fa-file-pdf-o font-danger fs-5"></i>
                                                    </a>
                                                </li>
                                                <li class="edit mx-2">
                                                    <a href="mock_test_paper_details.php?id=2&upd=1"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        data-bs-original-title="Delete PDF">
                                                        <i class="fa fa-trash font-danger fs-5"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>2023-04-06 10:00:00</br></td>
                                        <td></td>
                                        <td>2023-03-29</br>14:47:11</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="mock_test_paper_details.php?id=2&upd=1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Edit">
                                                        <i data-feather="edit"></i>
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
