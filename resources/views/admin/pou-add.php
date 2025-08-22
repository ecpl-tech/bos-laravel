<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>POU Add</h4>
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

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Name of Branch :</label>
                                        <input class="form-control btn-square" type="text"
                                            placeholder="Name of Branch" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Region :</label>
                                        <input class="form-control btn-square" type="text" placeholder="Region"
                                            name="region">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Email :</label>
                                        <input class="form-control btn-square" type="email" placeholder="Email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label>Password :</label>
                                        <input class="form-control btn-square" type="password" placeholder="Password"
                                            name="Password">
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