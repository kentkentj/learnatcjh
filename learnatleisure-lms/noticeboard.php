<?php include 'templates/dashboard_header.php' ?>
<header>
   <link rel="stylesheet" href="css/noticeboard.css">
</header>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>

<?php include 'noticeboard_include/insert_noticeboard.php'?>
<?php include 'noticeboard_include/list_noticeboard.php'?>
<?php include 'noticeboard_include/delete_noticeboard.php'?>

<!--Container Main start-->
<div class="height-100">
   <div class="container mx-auto">
      <div class="container-fluid pt-5">
         <div class="d-flex justify-content-between mb-2">
            <div>
               <strong class="mb-0">Noticeboard</strong>
               <p>Please enable system alert you will get.</p>
            </div>
            <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
            <div>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#new-noticeboard">NEW NOTICEBOARD</button>
            </div>
            <?php endif?>
        </div>
         <div class="list-group mb-5 shadow">
            <?php foreach($result_list_notice_board as $row):?>
            <div class="list-group-item">
               <div class="row align-items-center">
                  <div class="col">
                     <strong class="mb-0"><?php echo escape($row['noticeboard_headline']);?></strong>
                     <span class="text-muted">
                        <?php echo date("F d, Y", strtotime(escape($row['noticeboard_to_date'])));?>(<?php echo date("H:m", strtotime(escape($row['noticeboard_to_time'])));?>)
                        -
                        <?php echo date("F d, Y", strtotime(escape($row['noticeboard_from_date'])));?>(<?php echo date("H:m", strtotime(escape($row['noticeboard_from_time'])));?>)
                     </span>
                     <p class="text-muted mb-0 w-75"><?php echo escape($row['noticeboard_caption']);?></p>
                  </div>

                  <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
                  <div class="col-auto">
                    <a class="pe-3 text-danger" href="noticeboard?en=<?php echo base64_url_encode(escape($row['noticeboard_id']));?>"><i class='bx bx-trash'></i> Delete</a>
                    <a class="text-success" href="edit_noticeboard?en=<?php echo base64_url_encode(escape($row['noticeboard_id']));?>"><i class='bx bx-edit-alt'></i> Edit</a>
                  </div>
                  <?php endif?>
               </div>
            </div>
            <?php endforeach?>
         </div>
      </div>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>



<?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
<!-- Modal -->
<div class="modal fade" id="new-noticeboard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-noticeboard" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="new-noticeboard">New Noticeboard</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="from">From</label>
                                        <input type="date" class="form-control" id="from"  name="from_date">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="stime">Start Time</label>
                                        <input type="time" class="form-control" id="stime" name="start_time">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="from">To</label>
                                        <input type="date" class="form-control" id="to"  name="to_date">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="etime">End Time</label>
                                        <input type="time" class="form-control" id="etime" name="end_time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="headline">Headline</label>
                                <input type="text" class="form-control" id="headline" placeholder="headline" name="headline">
                            </div>
                            <div class="mb-2">
                              <label for="news_content" class="form-label">Caption</label>
                              <textarea class="form-control" id="news_content" rows="10" name="caption"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="new_noticeboard">Insert</button>
                    </div>
                    <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
                </form>
            </div>
        </div>
    </div>
<?php endif?>