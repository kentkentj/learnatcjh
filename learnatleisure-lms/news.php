<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'news_inlcudes/insert_news.php'?>
<?php include 'news_inlcudes/list_news.php'?>
<?php include 'news_inlcudes/delete_news.php'?>

<!--Container Main start-->
<div class="height-100">
   <div class="row mt-3">
      <div class="col-md-8 mb-3">
         <div class="row">
            <div class="container px-4 py-5" id="featured-3">
               <div class="d-flex justify-content-between mb-2 border-bottom">
                    <div>
                        <h2 class="pb-2">News</h2>
                    </div>
                    <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
                    <div>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#new-account">INSERT NEWS</button>
                    </div>
                    <?php endif?>
                </div>
               <!--<div class="row">
                  <div class="col">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Post From</label>
                        <input type="date" class="form-control" id="From">
                     </div>
                  </div>

                  <div class="col">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Post To</label>
                        <input type="date" class="form-control" id="to">
                     </div>
                  </div>
                  <div class="col">
                     <div class="mt-4">
                        <input type="submit" class="btn btn-secondary"  value="Search">
                     </div>
                  </div>
               </div>-->
               <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                  <!--List News-->
                  <?php foreach($result_list_news as $row):?>
                  <div class="feature col">
                     <h2 class="pt-2"><?php echo escape($row['news_headline']);?></h2>
                     <span class="text-muted">Date: <?php echo date("F d, Y", strtotime(escape($row['news_date'])));?></span> <br>
                     <span class="text-muted">Author: <?php echo strtoupper(escape($row['employee_first_name']) . ' ' . $row['employee_last_name']);?></span>
                     <p><?php echo mb_strimwidth(escape($row['news_description']), 0, 150, ". . . . .");?></p>
                     
                     <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
                     <a href="news?sid=<?php echo base64_url_encode(escape($row['news_id']))?>&&delete=1" class="icon-link btn btn-sm btn-danger">
                        DELETE <i class='bx bx-trash'></i>
                     </a>
                     <a href="story?sid=<?php echo base64_url_encode(escape($row['news_id']))?>&&edit=1" class="icon-link btn btn-sm btn-warning">
                        EDIT <i class='bx bx-edit-alt' ></i>
                     </a>
                     <?php endif?>

                     <a href="story?sid=<?php echo base64_url_encode(escape($row['news_id']))?>" class="icon-link btn btn-sm btn-success">
                        READ MORE <i class='bx bx-chevrons-right'></i>
                     </a>
                  </div>
                  <?php endforeach?>
                  <!--/List News-->
               </div>
            </div>
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
         </div>
         <?php $i++;?>
         <?php endforeach?>
      </div>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<!--Container Main end-->


<?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
<!-- Modal -->
<div class="modal fade" id="new-account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-accountLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="new-accountLabel">Insert News</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                           <label for="headline" class="form-label">Headline</label>
                           <input type="text" class="form-control" id="headline" placeholder="headline....." name="headline">
                        </div>  
                        <div class="mb-3">
                           <label for="date" class="form-label">Date</label>
                           <input type="date" class="form-control" id="date" placeholder="date....." name="publish_date">
                        </div>  
                        <div class="mb-3">
                           <label for="news_content" class="form-label">News Content</label>
                           <textarea class="form-control" id="news_content" rows="10" name="new_content"></textarea>
                        </div>
                        <select class="form-select" name="publish_status">
                           <option value="0">Publish</option>
                           <option value="1">Save to Draft</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="add_news">Insert</button>
                    </div>
                    <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
                </form>
            </div>
        </div>
    </div>
<?php endif?>
<?php include 'templates/dashboard_footer.php' ?>



<?php if(isset($_POST['add_news']) && $statement_add_news):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully inserted news!',
            'success'
        ).then(function() {
            window.location = 'news';
        });
    </script>
<?php endif?>



<?php if(isset($_GET['delete']) && $statement_delete_news):?>
   <script>
        Swal.fire(
            'Done',
            'You have successfully deleted news',
            'warning'
        ).then(function() {
            window.location = 'news';
        });
    </script>
<?php endif?>