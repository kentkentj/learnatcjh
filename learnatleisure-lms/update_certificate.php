<?php include 'templates/dashboard_header.php' ?>
<?php include 'departments_inlcudes/get_department.php'?>
<?php include 'courses/add_course.php'?>
<?php include 'courses/list_course.php'?>
<?php include 'certificate_includes/list_user_certificates.php'?>
<?php include 'courses/list_course_announcement_dashboard.php'?>

<?php include 'templates/navbar.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="row">
                    <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>My LMS</h4>
                            </div>
                            <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                            <div>
                                <a href="manage_library" type="button" class="btn btn-success">Manage Courses</a> 
                                <a href="#" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addcourseModal">New Course</a> 
                            </div>
                            <?php endif?>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>



<!-- Modal -->
<div class="modal fade" id="addcourseModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addcourseLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="addcourseLabel">Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="course">Course Name</label>
                                <input type="text" class="form-control" id="course" placeholder="Course" name="course">
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea id="editor" placeholder="Course Description" name="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="add_course">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>