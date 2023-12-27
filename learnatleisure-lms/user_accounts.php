<?php include 'templates/dashboard_header.php' ?>

<?php include 'departments_inlcudes/get_department.php'?>
<?php include 'user_includes/add_user.php'?>
<?php include 'user_includes/display_user.php'?>

<?php
//redirect to home page when user is not admin
if($account_type == 'user'){
    header('Location: /cjh_leisure_elearning');
    exit;
}
?>

<?php include 'templates/navbar.php' ?>
    <!--Container Main start .modal-dialog-->
    <div class="height-100">
        <div class="d-flex justify-content-between mb-2">
            <div class="mt-3">
                <h4>Users</h4>
            </div>
            <div class="mt-3">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#new-account">NEW USER</button>
            </div>
        </div>
        <div class="">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Login Name</th>
                                    <th>Department</th>
                                    <th>Account type</th>
                                    <th>Property</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result_list_employee as $row) : ?>
                                <tr>
                                        <td><?php echo strtoupper(escape($row['employee_first_name']) . ' ' . escape($row['employee_last_name'])); ?></td>
                                        <td><?php echo strtoupper(escape($row['employee_username']));?></td>
                                        <td><?php echo strtoupper(escape($row['department_name']));?></td>
                                        <td><?php echo strtoupper(escape($row['account_type']));?></td>
                                        <td><?php echo strtoupper(escape($row['property']));?></td>
                                        <td><?php echo strtoupper(escape($row['account_status']));?></td>
                                        <td>
                                            <a href="account?u=<?php echo base64_url_encode(escape($row['employee_id']));?>" type="button" class="btn btn-success btn-sm">VIEW</a>
                                        </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Login Name</th>
                                    <th>Department</th>
                                    <th>Account type</th>
                                    <th>Property</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->


    <!-- Modal -->
    <div class="modal fade" id="new-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-accountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="new-accountLabel">New Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="middle">Middle Name</label>
                                        <input type="text" class="form-control" id="middle" placeholder="Middle Name" name="middle_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="suffix">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" placeholder="Suffix" name="suffix" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="uname">Username</label>
                                        <input type="text" class="form-control" id="uname" placeholder="Username" name="username" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="empID">Employee ID</label>
                                        <input type="number" class="form-control" id="empID" placeholder="employee id" name="employee_id" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="pword">Temporary Password</label>
                                <input type="password" class="form-control" id="pword" placeholder="Temporary Password" name="user_password" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone_number">Mobile Number</label>
                                <input type="number" class="form-control" id="phone_number" placeholder="Mobile Number" name="phone_number" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="jtitle">Job Title</label>
                                        <input type="text" class="form-control" id="jtitle" placeholder="Job Title" name="job_title" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="emailID">Email ID</label>
                                        <input type="email" class="form-control" id="emailID" placeholder="Email id" name="email_id" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="baguio_address">Baguio Address</label>
                                        <input type="text" class="form-control" id="baguio_address" placeholder="Baguio Address" name="baguio_address" required>
                                    </div>        
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-2">
                                        <label for="present_address">Present Address</label>
                                        <input type="text" class="form-control" id="present_address" placeholder="Present Address" name="present_address" required>
                                    </div>        
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="department">Department</label>
                                <select id="department" class="form-select" aria-label="department" name="department">
                                    <option selected disabled>Select Department</option>
                                    <?php foreach ($result_department as $row) : ?>
                                        <option value="<?php echo escape($row['department_id']);?>"><?php echo escape($row['department_name']);?></option>
                                    <?php endforeach?>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="account_type">Account Type</label>
                                        <select id="account_type" class="form-select" aria-label="account_type" name="account_type">
                                            <option selected disabled>Select Account type</option>
                                            <option value="administrator">Administrator</option>
                                            <option value="instructor">Instructor</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="property">Property</label>
                                        <select id="property" class="form-select" aria-label="property" name="account_property">
                                            <option selected disabled>Select Property</option>
                                            <option value="manor">MANOR</option>
                                            <option value="tfl">TFL</option>
                                            <option value="cap">CAP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="labels">Date Started</label><input type="date" name="date_started" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label class="labels">Birth Date</label><input type="date" name="birth_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-7">
                                    <div class="form-group mb-2">
                                        <label for="property">Employement Status</label>
                                        <select id="employment_status" class="form-select" aria-label="employmentstatus" name="employment_status">
                                            <option selected disabled>Select Employement Status</option>
                                            <option value="Manager/Assistant Manager">Managers / Assistant Managers</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <option value="Rank/File">Rank and File</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group mb-2">
                                        <label for="civil_status">Civil Status</label>
                                        <select id="civil_status" class="form-select" aria-label="civil_status" name="civil_status">
                                            <option selected disabled>Select Civil Status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="add_user">Add</button>
                    </div>
                    <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
                </form>
            </div>
        </div>
    </div>
<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_POST['add_user']) && $statement_add_user):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully added account!',
            'success'
        ).then(function() {
            window.location = 'user_accounts';
        });
    </script>
<?php endif?>