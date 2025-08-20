<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Slider Listing</h4>
                </div>
                <div class="col-6">
                    <div class="justify-content-end d-flex">
                        <a class="btn btn-primary" href="slider_add.php">
                            <i class="fa fa-plus"></i> Add Slider</a>
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
                                        <th>Slider</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date & Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="assets/images/product/1.png" class="img-responsive"
                                                width="100px">
                                        </td>
                                        <td>Live Schedule</td>
                                        <td>final
                                        </td>
                                        <td>15-02-2022 19:11:43</td>
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
                                                    <a href="slider_add.php?upd=2" data-bs-toggle="tooltip"
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
