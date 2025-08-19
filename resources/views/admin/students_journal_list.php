<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Students Journal List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="students_journal_add.php">
                            <i class="fa fa-plus"></i> Add Students Journal</a>
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
                                        <th>Title</th>
                                        <th>PDF</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>April 2025</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit mx-2">
                                                    <a href="85083studentjournal-apr2025b.pdf" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Question View">
                                                        <i class="fa fa-file-pdf-o font-danger fs-5"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <img src="assets/images/product/1.png" class="img-responsive"
                                                width="100px">
                                        </td>
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
