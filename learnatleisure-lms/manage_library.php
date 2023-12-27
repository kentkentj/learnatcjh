<?php include 'templates/dashboard_header.php' ?>
<?php include 'departments_inlcudes/get_department.php'?>
<?php include 'courses/add_course.php'?>
<?php include 'courses/list_course.php'?>
<?php include 'certificate_includes/list_user_certificates.php'?>
<?php include 'courses/delete_course.php'?>

<?php
//redirect to home page when user is not admin
if($account_type == 'user'){
    header('Location: /cjh_leisure_elearning');
    exit;
}
?>

<?php include 'templates/navbar.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="row">
                    <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Manage Library</h4>
                            </div>
                            <div></div>
                        </div>
                        <hr>
                    </div>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Instructor</th>
                                <th>Course Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result_list_course as $row) : ?>
                            <tr>
                                <td><?php echo escape($row['course_name']);?></td>
                                <td><?php echo strtoupper(escape($row['employee_first_name']) . ' ' . $row['employee_last_name']);?></td>
                                <td>
                                    <?= (escape($row['course_status']) == 0) ? 'Published':'Draft'; ?>
                                </td>
                                <td>
                                    <a href="manage_library?ml=<?php echo base64_url_encode(escape($row['course_id']));?>" class="text-danger">
                                        <i class='bx bx-trash'></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Course Name</th>
                                <th>Instructor</th>
                                <th>Course Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-3 mb-3 mt-4">
                <h4 class="text-success">Certificates</h4>
                <hr>
                <div class="list-group">
                    <?php $i=0; foreach($result_list_certificates as $row):?>
                    <?php if($i==3) break;?>
                    <a href="view_certificate?crt=<?php echo base64_url_encode(escape($row['certificate_id']));?>" class="list-group-item list-group-item-action flex-column align-items-start" target="_blank">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 text-success"><?php echo escape($row['course_name']);?></h5>
                        <small><?php echo date("F d, Y", strtotime(escape($row['certificate_date'])));?></small>
                        </div>
                    </a>
                    <?php $i++;?>
                    <?php endforeach?>
                    <a class="text-success pt-2" href="certificates">View More</a>
                </div>
                
                <h4 class="pt-5 text-success">Modules</h4>
                <hr>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 text-success">Module Title</h5>
                        <small>July 21, 2023</small>
                        </div>
                        <p class="mb-1">Course name</p>
                        <small>Topic Name</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 text-success">Module Title</h5>
                        <small>July 21, 2023</small>
                        </div>
                        <p class="mb-1">Course name</p>
                        <small>Topic Name</small>
                    </a>
                    <a class="text-success pt-2" href="#">View More</a>
                </div>
            </div>
        </div>

        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_GET['ml']) && $statement_delete_course):?>
    <script>
        Swal.fire(
            'Done',
            'Course Was Deleted',
            'Warning'
        ).then(function() {
            window.location = 'manage_library';
        });
    </script>
<?php endif?>