<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'courses/module/module_content_manager/get_module_content.php' ?>
<?php include 'courses/module/module_content_manager/update_module_content.php' ?>

<?php include 'templates/navbar.php' ?>
    <!--Container Main start-->
    <div class="height-100">
        <h4>Course</h4>
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
            <div class="col-sm-9 col-md-9 col-lg-9">
              <form method="post" id="save-content-form">
                <?php foreach($result_get_module_content_statement as $row):?>
                <div class="form-group mb-2">
                  <label for="module">Topic Name</label>
                  <input type="text" class="form-control" id="module" placeholder="Topic Name" name="module" value="<?php echo escape($row['module_content_name']);?>">
                </div> 
                <div class="mt-2">
                  <textarea id="editor" placeholder="Course Description" name="description">
                    <?php echo escape($row['module_content_description']);?>
                  </textarea>
                </div>


                <div class="row">
                  <div class="col mb-2 mt-2">
                    <div class="form-group">
                      <label for="save_as">Save as</label>
                      <select class="form-select" id="save_as" name="save_as">
                        <option value="0" <?php echo (escape($row['module_content_status']) == 0) ? 'selected' : ''; ?>>Publish</option>
                        <option value="1" <?php echo (escape($row['module_content_status']) == 1) ? 'selected' : ''; ?>>Save to Draft</option>
                      </select>
                    </div>
                  </div>
                  <div class="col mb-2 mt-2">
                    <div class="form-group">
                      <label for="module">Module Content type</label>
                      <select class="form-select" id="module" name="module_content_type">
                        <option value="module" <?php echo (escape($row['module_content_type']) == 'module') ? 'selected' : ''; ?>>Module/Activity</option>
                        <option value="quiz" <?php echo (escape($row['module_content_type']) == 'quiz') ? 'selected' : ''; ?>>Quiz</option>
                      </select>
                    </div>
                  </div>
                </div>
                <?php endforeach?>
                <button type="submit" class="btn btn-success" name="update_module">Update Module</button>
                <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
              </form>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->

    <script src="js/index.global.js"></script>
<?php include 'templates/dashboard_footer.php' ?>


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



<!--Success Message-->
<?php if(isset($_POST['update_module']) && $statement_update_module_content):?>
  <script>
        Swal.fire(
            'Success!',
            'Module Content Was Successfully Updated',
            'success'
        ).then(function() {
                window.location = 'module_content?c=<?php echo $_GET['c']?>&&content=<?php echo $_GET['content']?>';
        });
    </script>
<?php endif?>

