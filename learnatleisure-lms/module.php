<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'courses/module/view_module_content.php' ?>
<?php include 'courses/module/next_button_module_content.php' ?>
<?php include 'courses/module/prev_button_module_content.php' ?>
<?php include 'courses/course_progress.php' ?>
<?php include 'certificate_includes/generate_certificate.php' ?>

<?php include 'templates/navbar.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-2 mt-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=home">Home</a></li>
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=announcement">Announcement</a></li>
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=calendar">Calendar</a></li>
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=files">Files</a></li>
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=module">Modules</a></li>
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=people">People</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 mb-5">
              <?php foreach ($result_view_modules_contents as $row):?>
              <div class="mt-4">
                <h4><?php echo escape($row['module_content_name']);?></h4>
                <?php echo $row['module_content_description'];?>
              </div>

              <?php if(escape($row['module_content_type']) == 'quiz'):?>
                <div class="text-center">
                    <a href="takequiz?q=<?php echo base64_url_encode(escape($row['module_content_id']));?>&&c=<?php echo $_GET['c'];?>" type="button" class="btn btn-success">Take Quiz</a>
                </div>
              <?php endif?>

              <?php endforeach?>
              <hr>
              <div class="d-flex justify-content-between">
                <div>
                    <?php if($row = $result_view_modules_contents_prev):?>
                    <a href="module?c=<?php echo $_GET['c']; ?>&&m=<?php echo base64_url_encode(escape($row['module_content_id']));?>" type="button" class="btn btn-success"><i class='bx bx-chevrons-left'></i> Previous</a>
                    <?php endif?>
                </div>
                <div>
                    <?php if($row = $result_view_modules_contents_next):?>
                    <a href="module?c=<?php echo $_GET['c']; ?>&&m=<?php echo base64_url_encode(escape($row['module_content_id']));?>" type="button" class="btn btn-success">Next <i class='bx bx-chevrons-right'></i></a>
                    <?php endif?>
                    
                    <?php if($statement_view_modules_contents_next->rowCount() <= 0): ?>
                        <?php update_course_progress($employee_id,$department_id, base64_url_decode($_GET['c']), date('m-d-Y'), 1, 1);?>
                        <form method="post">
                            <button type="submit" class="btn btn-success" name="finish">Finish</button>
                        </form>
                    <?php endif?>
                </div>
              </div>
            </div>
        </div>

        <?php
           if($statement_check_course_progress->rowCount() <= 0){
                insert_course_progress($employee_id, $department_id, base64_url_decode($_GET['c']), date('m-d-Y'), 1, 0);
           }
        ?>
    </div>
    <!--Container Main end-->

    <script src="js/index.global.js"></script>
<?php include 'templates/dashboard_footer.php' ?>


