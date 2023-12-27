<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>

<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'dashboard_inlcudes/course_list.php' ?>
<?php include 'news_inlcudes/list_news.php'?>
<?php include 'noticeboard_include/list_noticeboard.php'?>
    <!--Container Main start-->
    <div class="height-100">
        <h4>Dashboard</h4>
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="row">
                    <?php foreach($result_list_course_dashboard as $row):?>
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
            <div class="col-md-3 mb-3">
                <div class="mb-5">
                    <h4 class="text-success">Noticeboard</h4>
                    <hr>
                    <div class="list-group">
                        <?php foreach($result_list_notice_board as $row):?>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 text-success"><?php echo escape($row['noticeboard_headline']);?></h5>
                            </div>
                            <small><?php echo date("F d, Y", strtotime(escape($row['noticeboard_to_date'])));?> - <?php echo date("F d, Y", strtotime(escape($row['noticeboard_from_date'])));?></small>
                        </a>
                        <?php endforeach?>
                        <a class="text-success pt-2" href="noticeboard">View More</a>
                    </div>
                </div>
                <!--<>-->
                <div class="-mb-4">
                    <h4 class="text-success">Recent News</h4>
                    <hr>
                    <?php $i=0; foreach($result_list_news as $row):?>
                    <?php if($i==3) break;?>
                    <div class="list-group">
                        <a href="story?sid=<?php echo base64_url_encode(escape($row['news_id']))?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-success"><?php echo escape($row['news_headline']);?></h5>
                            <small><?php echo date("F d, Y", strtotime(escape($row['news_date'])));?></small>
                        </div>
                        <p class="mb-1"><?php echo mb_strimwidth(escape($row['news_description']), 0, 150, ". . . . .");?></p>
                        <small><?php echo strtoupper(escape($row['employee_first_name']) . ' ' . $row['employee_last_name']);?></small>
                        </a>
                    </div>
                    <?php $i++;?>
                    <?php endforeach?>
                    <a class="text-success pt-2" href="news">View More</a>
                </div>
                <!--</>-->
            </div>
        </div>

        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->


    <!--Importmant Announcement-->
    <div class="modal fade" id="announcement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="announcementLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="announcementLabel">Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Please Answer Jot Form: <a href="https://form.jotform.com/232787685284473" target="_blank">https://form.jotform.com/232787685284473</a>
                </div>
                <div class="modal-footer">
                    <form method="post">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'templates/dashboard_footer.php' ?>


<script>
    //importtant announcement
	$(document).ready(function(){
		$("#announcement").modal('show');
	});
</script>