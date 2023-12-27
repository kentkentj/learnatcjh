<?php include 'templates/dashboard_header.php' ?>
<?php include 'departments_inlcudes/get_department.php'?>
<?php include 'courses/add_course.php'?>
<?php include 'courses/list_course.php'?>
<?php include 'certificate_includes/list_user_certificates.php'?>
<?php include 'courses/module/list_modules.php' ?>
<?php include 'courses/course_introduction.php' ?>
<?php include 'courses/enroll/enroll_student.php'?>

<?php include 'templates/navbar.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="row">
                    <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Enroll</h4>
                            </div>
                            <div>
                                <form method="post">
                                    <?php if($account_type == 'instructor'):?>
                                    <input class="btn btn-success" type="submit" value="I'm Instructor" name="enroll">
                                    <?php endif?>
                                </form>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <!--Counse Overview-->
                <?php foreach ($result_course_intro as $row) : ?>
                <?php echo $row['course_description'];?>
                <?php endforeach?>
                <!--Counse Overview-->
            </div>
            <div class="col-md-3 mb-3 mt-4">
                <h4 class="text-success">Contents</h4>
                <hr>
                <div class="list-group">
                <?php foreach ($result_list_modules as $row) : ?>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" target="_blank">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-success"><?php echo escape($row['module_name']);?></h5>
                            <small></small>
                        </div>
                    </a>
                <?php endforeach?>
                </div>
                
                <h4 class="pt-5 text-success">Instructors</h4>
                <hr>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-success">Faith Magsino</h5>
                        </div>
                        <p class="mb-1">Position</p>
                    </a>
                </div>
            </div>
        </div>

        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>
