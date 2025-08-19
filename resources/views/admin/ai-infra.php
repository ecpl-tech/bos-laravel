<?php include 'header.php'; ?>
  <!-- Page Sidebar Ends-->
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h4>Details of Infrastructural facilities</h4>
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
                  <div class="col-sm-4">
                    <label>Building</label>
                    <div class="col-sm-12 form-control btn-square d-flex">
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Own" type="radio" name="building" value="Own">
                          <label class="form-check-label mb-0 px-1" for="Own">Own</label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Rented" type="radio" name="building" value="Rented">
                          <label class="form-check-label mb-0 px-1" for="Rented">Rented</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label>Number of Classrooms</label>
                      <input class="form-control btn-square" type="text" placeholder="Number of Classrooms" name="no_classrooms">
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <label>Library facilities</label>
                    <div class="col-sm-12 form-control btn-square d-flex">
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Yes1" type="radio" name="library" value="Yes">
                          <label class="form-check-label mb-0  px-1" for="Yes1">Yes</label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="No1" type="radio" name="library" value="No">
                          <label class="form-check-label mb-0  px-1" for="No1">No</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                
                <!-- <div class="row">
                  <div class="col-sm-8">
                    <label>Foundation Books</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Approximate Number of Books</label>
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Accounting</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Accounting" name="Accounting">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Business Laws</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Business Laws" name="Business Laws">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Quantitative Aptitude</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Quantitative Aptitude" name="Quantitative Aptitude">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Business Economics</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Business Economics" name="Business Economics">
                  </div>
                </div> -->

                <!-- <div class="row">
                  <div class="col-sm-8">
                    <label>Intermediate Books</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Approximate Number of Books</label>
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Advanced Accounting</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Advanced Accounting" name="Advanced Accounting">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Corporate and Other Laws</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Corporate and Other Laws" name="Corporate and Other Laws">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Income Tax Laws</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Income Tax Laws" name="Income Tax Laws">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Indirect Taxes</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Indirect Taxes" name="Indirect Taxes">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Cost and Management Accounting</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Cost and Management Accounting" name="Cost and Management Accounting">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Auditing and Ethics</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Auditing and Ethics" name="Auditing and Ethics">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Financial Management</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Financial Management" name="Financial Management">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Strategic Management</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Strategic Management" name="Strategic Management">
                  </div>
                </div> -->

                <!-- <div class="row">
                  <div class="col-sm-8">
                    <label>Final Books</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Approximate Number of Books</label>
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Financial Reporting</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Financial Reporting" name="Financial Reporting">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Advanced Financial Management</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Advanced Financial Management" name="Advanced Financial Management">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Advanced Auditing Assurance and Professional Ethics</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Advanced Auditing Assurance and Professional Ethics" name="Advanced Auditing Assurance and Professional Ethics">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Direct Tax Laws and International Taxation</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Direct Tax Laws and International Taxation" name="Direct Tax Laws and International Taxation">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Indirect Tax Laws</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Indirect Tax Laws" name="Indirect Tax Laws">
                  </div>
                  <div class="col-sm-8">
                      <label class="form-control btn-square">Integrated Business Solutions (Multi -disciplinary case study with strategic Management)</label>
                  </div>
                  <div class="col-sm-4">
                      <input class="form-control btn-square" type="number" placeholder="Integrated Business Solutions (Multi -disciplinary case study with strategic Management)" name="Integrated Business Solutions (Multi -disciplinary case study with strategic Management)">
                  </div>
                </div> -->

                  <div class="row mb-3">
                    <label>Whether you will be able to provide coaching throughout the year.</label>
                    <div class="col-sm-4 d-flex">
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="Yes2" type="radio" name="able_provide_coaching" value="Yes">
                          <label class="form-check-label mb-0  px-1" for="Yes2">Yes</label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check radio radio-success mb-0 mt-1">
                          <input class="form-check-input" id="No2" type="radio" name="able_provide_coaching" value="No">
                          <label class="form-check-label mb-0  px-1" for="No2">No</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label>The maximum number of students you can coach in a batch</label>
                    <div class="col-sm-3">
                        <input class="form-control btn-square" type="number" placeholder="The maximum number of students you can coach in a batch" name="maximum_number_batch">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label>Whether you will be able to run multiple batches</label>
                    <div class="col-sm-4">
                      <div class="col-sm-12 d-flex">
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="Yes3" type="radio" name="multiple_batches" value="Yes">
                            <label class="form-check-label mb-0  px-1" for="Yes3">Yes</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="No3" type="radio" name="multiple_batches" value="No">
                            <label class="form-check-label mb-0  px-1" for="No3">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label>Whether the Accredited Institute will provide 5 hours coaching per day for 100 days for a batch</label>
                    <div class="col-sm-4">
                      <div class="col-sm-12 d-flex">
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="Yes4" type="radio" name="5_houre_coaching" value="Yes">
                            <label class="form-check-label mb-0  px-1" for="Yes4">Yes</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="No4" type="radio" name="5_houre_coaching" value="No">
                            <label class="form-check-label mb-0  px-1" for="No4">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label>Whether the Institute will admit Co-Education students/Women</label>
                    <div class="col-sm-4">
                      <div class="col-sm-12 d-flex">
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="Yes5" type="radio" name="co-education" value="Yes">
                            <label class="form-check-label mb-0  px-1" for="Yes5">Yes</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="No5" type="radio" name="co-education" value="No">
                            <label class="form-check-label mb-0  px-1" for="No5">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label>Proposed fee to be charged from the students</label>
                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label>Foundation - Rs.</label>
                        <input class="form-control btn-square" type="text" placeholder="Foundation - Rs." name="foundation_fee">
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label>Intermediate - Rs.</label>
                        <input class="form-control btn-square" type="text" placeholder="Intermediate - Rs." name="intermediate_fee">
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="mb-3">
                        <label>Final - Rs.</label>
                        <input class="form-control btn-square" type="text" placeholder="Final - Rs." name="final_fee">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="mb-3">
                        <label>Name of the nearest Branch/ Regional Council of the Institute of Chartered Accountants of India (if applicable)</label>
                        <input class="form-control btn-square" type="text" placeholder="Nearest Branch/ Regional Council" name="nearest_branch">
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label>Whether the institution is associated / Planning to associate with the ICAI Examination Department for conducting Chartered Accountancy Examinations </label>
                    <div class="col-sm-4">
                      <div class="col-sm-12 d-flex">
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="Yes6" type="radio" name="associated" value="Yes">
                            <label class="form-check-label mb-0  px-1" for="Yes6">Yes</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="No6" type="radio" name="associated" value="No">
                            <label class="form-check-label mb-0  px-1" for="No6">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label>If already conducted Chartered Accountancy Examinations</label>
                    <div class="col-sm-4">
                      <div class="col-sm-12 d-flex">
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="Yes7" type="radio" name="examinations" value="Yes">
                            <label class="form-check-label mb-0  px-1" for="Yes7">Yes</label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check radio radio-success mb-0 mt-1">
                            <input class="form-check-input" id="No7" type="radio" name="examinations" value="No">
                            <label class="form-check-label mb-0  px-1" for="No7">No</label>
                          </div>
                        </div>
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