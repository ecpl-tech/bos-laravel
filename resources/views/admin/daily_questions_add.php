<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>MCQ Question Upload</h4>
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
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Question :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Question"
                                            name="Question">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Answer A:</label>
                                        <input class="form-control btn-square" type="text" placeholder="Answer A"
                                            name="ans1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Answer B:</label>
                                        <input class="form-control btn-square" type="text" placeholder="Answer B"
                                            name="ans2">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Answer C:</label>
                                        <input class="form-control btn-square" type="text" placeholder="Answer C"
                                            name="ans3">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Answer D:</label>
                                        <input class="form-control btn-square" type="text" placeholder="Answer D"
                                            name="ans4">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Right Answer :</label>
                                        <input class="form-control btn-square" type="text"
                                            placeholder="Please Enter Number only for ex(A=1, B=2, C=3, D=4)"
                                            name="right_ans">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Description :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Description"
                                            name="description">
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
