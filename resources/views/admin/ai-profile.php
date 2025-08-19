<?php include 'header.php'; ?>
  <!-- Page Sidebar Ends-->
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Profile</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="form theme-form">
                
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Name of Accredited Institutions</label>
                      <input class="form-control btn-square" type="text" placeholder="Name of Accredited Institutions" name="name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label>Address</label>
                      <input class="form-control btn-square" type="text" placeholder="Address" name="address">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>City</label>
                      <input class="form-control btn-square" type="text" placeholder="City" name="city">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>State</label>
                      <input class="form-control btn-square" type="text" placeholder="State" name="state">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Pincode</label>
                      <input class="form-control btn-square" type="text" placeholder="Pincode" name="pincode">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Region</label>
                      <select class="form-select" name="region">
                        <option>-- Select Region --</option>
                        <option>Eastern</option>
                        <option>Western</option>
                        <option>Northern</option>
                        <option>Southern</option>
                        <option>Central</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Year of Accreditation</label>
                      <select class="form-select" name="year_accreditation">
                          <option>-- Select Year --</option>
                          <?php 
                            $start_year = 1960; 
                            $current_year = date('Y');
                            for ($year = $current_year; $year >= $start_year; $year--) {
                                echo "<option value='{$year}'>{$year}</option>";
                            }
                          ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>NAAC Ranking</label>
                      <select class="form-select" name="region">
                        <option>-- Select Ranking --</option>
                        <option>A++</option>
                        <option>A+</option>
                        <option>A</option>
                        <option>B++</option>
                        <option>B+</option>
                        <option>B</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  
                  <div class="col-sm-8">
                    <div class="mb-3">
                      <label>Nearest City</label>
                      <select class="form-select" name="nearest_city">
                        <option>-- Select City --</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Distance (Kms)</label>
                      <input class="form-control btn-square" type="text" placeholder="Distance (Kms)" name="kms">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>University /College Affiliated</label>
                      <input class="form-control btn-square" type="text" placeholder="University /College Affiliated" name="affiliated_uni">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>Year of Institution Established</label>
                      <select class="form-select" name="year_accreditation">
                          <option>-- Select Year --</option>
                          <?php 
                            $start_year = 1960; 
                            $current_year = date('Y');
                            for ($year = $current_year; $year >= $start_year; $year--) {
                                echo "<option value='{$year}'>{$year}</option>";
                            }
                          ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label>Department</label>
                      <select class="form-select" name="department">
                        <option>-- Select Department --</option>
                        <option>Commerce</option>
                        <option>Accounting</option>
                        <option>Management</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Contact Person</label>
                      <input class="form-control btn-square" type="text" placeholder="Contact Person" name="contact_person">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Contact Mobile</label>
                      <input class="form-control btn-square" type="text" placeholder="Mobile" name="contact_mobile">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Contact Email</label>
                      <input class="form-control btn-square" type="text" placeholder="Contact Email" name="contact_email">
                    </div>
                  </div>
                </div>

                <div class="row">
                    <label>Course Offered</label>
                      <div class="col-sm-2">
                        <div class="form-check checkbox checkbox-success mb-0">
                          <input class="form-check-input" id="checkbox-primary" type="checkbox">
                          <label class="form-check-label" for="checkbox-primary">Foundation</label>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-check checkbox checkbox-success mb-0">
                          <input class="form-check-input" id="checkbox-primary" type="checkbox">
                          <label class="form-check-label" for="checkbox-primary">Intermediate</label>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="form-check checkbox checkbox-success mb-0">
                          <input class="form-check-input" id="checkbox-primary" type="checkbox">
                          <label class="form-check-label" for="checkbox-primary">Final</label>
                        </div>
                      </div>
                </div>
                
                <div class="row">
                  <div class="col">
                    <div class="text-end"><a class="btn btn-success me-3" href="#">Update</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
<?php include 'footer.php'; ?>