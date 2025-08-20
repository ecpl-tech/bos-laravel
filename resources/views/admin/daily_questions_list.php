<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Daily Quiz Question List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="daily_questions_add.php">
                            <i class="fa fa-plus"></i> Daily Quiz Question Add</a>
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
                                        <th>Question</th>
                                        <th>ANS 1</th>
                                        <th>ANS 2</th>
                                        <th>ANS 3</th>
                                        <th>ANS 4</th>
                                        <th>Right ANS</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>2</td>
                                        <td>Rs. 200 paid as wages for erecting a machine should be debited to</td>
                                        <td>Repair account</td>
                                        <td>Machine account</td>
                                        <td>Capital account</td>
                                        <td>Furniture account</td>
                                        <td><span class="badge rounded-pill badge-success">ans1</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>All of the following are functions of Accounting except</td>
                                        <td>Decision making</td>
                                        <td>Measurement</td>
                                        <td>Forecasting</td>
                                        <td>Ledger posting</td>
                                        <td><span class="badge rounded-pill badge-success">ans2</span></td>
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
