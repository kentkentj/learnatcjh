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

                    <?php foreach ($result_list_course as $row) : ?>
                    <div class="col-md-3 col-lg-3 col-sm-6 mb-3">
                        <div class="card shadow-sm">
                            <a class="text-dark" href="course?c=<?php echo base64_url_encode(escape($row['course_id']));?>&&link=home">
                                <img class="card-img-top" src="uploads/course_cover_photo/<?php echo escape($row['cover_image']);?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-success"><?php echo escape($row['course_name']);?></h5>
                                    <p class="card-text"><?php echo strtoupper(escape($row['employee_first_name'] . ' ' . $row['employee_last_name']));?></p>
                                </div>
                            </a>
                            <div class="card-footer text-center">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <a href="course?c=<?php echo base64_url_encode(escape($row['course_id']));?>&&link=announcement" class="badge text-success pe-3" style="font-size:1.2em;"><i class='bx bx-bell'></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="course?c=<?php echo base64_url_encode(escape($row['course_id']));?>&&link=calendar" class="badge text-success pe-3" style="font-size:1.2em;"><i class='bx bx-notepad'></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="course?c=<?php echo base64_url_encode(escape($row['course_id']));?>&&link=files" class="badge text-success pe-3" style="font-size:1.2em;"><i class='bx bx-folder'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
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
                
                <h4 class="pt-5 text-success">Course Announcements</h4>
                <hr>
                <div class="list-group">
                    <?php foreach($result_list_course_announcement_dashboard as $row):?>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 text-success"><?php echo escape($row['announcement_name']);?></h5>
                        </div>
                        <small><?php echo date("M d, Y", strtotime(escape($row['announcement_date'])));?></small>
                    </a>
                    <?php endforeach?>
                    <!--<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 text-success">Module Title</h5>
                        <small>July 21, 2023</small>
                        </div>
                        <p class="mb-1">Course name</p>
                        <small>Topic Name</small>
                    </a>-->
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
                        <div class="col">
                            <label for="department">Department</label>
                            <select class="form-select" id="department" name="department">
                                <option desabled selected>Select Department</option>
                                <?php foreach ($result_department as $row) : ?>
                                    <option value="<?php echo escape($row['department_id']);?>"><?php echo escape($row['department_name']);?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="file_image" class="form-label">Upload Course Cover Photo</label>
                        <input type="file" class="form-control" id="file_image" name="cover_image_course">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="course">Date</label>
                                <input type="date" class="form-control" id="date" placeholder="date" name="date">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="save_as">Save as</label>
                                <select class="form-select" id="save_as" name="save_as">
                                    <option value="0">Publish</option>
                                    <option value="1">Save to Draft</option>
                                </select>
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


<script>
  tinymce.init({
    selector: "#editor",
    plugins: 'advlist autolink lists link image charmap print preview anchor,searchreplace visualblocks code fullscreen,insertdatetime media table paste codesample file ',
    toolbar: 'undo redo | fontselect styleselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample action section button | custom_button | file ',

  /* without images_upload_url set, Upload tab won't show up*/
  images_upload_url: 'postAcceptor.php',

  /* we override default upload handler to simulate successful upload*/
  images_upload_handler: function (blobInfo, success, failure) {
    setTimeout(function () {
      /* no matter what you upload, we will turn it into TinyMCE logo :)*/
      success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
    }, 2000);
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  });

</script>

<?php if(isset($_POST['add_course']) && $statement_add_course):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully added course!',
            'success'
        ).then(function() {
            window.location = 'library';
        });
    </script>
<?php endif?>