<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'courses/quiz/list_questions.php'?>
<?php include 'courses/quiz/getquizinfo.php'?>
<?php include 'courses/quiz/submitquiz.php'?>
<?php include 'courses/quiz/get_answers.php'?>

<!--Container Main start-->
<div class="height-100">
   <div class="container pt-3">
    <div class="d-flex justify-content-between">
        <div>
            <?php foreach($statement_get_quiz as $row):?>
            <h1><?php echo escape($row['module_content_name']);?></h1>
            <p class="text-muted"><?php echo $row['module_content_description'];?></p>
            <?php endforeach?>
        </div>
        <div>
            <?php if(($account_type == 'administrator') || ($account_type == 'instructor')):?>
            <a href="manage_quiz?q=<?php echo $_GET['q'];?>&&c=<?php echo $_GET['c'];?>" type="button" class="btn btn-success">Manage Quiz Content</a> 
            <?php endif?>
        </div>
    </div>
    <hr>
    <form method="post">
        <?php $i=1; foreach($result_list_questions as $row):?>
        <div class="card col-sm-10 col-lg-8 col-md-8 mb-4">
            <h5 class="card-header">Question <?php echo $i;?> <span class="text-mute" style="font-size:12px;"><?php echo escape($row['question_points']);?> point/s</span></h5>
            <div class="card-body">
                <h5 class="card-title"><?php echo escape($row['question_description']);?></h5>
                <select class="form-select" name="answer[]">
                    <option selected disabled>Select Your Answer</option>
                    <option value="<?php echo escape($row['question_option_1']);?>"><?php echo escape($row['question_option_1']);?></option>
                    <option value="<?php echo escape($row['question_option_2']);?>"><?php echo escape($row['question_option_2']);?></option>
                    <option value="<?php echo escape($row['question_option_3']);?>"><?php echo escape($row['question_option_3']);?></option>
                    <option value="<?php echo escape($row['question_option_4']);?>"><?php echo escape($row['question_option_4']);?></option>
                </select>
            </div>
            <input type="text" name="enc[]" value="<?php echo base64_url_encode(escape($row['question_id']));?>" hidden>
        </div>
        <?php $i++; endforeach?>

        <?php if($statement_get_answers->rowCount() < 1):?>
        <input class="btn btn-success" type="submit" value="Submit" name="submit_quiz">
        <?php else:?>
            You have already taken this quiz
        <?php endif?>
        <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
    </form>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<!--Container Main end-->

<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_POST['submit_quiz']) && $statement_user_answer):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully Submited Quiz',
            'success' 
        ).then(function() {
            window.location = 'myscore?c=<?php echo $_GET['c'];?>';
        });
    </script>
<?php endif?>