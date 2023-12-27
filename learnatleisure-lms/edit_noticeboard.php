<?php include 'templates/dashboard_header.php' ?>
<header>
   <link rel="stylesheet" href="css/noticeboard.css">
</header>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>

<?php include 'noticeboard_include/fetch_noticeboard_data.php'?>
<?php include 'noticeboard_include/update_noticeboard.php'?>

<!--Container Main start-->
<div class="height-100">
   <div class="container mx-auto">
      <div class="container-fluid pt-5">
      <form method="post">
      <?php foreach($result_get_noticeboard as $row):?>
      <div class="row">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="from">From</label>
                                        <input type="date" class="form-control" id="from"  name="from_date" value="<?php echo escape($row['noticeboard_from_date']);?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="stime">Start Time</label>
                                        <input type="time" class="form-control" id="stime" name="start_time" value="<?php echo escape($row['noticeboard_from_time']);?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="from">To</label>
                                        <input type="date" class="form-control" id="to"  name="to_date" value="<?php echo escape($row['noticeboard_to_date']);?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group">
                                        <label for="etime">End Time</label>
                                        <input type="time" class="form-control" id="etime" name="end_time" value="<?php echo escape($row['noticeboard_to_time']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="headline">Headline</label>
                                <input type="text" class="form-control" id="headline" placeholder="headline" name="headline" value="<?php echo escape($row['noticeboard_headline']);?>">
                            </div>
                            <div class="mb-2">
                              <label for="news_content" class="form-label">Caption</label>
                              <textarea class="form-control" id="news_content" rows="10" name="caption">
                                <?php echo escape($row['noticeboard_caption']);?>
                              </textarea>
                            </div>

                            <button type="submit" class="btn btn-success" name="update_noticeboard">Update Noticeboard</button>
      </div>   
      <?php endforeach?>
      </form>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>


<?php if(isset($_POST['update_noticeboard']) && $statement_update_noticeboard):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully Updated this Noticeboard!',
            'success'
        ).then(function() {
            window.location = 'noticeboard';
        });
    </script>
<?php endif?>