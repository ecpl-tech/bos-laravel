<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>PDF List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="pdf_add.php">
                            <i class="fa fa-plus"></i>PDF Upload</a>
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
                                        <th>Lecture Date</th>
                                        <th>Paper</th>
                                        <th>Session</th>
                                        <th>Batch</th>
                                        <th>Title</th>
                                        <th>PDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2025-04-21</td>
                                        <td>Paper 2: Business Laws</td>
                                        <td>morning</td>
                                        <td>batch-04</td>
                                        <td>Webinar Indian Contract Act (Unit I to IV)
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit mx-2">
                                                    <a target="_blank"
                                                        href="20250421_facultyid_73_Webinar_Indian_Contract_Act__Unit_I_to_IV__1745249068.pdf"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Question View">
                                                        <i class="fa fa-file-pdf-o font-danger fs-5"></i>
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
