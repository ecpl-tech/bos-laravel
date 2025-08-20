<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>BOS MCQ Chapter List</h4>
                </div>
                <!-- <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="daily_quiz_upload_add.php">
                            <i class="fa fa-plus"></i> MCQ Question Upload</a>
                    </div>
                </div> -->
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
                                        <th>Capter</th>
                                        <th>Simple</th>
                                        <th>Medium</th>
                                        <th>Difficult</th>
                                        <th>Total Que</th>
                                        <th>View Questions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Chapter 1 : Theoretical Framework</td>
                                        <td>12</td>
                                        <td>28</td>
                                        <td>2</td>
                                        <td>42</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="mcq_questions_list.php?c_id=1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="View Questions">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Chapter 2 : Theoretical Framework Test</td>
                                        <td>12</td>
                                        <td>28</td>
                                        <td>2</td>
                                        <td>42</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="mcq_questions_list.php?c_id=2" data-bs-toggle="tooltip"
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
