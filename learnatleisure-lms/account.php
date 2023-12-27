<?php include 'templates/dashboard_header.php' ?>
<?php include 'departments_inlcudes/get_department.php';?>
<?php include 'user_includes/update_user.php';?>
<?php include 'user_includes/delete_user.php';?>

<?php
//redirect to home page when user is not admin
if($account_type != 'administrator'){
    header('Location: /cjh_leisure_elearning');
    exit;
}
?>

<header>
    <style>
        <?php if($property == 'tfl'):?>
        .form-control:focus {
            box-shadow: none;
            border-color: #333333
        }

        .profile-button {
            background: #333333;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #333333
        }

        .profile-button:focus {
            background: #333333;
            box-shadow: none
        }

        .profile-button:active {
            background: #333333;
            box-shadow: none
        }

        .back:hover {
            color: #8C8C8C;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience{
            background:none;
        }
        .add-experience:hover {
            background: #333333;
            color: #fff;
            border: solid 1px #333333
        }
        <?php endif?>
        <?php if($property == 'manor'):?>
        .form-control:focus {
            box-shadow: none;
            border-color: #440D13
        }

        .profile-button {
            background: #440D13;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #440D13
        }

        .profile-button:focus {
            background: #440D13;
            box-shadow: none
        }

        .profile-button:active {
            background: #440D13;
            box-shadow: none
        }

        .back:hover {
            color: #8C8C8C;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience{
            background:none;
        }
        .add-experience:hover {
            background: #440D13;
            color: #fff;
            border: solid 1px #440D13
        }
        <?php endif?>
    </style>
</header>
<?php include 'templates/navbar.php' ?>
<!--Container Main start-->
<div class="height-100">
   <h4>User Information</h4>
   <!--Profile-->
   <div class="container rounded bg-white mb-5">
      <?php if(isset($_GET['err'])):?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $_GET['err'];?>
      </div>
      <?php endif?>
      <div class="row">
         <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php foreach ($result_update_employee as $row) : ?>
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold text-uppercase"><?php echo escape($row['employee_first_name']) . ' ' . escape($row['employee_last_name']);?></span>
                <span class="text-black-50 text-uppercase"><?php echo escape($row['department_name_account'])?></span>
                <?php endforeach?>
                <div class="mt-3">
                    <button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#remove-account">Remove</button>
                </div>  
            </div>
         </div>
         <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form method="post">
                    <?php foreach ($result_update_employee as $row) : ?>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" name="first_name" class="form-control" placeholder="first name" value="<?php echo escape($row['employee_first_name']);?>"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="last_name" class="form-control" value="<?php echo escape($row['employee_last_name']);?>" placeholder="surname"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="labels">Middle Name</label><input type="text" name="middle_name" class="form-control" value="<?php echo escape($row['employee_middle_name']);?>" placeholder="middle name">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Suffix</label><input type="text" name="suffix" class="form-control" value="<?php echo escape($row['employee_suffix']);?>" placeholder="suffix">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="labels">Baguio Address</label><input type="text" name="baguio_address" class="form-control" value="<?php echo escape($row['employee_baguio_address']);?>" placeholder="baguio address">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Present Address</label><input type="text" name="present_address" class="form-control" value="<?php echo escape($row['employee_present_address']);?>" placeholder="present address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="labels">Username</label><input type="text" name="username" class="form-control" placeholder="enter username" value="<?php echo escape($row['employee_username'])?>">
                        </div>
                        <div class="col-sm-6">
                            <label class="labels">Employee ID</label><input type="number" name="employee_id" class="form-control" placeholder="enter employee id" value="<?php echo escape($row['employee_id'])?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <!--<div class="col-md-12"></div>-->
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile_num" class="form-control" placeholder="enter phone number" value="<?php echo escape($row['employee_mobile_number'])?>"></div>
                        <div class="col-md-12"><label class="labels">Job Title</label><input type="text" name="job_title" class="form-control" placeholder="enter job title" value="<?php echo escape($row['employee_job_title'])?>"></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text" name="email" class="form-control" placeholder="enter email id" value="<?php echo escape($row['employee_email'])?>"></div>
                        <div class="col-md-6">
                            <label class="labels">Department</label>
                            <select class="form-select" name="department">
                                <option selected disabled>Select Department</option>
                                <?php foreach ($result_department as $row_select) : ?>
                                <option value="<?php echo escape($row_select['department_id']);?>" <?php echo (escape($row_select['department_name']) == escape($row['department_name_account'])) ? 'selected' : ''; ?>><?php echo escape($row_select['department_name']);?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Property</label>
                            <select class="form-select" name="property">
                                <option selected disabled>Select Property</option>
                                <option value="manor" <?php echo (escape($row['property']) == 'manor') ? 'selected' : ''; ?>>MANOR</option>
                                <option value="cap" <?php echo (escape($row['property']) == 'cap') ? 'selected' : ''; ?>>CAP</option>
                                <option value="tfl" <?php echo (escape($row['property']) == 'tfl') ? 'selected' : ''; ?>>TFL</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Status</label>
                            <select class="form-select" name="account_status">
                                <option selected disabled>Select Status</option>
                                <option value="active" <?php echo (escape($row['account_status']) == 'active') ? 'selected' : ''; ?>>Active</option>
                                <option value="deactivate" <?php echo (escape($row['account_status']) == 'deactivate') ? 'selected' : ''; ?>>Deactivate</option>
                                <option value="terminated" <?php echo (escape($row['account_status']) == 'terminated') ? 'selected' : ''; ?>>Terminated</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Account Type</label>
                            <select class="form-select" name="account_type">
                                <option selected disabled>Select Account Type</option>
                                <option value="administrator" <?php echo (escape($row['account_type']) == 'administrator') ? 'selected' : ''; ?>>Administrator</option>
                                <option value="instructor" <?php echo (escape($row['account_type']) == 'instructor') ? 'selected' : ''; ?>>Instructor</option>
                                <option value="user" <?php echo (escape($row['account_type']) == 'user') ? 'selected' : ''; ?>>User</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="labels">Date Started</label><input type="date" name="date_started" class="form-control" value="<?php echo escape($row['employee_date_started']);?>">
                        </div>
                        <div class="col-sm-6">
                            <label class="labels">Birth Date</label><input type="date" name="birth_date" class="form-control" value="<?php echo escape($row['birth_date']);?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="labels">Employment Status</label>
                            <select class="form-select" name="employment_status">
                                <option selected disabled>Select employment status</option>
                                <option value="Managers/Assistant Managers" <?php echo (escape($row['employment_status']) == 'Managers/Assistant Managers') ? 'selected' : ''; ?>>Managers / Assistant Managers</option>
                                <option value="Supervisor" <?php echo (escape($row['employment_status']) == 'Supervisor') ? 'selected' : ''; ?>>Supervisor</option>
                                <option value="Rank/File" <?php echo (escape($row['employment_status']) == 'Rank/File') ? 'selected' : ''; ?>>Rank and File</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="labels">Civil Status</label>
                            <select class="form-select" name="civil_status">
                                <option selected disabled>Select employment status</option>
                                <option value="single" <?php echo (escape($row['civil_status']) == 'single') ? 'selected' : ''; ?>>Single</option>
                                <option value="married" <?php echo (escape($row['civil_status']) == 'married') ? 'selected' : ''; ?>>Married</option>
                            </select>
                        </div>
                    </div>
                    <?php endforeach?>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="save_profile">Save Profile</button></div>
                </form>
            </div>
         </div>
         <div class="col-md-4">
            <div class="p-3 py-5">
                <form method="post">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Reset Password</span>
                        <button id="btn-pwd" class="border px-3 p-1 add-experience" name="reset_pass" type="submit" name="update_pwd">&nbsp;Password</button>
                        <!--<span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Password</span>-->
                    </div>
            
                    <!--<label id="password-status" class="labels text-danger">Password does not Match</label>-->
                    <div class="col-md-12"><label class="labels">Password</label><input id="Inputnewpassword" type="password" class="form-control" placeholder="password" value="" name="password"></div>
                    <br>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input id="Inputconfirmnewpassword" type="password" class="form-control" placeholder="confirm password" value=""></div>
                </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!--End Profile-->
</div>
<!--Container Main end-->


<!-- Modal -->
<div class="modal fade" id="remove-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="remove-accountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="remove-accountLabel">Warning</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure do you want to remove this account?
                </div>
                <div class="modal-footer">
                    <form method="post">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger" name="delete">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'templates/dashboard_footer.php' ?>


<script>
    $('#password-status').hide();
    $('#Inputnewpassword, #Inputconfirmnewpassword').on('keyup', function () {
        if ($('#Inputnewpassword').val() == $('#Inputconfirmnewpassword').val()) {
            $('#btn-pwd').prop('disabled', false);
        } else 
        $('#btn-pwd').prop('disabled', true);
    });

    $('#btn-pwd').prop('disabled', true);
</script>


<?php if(isset($_POST['save_profile']) && $statement_update_profile):?>
    <script>
        Swal.fire(
            'Success!',
            'You have been successfully updated this account',
            'success'
        ).then(function() {
                window.location = 'account?u=<?php echo base64_url_encode(escape($row['employee_id']));?>';
        });
    </script>
<?php endif?>

<?php if(isset($_POST['reset_pass']) && $statement_update_password):?>
    <script>
        Swal.fire(
            'Success!',
            'You have been successfully reset password',
            'success'
        ).then(function() {
                window.location = 'account?u=<?php echo base64_url_encode(escape($row['employee_id']));?>';
        });
    </script>
<?php endif?>


<?php if(isset($_POST['delete']) && $statement_delete_account):?>
    <script>
        Swal.fire(
            'Success!',
            'User has been removed',
            'success'
        ).then(function() {
                window.location = 'user_accounts';
        });
    </script>
<?php endif?>

