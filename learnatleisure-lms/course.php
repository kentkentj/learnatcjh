<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/common.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'courses/course_introduction.php' ?>
<?php include 'courses/module/add_module.php' ?>
<?php include 'courses/module/list_modules.php' ?>
<?php include 'courses/module/delete_module_file.php' ?>
<?php include 'courses/course_member.php' ?>
<?php include 'courses/module/list_module_content.php' ?>
<?php include 'courses/add_announcement.php' ?>
<?php include 'courses/list_announcement.php' ?>
<?php include 'courses/upload_module_file.php' ?>
<?php include 'courses/list_upload_file.php' ?>
<?php include 'courses/delete_announcement.php' ?>
<?php include 'courses/module/delete_module.php' ?>
<?php include 'courses/fetch_course_members.php' //check is user is already member of course?>
<?php include 'courses/quiz/list_quiz.php' ?>
<?php include 'courses/upload_certificate_template.php' //update certficate?>
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

<?php if($property == 'manor'):?>
        <style>
            .l-navbar{
                background-color: #440D13;
            }
            .btn-success{
                background-color: #440D13;
                border-color:#440D13;
            }
            .btn-outline-success{
                --bs-btn-color: #440D13 !important;
                --bs-btn-border-color: #440D13 !important;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #440D13;
                --bs-btn-hover-border-color: #440D13 !important;
                --bs-btn-focus-shadow-rgb: 25,135,84;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #440D13 !important;
                --bs-btn-active-border-color: #440D13 !important;
                --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                --bs-btn-disabled-color: #440D13 !important;
                --bs-btn-disabled-bg: transparent;
                --bs-btn-disabled-border-color: #440D13 !important;
                --bs-gradient: none;
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
            .fc-event{background-color: #440D13 !important;}
            .text-success{
                color:#440D13 !important;
            }
            .nav_link{
                color: #CB8D2A;
            }

            .active>.page-link, .page-link.active{
                background-color:#440D13;
                border-color:#440D13;
            }
            #header-toggle{
                color:#440D13 !important;
            }
            a{
                color: #440D13;
            }
        </style>
    <?php endif?>


    <?php if($property == 'tfl'):?>
        <style>
            .l-navbar{
                background-color: #333333;
            }
            .btn-success{
                background-color: #333333;
                border-color:#333333;
            }
            .btn-outline-success{
                --bs-btn-color: #333333 !important;
                --bs-btn-border-color: #333333 !important;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #333333;
                --bs-btn-hover-border-color: #333333 !important;
                --bs-btn-focus-shadow-rgb: 25,135,84;
                --bs-btn-active-color: #fff;
                --bs-btn-active-bg: #333333 !important;
                --bs-btn-active-border-color: #333333 !important;
                --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                --bs-btn-disabled-color: #333333 !important;
                --bs-btn-disabled-bg: transparent;
                --bs-btn-disabled-border-color: #333333 !important;
                --bs-gradient: none;
            }
            .btn:hover{
                color:#8C8C8C;
                background-color:#333333;
                border-color:#333333;
            }
            .btn-success:hover{
                background-color: #8C8C8C;
                border-color:#333333;
                color:#333333 !important;
            }
            .fc-event{background-color: #333333 !important;}
            .text-success{
                color:#333333 !important;
            }
            .nav_link{
                color: #8C8C8C;
            }

            .active>.page-link, .page-link.active{
                background-color:#333333;
                border-color:#333333;
            }
            #header-toggle{
                color:#333333 !important;
            }
            a{
                color: #8C8C8C !important;
            }
        </style>
    <?php endif?>
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
                    <li class="list-group-item"><a class="text-success" href="course?c=<?php echo $_GET['c']; ?>&&link=quiz">Quiz</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
                <?php if($_GET['link'] == 'home'): ?>
                <div id="home">
                  <?php foreach ($result_course_intro as $row) : ?>
                    <div class="mt-4">
                      <h3>Course Overview</h3>
                      <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
                      <a href="edit_course_overview?c=<?php echo $_GET['c'];?>">Edit</a>
                      <a class="ps-4" href="#" data-bs-toggle="modal" data-bs-target="#update-certifcate-file">Change Certificate Template</a>
                      <?php endif?>
                      <hr>
                    </div>
                    <h4><?php echo escape($row['course_name']); ?></h4>
                    <img class="img-fluid" src="uploads/course_cover_photo/<?php echo escape($row['cover_image']);?>" alt="<?php echo escape($row['cover_image']);?>">
                    <p><?php echo $row['course_description']; ?></p>
                  <?php endforeach?>
                </div>
                <?php endif ?>

                <?php if($_GET['link'] == 'announcement'): ?>
                <div id="announcement">
                    <div class="mt-4 d-flex justify-content-between mb-2">
                      <div>
                        <h3>Announcement</h3>
                      </div>
                      <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                      <div>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#new-announcement">New Announcement</button>
                      </div>
                      <?php endif?>
                    </div>

                    <?php foreach($result_list_announcement as $row): ?>
                    <div class="list-group">
                        <span href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?php echo escape($row['announcement_name']);?></h5>
                                <small><?php echo date("M d, Y", strtotime(escape($row['course_date'])));?></small>
                            </div>
                            <p class="mb-1"><?php echo escape($row['announcement_description']);?></p>
                            <small><?php echo escape($row['course_name']);?></small>
                            <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                            <a class="text-danger ps-3" href="course?c=<?php echo $_GET['c']?>&&aid=<?php echo base64_url_encode(escape($row['announcement_id']));?>">Delete</a>
                            <a class="ps-3" href="edit_announcement?c=<?php echo $_GET['c'];?>&&aid=<?php echo base64_url_encode(escape($row['announcement_id']));?>">Edit</a>
                            <?php endif?>
                        </span>
                    </div>
                    <?php endforeach?>
                </div>
                <?php endif ?>


                <?php if($_GET['link'] == 'calendar'): ?>
                <div class="mt-4">
                  <h3>Calendar</h3>
                  <hr>
                </div>
                <div style="height: 600px;">
                    <div id="calendar"></div>
                </div>
                <?php endif ?>

                <?php if($_GET['link'] == 'files'): ?>
                <div class="d-flex justify-content-between mb-2 mt-4">
                  <div>
                    <h3>Files</h3>  
                  </div>
                  <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                  <div>
                    <button type="button" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#new-module-file">Upload</button>
                  </div>
                  <?php endif?>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result_list_module_file as $row): ?>
                        <tr>
                            <td>
                              <?php if(escape($row['file_type']) == 'pdf'):?>
                                <a href="reviewpdf?f=<?php echo base64_url_encode(escape($row['module_file_id']));?>" target="_blank"><?php echo escape($row['module_file_name']);?></a>
                              <?php endif?>
                              <?php if(escape($row['file_type']) == 'mp4'):?>
                                <a href="videoplayer?f=<?php echo base64_url_encode(escape($row['module_file_id']));?>" target="_blank"><?php echo escape($row['module_file_name']);?></a>
                              <?php endif?>

                              <a href="course?c=<?php echo base64_url_encode(escape($row['course_id']));?>&&link=files&&df=<?php echo base64_url_encode(escape($row['module_file_id'])); ?>&&file=<?php echo escape($row['module_file_name']);?>">
                                <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                                  <i class='bx bx-trash text-danger px-2'></i>
                                <?php endif?>
                              </a>
                            </td>
                            <td><?php echo escape($row['date_created']);?></td>
                            <td><?php echo escape($row['file_size']);?> bytes</td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <?php endif ?>

                <?php if($_GET['link'] == 'module'): ?>
                <div class="d-flex justify-content-between mb-2 mt-4">
                  <div>
                    <h3>Module</h3>
                  </div>
                  <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                  <div>
                    <button type="button" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#new-module">New Module</button>
                  </div>
                  <?php endif?>
                </div>
                <hr>
                <div class="just-padding mb-5">
                  <ul class="list-group list-group-root well">
                    <!--List Modules-->
                    <?php foreach ($result_list_modules as $row) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <b><?php echo escape($row['module_name']);?></b>
                      <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                        <div class="dropdown">
                          <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Manage Module Content
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="create_module_content?c=<?php echo $_GET['c']; ?>&&mid=<?php echo base64_url_encode(escape($row['module_id']));?>">Create Module Content</a></li>
                            <li><a class="dropdown-item" href="manage_module?c=<?php echo $_GET['c']; ?>&&manage=<?php echo base64_url_encode(escape($row['module_id']));?>">Manage Module Content</a></li>
                            <li><a class="dropdown-item" href="course?c=<?php echo $_GET['c'];?>&&link=module&&delete_module=<?php echo base64_url_encode(escape($row['module_id']));?>">Delete this Module</a></li>
                          </ul>
                        </div>
                      <?php endif?>
                    </li>
                    
                    <div class="list-group">
                      <!--<a href="#" class="list-group-item">Item 1.1</a>-->
                      <?php get_module_contents($row['module_id']); ?>         
                    </div>
                    <?php endforeach?>
                    <!--end List Modules-->
                  </ul>
                </div>
                <?php endif?>
                
                <?php if($_GET['link'] == 'people'): ?>
                  <div class="mt-4 d-flex justify-content-between mb-2">
                    <div>
                      <h3>People</h3>
                    </div>
                    <div>
                      <a href="new_member?c=<?php echo $_GET['c'];?>" type="button" class="btn btn-success" type="button">ADD MEMBER</a>
                    </div>
                  </div>
                  <hr>
                  <div class="container mt-3 mb-4">
                    <div class="mt-4 mt-lg-0">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                              <table class="table manage-candidates-top mb-0">
                                <thead>
                                  <tr>
                                    <th>Employee Name</th>
                                    <th class="text-center">Role</th>
                                    <th class="action text-right">Subject</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($result_list_member as $row):?>
                                  <tr class="candidates-list">
                                    <td class="title">
                                      <div class="candidate-list-details">
                                        <div class="candidate-list-info">
                                          <div class="candidate-list-title">
                                            <h5 class="mb-0"><a href="#"><?php echo strtoupper(escape($row['employee_first_name']) . ' ' . escape($row['employee_last_name']));?></a></h5>
                                          </div>
                                          <div class="candidate-list-option">
                                            <ul class="list-unstyled">
                                              <li><i class="fas fa-filter pr-1"></i><?php echo strtoupper(escape($row['employee_job_title']));?></li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                      <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                                      <span class="candidate-list-time order-1"><?php echo strtoupper(escape($row['account_type']));?></span>
                                    </td>
                                    <td>
                                      <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                                      <span class="candidate-list-time order-1"><?php echo escape($row['course_name']);?></span>
                                    </td>
                                  </tr>
                                  <?php endforeach?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endif?>

                <?php if($_GET['link'] == 'quiz'): ?>
                  <div class="d-flex justify-content-between mb-2 mt-4">
                    <div>
                      <h3>Quiz</h3>
                    </div>
                    <div>
                      <a class="btn btn-success" href="myscore?c=<?php echo $_GET['c'];?>">My Scores</a>
                    </div>
                  </div>
                  <hr> 
                  <div class="container">
                    <?php foreach($statement_list_quiz as $row):?>
                    <div class="list-group">
                      <a href="takequiz?q=<?php echo base64_url_encode(escape($row['module_content_id']));?>&&c=<?php echo $_GET['c'];?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1"><?php echo escape($row['module_content_name']);?></h5>
                        </div>
                        <p class="mb-1"><?php echo escape($row['module_name']);?></p>
                      </a>
                    </div>
                    <?php endforeach?>
                  </div>
                <?php endif?>
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



<!-- Modal Add Module -->
<div class="modal fade" id="new-module" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newmodule-Label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form method="post">
                  <div class="modal-header">
                      <h5 class="modal-title" id="newmodule-Label">New Module</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="module">Module Name</label>
                      <input type="text" class="form-control" id="module" placeholder="Module" name="module">
                    </div>
                    <div class="form-group mb-2">
                      <label for="save_as">Save as</label>
                      <select class="form-select" id="save_as" name="save_as">
                        <option value="0">Publish</option>
                        <option value="1">Save to Draft</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="add_module">New module</button>
                  </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal add Announcement -->
<div class="modal fade" id="new-announcement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-announcement-Label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form method="post">
                  <div class="modal-header">
                      <h5 class="modal-title" id="new-announcement-Label">Announcement</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" placeholder="Leave a subject text here" name="subject">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group input-group-sm mb-2">
                          <label for="from">From</label>
                          <input type="date" class="form-control" id="from" name="from_date">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group input-group-sm mb-2">
                          <label for="to">To</label>
                          <input type="date" class="form-control" id="to" name="to_date">
                        </div>
                      </div>
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a description here" id="description" style="height: 100px" name="description_announcement"></textarea>
                      <label for="description">Description</label>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="add_announcement">New announcement</button>
                  </div>
                </form>
            </div>
        </div>
    </div>


  <!-- Modal add file -->
<div class="modal fade" id="new-module-file" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-module-file-Label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form method="post" enctype="multipart/form-data">
                  <div class="modal-header">
                      <h5 class="modal-title" id="new-module-file-Label">Upload Module</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="file">File</label>
                      <input type="file" class="form-control" id="file" name="module_file">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="add_module_file">Upload</button>
                  </div>
                </form>
            </div>
        </div>
    </div>


  <!-- Modal update_certificate -->
  <div class="modal fade" id="update-certifcate-file" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="update-certifcate-file-Label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form method="post" enctype="multipart/form-data">
                  <div class="modal-header">
                      <h5 class="modal-title" id="update-certifcate-file-Label">Upload Certificate</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group mb-2">
                      <label for="file">File</label>
                      <input type="file" class="form-control" id="file" name="certificate_file">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="btn_certicate_file">Upload</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
<!--Success Message-->
<?php if(isset($_POST['add_module']) && $statement_add_module):?>
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

<!--Success Message Annoucement-->
<?php if(isset($_POST['add_announcement']) && $statement_add_announcement):?>
  <script>
        Swal.fire(
            'Success!',
            'You have been successfully added a annoucement',
            'success'
        ).then(function() {
                window.location = 'course?c=<?php echo $_GET['c'];?>&&link=announcement';
        });
    </script>
<?php endif?>

<!--Success FILE-->
<?php if(isset($_POST['add_module_file']) && $statement_add_module_file):?>
  <script>
        Swal.fire(
            'Success!',
            'You have been successfully added a module',
            'success'
        ).then(function() {
                window.location = 'course?c=<?php echo $_GET['c'];?>&&link=files';
        });
    </script>
<?php endif?>

<!--Success cert-->
<?php if(isset($_POST['btn_certicate_file']) && $statement_cert):?>
  <script>
        Swal.fire(
            'Success!',
            'You have been successfully update certificate template',
            'success'
        ).then(function() {
                window.location = 'course?c=<?php echo $_GET['c'];?>&&link=home';
        });
    </script>
<?php endif?>