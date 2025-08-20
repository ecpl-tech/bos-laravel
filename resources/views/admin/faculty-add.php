<?php include 'header.php'; ?>
  <!-- Page Sidebar Ends-->
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Faculty Add</h4>
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
                      <label>Name of Faculty</label>
                      <input class="form-control btn-square" type="text" placeholder="Name of Faculty" name="name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <label>Gender</label>
                    <div class="col-sm-12 form-control btn-square d-flex">
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Male" type="radio" name="gender" value="Male">
                          <label class="form-check-label mb-0 px-1" for="Male">Male</label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Female" type="radio" name="gender" value="Female">
                          <label class="form-check-label mb-0 px-1" for="Female">Female</label>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Contact No</label>
                      <input class="form-control btn-square" type="text" placeholder="Contact No" name="contact">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Email</label>
                      <input class="form-control btn-square" type="text" placeholder="Email" name="email">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Qualification</label>
                      <input class="form-control btn-square" type="text" placeholder="Qualification" name="qualification">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Years of Experience</label>
                      <input class="form-control btn-square" type="text" placeholder="Years of Experience" name="experience">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Faculty Category</label>
                    <div class="col-sm-12 form-control btn-square d-flex">
                      <div class="col-sm-4">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Full-Time" type="radio" name="category" value="Full-Time">
                          <label class="form-check-label mb-0 px-1" for="Full-Time">Full-Time</label>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Part-Time" type="radio" name="category" value="Part-Time">
                          <label class="form-check-label mb-0 px-1" for="Part-Time">Part-Time</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Course Taught</label>
                        <div class="col-sm-12 form-control btn-square d-flex">
                            <div class="col-sm-4">
                                <div class="form-check checkbox checkbox-success mt-1">
                                <input class="form-check-input" id="Foundation" type="checkbox" name="course" value="Foundation">
                                <label class="form-check-label mt-0 mb-0" for="Foundation">Foundation</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check checkbox checkbox-success mt-1">
                                <input class="form-check-input" id="Intermediate" type="checkbox" name="course" value="Intermediate">
                                <label class="form-check-label mt-0 mb-0" for="Intermediate">Intermediate</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-check checkbox checkbox-success mt-1">
                                <input class="form-check-input" id="Final" type="checkbox" name="course" value="Final">
                                <label class="form-check-label mt-0 mb-0" for="Final">Final</label>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="text-end"><a class="btn btn-success me-3" href="#">Add</a></div>
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