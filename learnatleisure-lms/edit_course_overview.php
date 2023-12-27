<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'departments_inlcudes/get_department.php'?>
<?php include 'courses/course_introduction.php' ?>
<?php include 'courses/edit_course_overview.php' ?>

<header>
<style>

#calendar {
  /*max-width: 1100px;*/
  margin: 0 auto;
}
a{
  color:green;
}
.fc-event{
  background-color:green;
  color:white;
}

.just-padding {
  padding: 15px;
}

.list-group.list-group-root {
  padding: 0;
  overflow: hidden;
}

.list-group.list-group-root .list-group {
  margin-bottom: 0;
}

.list-group.list-group-root .list-group-item {
  border-radius: 0;
  border-width: 1px 0 0 0;
}

.list-group.list-group-root > .list-group-item:first-child {
  border-top-width: 0;
}

.list-group.list-group-root > .list-group > .list-group-item {
  padding-left: 30px;
}

.list-group.list-group-root > .list-group > .list-group > .list-group-item {
  padding-left: 45px;
}

.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}    
/* user-dashboard-info-box */
.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
.user-dashboard-info-box .candidates-list .thumb img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    border-radius: 50%;
}

.user-dashboard-info-box .title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0;
}

.user-dashboard-info-box .candidates-list td {
    vertical-align: middle;
}

.user-dashboard-info-box td li {
    margin: 0 4px;
}

.user-dashboard-info-box .table thead th {
    border-bottom: none;
}

.table.manage-candidates-top th {
    border: 0;
}

.user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
    margin-bottom: 10px;
}

.table.manage-candidates-top {
    min-width: 650px;
}

.user-dashboard-info-box .candidate-list-details ul {
    color: #969696;
}

/* Candidate List */
.candidate-list {
    background: #ffffff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #eeeeee;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.candidate-list:hover {
    -webkit-box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    position: relative;
    z-index: 99;
}
.candidate-list:hover a.candidate-list-favourite {
    color: #e74c3c;
    -webkit-box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
    box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
}

.candidate-list .candidate-list-image {
    margin-right: 25px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    border: none;
}
.candidate-list .candidate-list-image img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
}

.candidate-list-title {
    margin-bottom: 5px;
}

.candidate-list-details ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0px;
}
.candidate-list-details ul li {
    margin: 5px 10px 5px 0px;
    font-size: 13px;
}

.candidate-list .candidate-list-favourite-time {
    margin-left: auto;
    text-align: center;
    font-size: 13px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px;
}
.candidate-list .candidate-list-favourite-time span {
    display: block;
    margin: 0 auto;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite {
    display: inline-block;
    position: relative;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border: 1px solid #eeeeee;
    border-radius: 100%;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin-bottom: 20px;
    font-size: 16px;
    color: #646f79;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
    background: #ffffff;
    color: #e74c3c;
}

.candidate-banner .candidate-list:hover {
    position: inherit;
    -webkit-box-shadow: inherit;
    box-shadow: inherit;
    z-index: inherit;
}

.bg-white {
    background-color: #ffffff !important;
}
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
</style>
</header>
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
            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="container mt-4">
                    <h3>Course Overview</h3>
                    <hr>
                    <?php foreach ($result_course_intro as $row): ?>
                    <form method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="course">Course Name</label>
                                    <input type="text" class="form-control" id="course" placeholder="Course" name="course" value="<?php echo escape($row['course_name']); ?>">
                                </div>
                            </div>
                            <div class="col">
                                <label for="department">Department</label>
                                <select class="form-select" id="department" name="department">
                                    <option desabled selected>Select Department</option>
                                    <?php foreach ($result_department as $row_department) : ?>
                                        <option <?php echo (escape($row['department_id']) == escape($row_department['department_id'])) ? 'selected' : ''; ?> value="<?php echo escape($row_department['department_id']);?>"><?php echo escape($row_department['department_name']);?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="course">Date</label>
                                    <input type="date" class="form-control" id="date" placeholder="date" name="date" value="<?php echo escape($row['course_date']); ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="save_as">Save as</label>
                                    <select class="form-select" id="save_as" name="save_as">
                                        <option value="0" <?php echo (escape($row['course_status']) == 0) ? 'selected' : ''; ?>>Publish</option>
                                        <option value="1" <?php echo (escape($row['course_status']) == 1) ? 'selected' : ''; ?>>Save to Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <textarea id="editor" placeholder="Course Description" name="description">
                                <?php echo escape($row['course_description']); ?>
                            </textarea>
                        </div>
                        <?php endforeach?>
                        <div class="mt-3">
                            <input class="btn btn-success" type="submit" value="Edit" name="edit_course_overview">
                        </div>
                    </form>
                </div>
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
      initialDate: '<?php echo date('Y-m-d'); ?>',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      nowIndicator: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        <?php foreach($result_list_announcement as $row):?>
        {
          title: '<?php echo escape($row['announcement_name']);?>',
          start: '<?php echo escape($row['announcement_from']);?>',
          end: '<?php echo escape($row['announcement_to']);?>'
        },
        <?php endforeach?>
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