<?php include 'header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Feeback Report List</h4>
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
                                        aria-expanded="false" aria-controls="collapseProduct" class="btn btn-primary">
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
                                                <option value="">Select Session</option>
                                                <option value="all">ALL</option>
                                                <option value="morning">Morning</option>
                                                <option value="evening">Evening</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <div class="input-group flatpicker-calender">
                                                <input class="form-control" placeholder="Start date & End date "
                                                    id="range-date" type="date">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <select name="facultyname" class="form-select"
                                                aria-label="Default select example">
                                                <option value="">Select Faculty Names</option>
                                                <option value="all">ALL</option>
                                                <option value="CA. Ashish Gupta (Faculty Board of Studies)">CA. Ashish
                                                    Gupta (Faculty Board of Studies)</option>
                                                <option value="CA. S. Srikanth">CA. S. Srikanth</option>
                                                <option value="CA. Achal Jain">CA. Achal Jain</option>
                                                <option value="CA. Amit Jain">CA. Amit Jain</option>
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
                                        <th>Student</th>
                                        <th>Course</th>
                                        <th>Session Date</th>
                                        <th>Paper</th>
                                        <th>Topic</th>
                                        <th>Faculty</th>
                                        <th>Concept By Faculty</th>
                                        <th>Que Ans</th>
                                        <th>Concept Covered</th>
                                        <th>Quality of Assignment</th>
                                        <th>Examination Oriented</th>
                                        <th>Session Rating</th>
                                        <th>Overall Comment</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td>1</td>
                                        <td>WRO0475104</br>Ms SMRITI IYER</td>
                                        <td>final</td>
                                        <td>04/02/2025</td>
                                        <td>Paper 1: Financial Reporting</td>
                                        <td>Professional and Ethical Duty of a Chartered Accountant</td>
                                        <td>CA. Aditya Kulkarni</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>4</td>
                                        <td>Nothing specific as such to suggest.</td>
                                        <td>2025-04-22</br>23:02:36</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CRO0226515</br>Ms MONIKA JAIN</td>
                                        <td>final</td>
                                        <td>18/12/2024</td>
                                        <td>Paper 2: Advanced Financial Management</td>
                                        <td>Business Valuation</td>
                                        <td>CA. Jagabandhu Padhy</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>yes</td>
                                        <td>5</td>
                                        <td>When sir starts class n revise starting 15 min. The previous lecture should
                                            be in Hindi mixed language it helps us to retain concept</td>
                                        <td>2025-04-21</br>21:06:19</td>
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
