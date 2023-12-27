<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'news_inlcudes/list_news.php'?>
<?php include 'news_inlcudes/get_news_story.php'?>
<?php include 'news_inlcudes/update_news.php'?>
<!--Container Main start-->
<?php foreach($result_get_news as $row):?>
<div class="height-100">
   <div class="row mt-3">
      <div class="col-md-8 mb-3">
         <div class="container mt-5">
            <h1 style="font-size: 2.6em;letter-spacing:.125em;"><?php echo escape($row['news_headline']);?></h1>
            <span class="text-muted" style="font-size:1rem;letter-spacing:.125em;">Author: <?php echo strtoupper(escape($row['employee_first_name']) . ' ' . $row['employee_last_name']);?></span> <br>
            <span class="text-muted" style="font-size:1rem;letter-spacing:.125em;">Date: <?php echo date("F d, Y", strtotime(escape($row['news_date'])));?></span>
            <?php if( ((isset($_GET['edit'])) == 1) && (escape($row['author_id']) == $employee_id)): ?>
            <a  class="text-success" href="#" data-bs-toggle="modal" data-bs-target="#new-account"><i class='bx bx-edit-alt ps-2' style="font-size:1.2rem;"></i></a>
            <?php endif?>
            <hr>
            <p class="pt-3"><?php echo escape($row['news_description']);?></p>
         </div>
      </div>
      <div class="col-md-3 mb-3 mt-5">
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
            <a class="text-success pt-2" href="news">View More</a>
         </div>
         <?php $i++;?>
         <?php endforeach?>
      </div>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<?php endforeach?>
<!--Container Main end-->


<!-- Modal -->
<div class="modal fade" id="new-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-accountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                    <?php foreach($result_get_news as $row):?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="new-accountLabel">Insert News</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                           <label for="headline" class="form-label">Headline</label>
                           <input type="text" class="form-control" id="headline" placeholder="headline....." name="headline" value="<?php echo escape($row['news_headline']);?>">
                        </div>  
                        <div class="mb-3">
                           <label for="date" class="form-label">Date</label>
                           <input type="date" class="form-control" id="date" placeholder="date....." name="publish_date" value="<?php echo escape($row['news_date']);?>">
                        </div>  
                        <div class="mb-3">
                           <label for="news_content" class="form-label">News Content</label>
                           <textarea class="form-control" id="news_content" rows="10" name="new_content">
                            <?php echo escape($row['news_description']);?>
                           </textarea>
                        </div>
                        <select class="form-select" name="publish_status">
                           <option value="0" <?php echo (escape($row['new_save_status']) == 0) ? 'selected' : ''; ?> >Publish</option>
                           <option value="1" <?php echo (escape($row['new_save_status']) == 1) ? 'selected' : ''; ?> >Save to Draft</option>
                        </select>
                    </div>
                    <?php endforeach?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="update_news">Insert</button>
                    </div>
                    <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
                </form>
            </div>
        </div>
    </div>
<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_POST['update_news']) && $statement_update_news): ?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully update news!',
            'success'
        ).then(function() {
            window.location = 'news';
        });
    </script>
<?php endif?>