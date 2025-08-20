<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>POU List</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="pou-add.php">
                            <i class="fa fa-plus"></i> Add POU</a>
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
                                        <th>Name</th>
                                        <th>Region</th>
                                        <th>Address</th>
                                        <th>User ID</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Active</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Agra Branch of CIRC of ICAI</td>
                                        <td>CIRC</td>
                                        <td>103,First Floor, Corporate Park</td>
                                        <td>icaiagra@gmail.com</td>
                                        <td>123456</td>
                                        <td>icaiagra@gmail.com</td>
                                        <td>Name: Anoop Kumar Singh</br>Mobile: 9319108585</td>
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
                                                    <a href="#">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                </li>
                                                <li class="eye">
                                                    <a href="pou-user-count.php?id=1">
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
