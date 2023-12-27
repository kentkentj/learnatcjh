<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'courses/quiz/insert_question.php'?>
<?php include 'courses/quiz/get_question.php'?>
<?php include 'courses/quiz/update_question.php'?>
<!--Container Main start-->
<div class="height-100">
   <div class="container pt-3">
      <div class="d-flex justify-content-between">
         <div>
            <h4>Manage Quiz Content</h4>
         </div>
         <div>
         </div>
      </div>
      <hr>
      <form method="post">
         <?php foreach($result_get_questions as $row):?>
         <div class="modal-header">
            <h5 class="modal-title" id="new-questionLabel">Update Question</h5>
         </div>
         <div class="modal-body">
            <div class="form-group mb-2">
               <label for="question">Question</label>
               <input type="text" class="form-control" id="question" placeholder="Type your Question Here ..." name="question" required value="<?php echo escape($row['question_description']);?>">
            </div>
            <div class="row mt-3">
               <div class="col-6">
                  <div class="form-group mb-2">
                     <label for="option_1">Option 1</label>
                     <input type="text" class="form-control" id="option_1" placeholder="Option 1..." name="option_1" required value="<?php echo escape($row['question_option_1']);?>">
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group mb-2">
                     <label for="option_2">Option 2</label>
                     <input type="text" class="form-control" id="option_2" placeholder="Option 2..." name="option_2" required value="<?php echo escape($row['question_option_2']);?>">
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group mb-2">
                     <label for="option_1">Option 3</label>
                     <input type="text" class="form-control" id="option_3" placeholder="Option 3..." name="option_3" value="<?php echo escape($row['question_option_3']);?>"> 
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group mb-2">
                     <label for="option_1">Option 4</label>
                     <input type="text" class="form-control" id="option_4" placeholder="Option 4..." name="option_4" value="<?php echo escape($row['question_option_4']);?>">
                  </div>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-6">
                  <div class="form-group mb-2">
                     <label for="correct_answer">Correct Answer</label>
                     <input type="text" class="form-control" id="correct_answer" placeholder="Correct Answer" name="correct_answer" required value="<?php echo escape($row['question_correct_answer']);?>">
                  </div>
               </div>
               <div class="col-6">
                  <div class="form-group mb-2">
                     <label for="point">Point/s</label>
                     <input type="number" class="form-control" id="point" placeholder="Point/s..." name="point" min="1" oninput="this.value = 
                        !!this.value && Math.abs(this.value) > 0 ? Math.abs(this.value) : null" required value="<?php echo escape($row['question_points']);?>">
                  </div>
               </div>
            </div>
         </div>
         <?php endforeach?>
         <button type="submit" class="btn btn-success" name="update_question">Update Question</button>
         <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
      </form>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_POST['update_question']) && $statement_update_question):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully updated question',
            'success'
        ).then(function() {
            window.location = 'manage_quiz?q=<?php echo $_GET['q'];?>&&c=<?php echo $_GET['c'];?>';
        });
    </script>
<?php endif?>