<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'courses/module/list_modules.php' ?>
<?php include 'courses/module/add_module_content.php' ?>

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
                <div class="form-group mb-2">
                  <label for="module">Topic Name</label>
                  <input type="text" class="form-control" id="module" placeholder="Topic Name" name="module">
                </div> 
                <div class="mt-2">
                  <textarea id="editor" placeholder="Module Content Description" name="description"></textarea>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group mb-2">
                      <label for="save_as">Save as</label>
                      <select class="form-select" id="save_as" name="save_as">
                        <option value="0">Publish</option>
                        <option value="1">Save to Draft</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group mb-2">
                      <label for="module">Module Content type</label>
                      <select class="form-select" id="module" name="module_content_type">
                        <option value="module">Module/Activity</option>
                        <option value="quiz">Quiz</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-success" name="add_module">Insert Module</button>
              </form>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->

    <script src="js/index.global.js"></script>
    <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      height: '100%',
      expandRows: true,
      slotMinTime: '08:00',
      slotMaxTime: '20:00',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'dayGridMonth',
      initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'Front Desk Course',
          url: '#',
          start: '2023-01-13T14:00:00',
          end: '2023-01-14T23:00:00'
        },
        {
          title: 'House Keeping',
          url: 'http://google.com/',
          start: '2023-01-28'
        }
      ]
    });

    calendar.render();
  });

</script>
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
<?php if(isset($_POST['add_module']) && $statement_add_module_content):?>
  <script>
        Swal.fire(
            'Success!',
            'You have been successfully added a module',
            'success'
        ).then(function() {
                window.location = 'course?c=<?php echo $_GET['c'];?>&&link=module';
        });
    </script>
<?php endif?>

