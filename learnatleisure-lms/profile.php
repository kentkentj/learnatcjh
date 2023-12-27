<?php include 'templates/dashboard_header.php' ?>

<?php include 'server/common.php' ?>
<?php include 'profile_includes/update_user_info.php' ?>
<?php include 'profile_includes/reset_profile_password.php' ?>
<header>
    <style>
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
            color: #440D13;
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
        a{
            color: #CB8D2A !important;
        }
        .btn-success{
            background-color: #440D13 !important;
            border-color:#440D13 !important;
        }
        .btn:hover{
            color:#CB8D2A;
            background-color:#440D13;
            border-color:#440D13;
        }
        .btn-success:hover{
            background-color: #CB8D2A;
            border-color:#440D13;
            color:#440D13 !important;
        }
        <?php endif?>


        <?php if($property == 'tfl'):?>
        .form-control:focus {
            box-shadow: none;
            border-color: #440D13
        }

        .profile-button {
            background: #333333;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #333333;
            color:white;
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
            color: #333333;
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
        a{
            color: #8C8C8C !important;
        }
        .btn-success{
            background-color: #333333 !important;
            border-color:#333333 !important;
        }
        .btn:hover{
            color:#8C8C8C;
            background-color:#333333;
            border-color:#333333;
        }
        .btn-success:hover{
            background-color: #8C8C8C;
            border-color:#333333;
            color:#8C8C8C !important;
        }
        <?php endif?>
    </style>
</header>
<?php include 'templates/navbar.php' ?>
<!--Container Main start-->
<div class="height-100">
   <h4>Profile Information</h4>
   <!--Profile-->
   <div class="container rounded bg-white mb-5">
      <div class="row">
         <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold text-uppercase"><?php echo $employee_first_name . ' ' . $employee_middle_name . ' ' . $employee_last_name . ' ' . $employee_suffix;?></span>
                <span class="text-black-50 text-uppercase">ID: <?php echo $employee_id ;?></span>
                <span class="text-black-50 text-uppercase"><?php echo $department_name . ' ' . $employee_job_title;?></span>
                <span class="text-black-50 text-uppercase" style="font-size:13px;"><?php echo $account_type;?></span>
            </div>
         </div>
         <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form method="post">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Username</label><input type="text" name="username" class="form-control" placeholder="enter username" value="<?php echo $employee_username;?>"></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobile_num" class="form-control" placeholder="enter phone number" value="<?php echo $employee_mobile_number;?>"></div>
                        <div class="col-md-12"><label class="labels">Job Title</label><input type="text" name="job_title" class="form-control" placeholder="enter job title" value="<?php echo $employee_job_title?>"></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text" name="email" class="form-control" placeholder="enter email id" value="<?php echo $employee_email;?>"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update_profile">Save Profile</button></div>
                </form>
            </div>
         </div>
         <div class="col-md-4">
            <div class="p-3 py-5">
                <form method="post">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Change Password</span>
                        <button id="btn-pwd" class="border px-3 p-1 add-experience" type="submit" name="update_profile_pwd">&nbsp;Password</button>
                        <!--<span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Password</span>-->
                    </div>
            
                    <!--<label id="password-status" class="labels text-danger">Password does not Match</label>-->
                    <div class="col-md-12"><label class="labels">Old Password</label><input id="Inputoldpassword" type="password" class="form-control" placeholder="Old Password" value="" name="old_password"></div>
                    <br>
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

<?php if(isset($_POST['update_profile']) && $statement_update_profile_info):?>
    <script>
        Swal.fire(
            'Success!',
            'You have been successfully updated your account',
            'success'
        ).then(function() {
                window.location = 'profile';
        });
    </script>
<?php endif?>

<?php if(isset($_POST['update_profile_pwd']) && $statement_update_profile_password):?>
    <script>
        Swal.fire(
            'Success!',
            'You have been successfully changed your password',
            'success'
        ).then(function() {
                window.location = 'profile';
        });
    </script>
<?php endif?>

<?php if(isset($_GET['err'])):?>
    <script>
        Swal.fire(
            'Failed!',
            '<?php echo $_GET['err'];?>',
            'warning'
        ).then(function() {
                window.location = 'profile';
        });
    </script>
<?php endif?>


