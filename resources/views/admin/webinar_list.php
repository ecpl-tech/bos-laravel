<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Webinar List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="webinar_add.php">
                            <i class="fa fa-plus"></i> Add Webinar</a>
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
                        <div class="list-product-header">
                            <div>
                                <div class="light-box w-auto">
                                    <a data-bs-toggle="collapse" href="#collapseProduct" role="button"
                                        aria-expanded="false" aria-controls="collapseProduct" class="btn btn-secondary">
                                        <i class="fa fa-filter"></i> </i> Filter
                                    </a>
                                </div>
                            </div>
                            <div class="collapse" id="collapseProduct">
                                <div class="card card-body list-product-body">
                                    <div
                                        class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">
                                        <div class="col">
                                            <select class="form-select" name="course"
                                                aria-label="Default select example">
                                                <option value="">-- Select Course --</option>
                                                <option value="Foundation">Foundation</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Final">Final</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select name="session" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Select Paper</option>
                                                <option value="40">Paper 1: Financial Reporting</option>';
                                                <option value="41">Paper 2: Advanced Financial Management</option>';
                                                <option value="42">Paper 3: Advanced Auditing, Assurance and
                                                    Professional Ethics</option>';
                                                <option value="43">Paper 4: Direct Tax Laws and International
                                                    Taxation</option>';
                                                <option value="44">Paper 5: Indirect Tax Laws</option>';
                                                <option value="45">Paper 6: Integrated Business Solutions
                                                    (Multi-disciplinary case study with Strategic Management)</option>';
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Course</th>
                                        <th>Date & Time</th>
                                        <th>Session</th>
                                        <th>Paper Detail</th>
                                        <th>Topic</th>
                                        <th>Joining Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>final</td>
                                        <td>04/02/2025</td>
                                        <td>Morning</td>
                                        <td>Paper 1: Financial Reporting</td>
                                        <td>Professional and Ethical Duty of a Chartered Accountant</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit mx-2">
                                                    <a href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Link Open">
                                                        <i class="fa fa-link font-danger fs-5"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="mock_test_paper.php?upd=2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Edit">
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
