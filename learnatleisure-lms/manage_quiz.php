<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'courses/quiz/insert_question.php'?>
<?php include 'courses/quiz/list_questions.php'?>
<?php include 'courses/quiz/delete_quiz.php'?>
<?php
//redirect to home page when user is not admin
if($account_type == 'user'){
    header('Location: /cjh_leisure_elearning');
    exit;
}
?>
<!--Container Main start-->
<div class="height-100">
   <div class="container pt-3">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Manage Quiz Content</h4>
        </div>
        <div>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#new-question">Insert Question</button>
        </div>
    </div>
    <hr>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Question</th>
                <th>Correct Answer</th>
                <th>Course Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result_list_questions as $row):?>
            <tr>
                <td style="width:40%"><?php echo escape($row['question_description']);?></td>
                <td><?php echo escape($row['question_correct_answer']);?></td>
                <td><?php echo escape($row['course_name']);?></td>
                <td>
                    <a class="text-danger pe-3" href="manage_quiz?q=<?php echo $_GET['q'];?>&&c=<?php echo $_GET['c'];?>&&qid=<?php echo base64_url_encode(escape($row['question_id']));?>">Remove</a>
                    <a class="text-success" href="quiz?q=<?php echo $_GET['q'];?>&&c=<?php echo $_GET['c'];?>&&qid=<?php echo base64_url_encode(escape($row['question_id']));?>">Update</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
        <tfoot>
            <tr>
                <th>Question</th>
                <th>Correct Answer</th>
                <th>Course Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
   </div>
   <!--Website Footer Style Here-->
   <?php include 'templates/footer_style.php'?>
</div>
<!--Container Main end-->


<!-- Modal -->
<div class="modal fade" id="new-question" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="new-questionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="new-questionLabel">Insert Question</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="question">Question</label>
                            <input type="text" class="form-control" id="question" placeholder="Type your Question Here ..." name="question" required>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="option_1">Option 1</label>
                                    <input type="text" class="form-control" id="option_1" placeholder="Option 1..." name="option_1" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="option_2">Option 2</label>
                                    <input type="text" class="form-control" id="option_2" placeholder="Option 2..." name="option_2" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="option_1">Option 3</label>
                                    <input type="text" class="form-control" id="option_3" placeholder="Option 3..." name="option_3">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="option_1">Option 4</label>
                                    <input type="text" class="form-control" id="option_4" placeholder="Option 4..." name="option_4">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="correct_answer">Correct Answer</label>
                                    <input type="text" class="form-control" id="correct_answer" placeholder="Correct Answer" name="correct_answer" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-2">
                                    <label for="point">Point/s</label>
                                    <input type="number" class="form-control" id="point" placeholder="Point/s..." name="point" min="1" oninput="this.value = 
 !!this.value && Math.abs(this.value) > 0 ? Math.abs(this.value) : null" required value="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="add_question">Insert</button>
                    </div>
                    <input type="text" name="csrf" hidden value="<?php echo escape($_SESSION['csrf']); ?>">
                </form>
            </div>
        </div>
    </div>
<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_GET['qid']) && $statement_delete_question):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully deleted this Question',
            'warning'
        ).then(function() {
            window.location = 'manage_quiz?q=<?php echo $_GET['q'];?>&&c=<?php echo $_GET['c'];?>';
        });
    </script>
<?php endif?>

<?php if(isset($_POST['add_question']) && $statement_add_question):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully added Question',
            'success'
        ).then(function() {
            window.location = 'manage_quiz?q=<?php echo $_GET['q'];?>&&c=<?php echo $_GET['c'];?>';
        });
    </script>
<?php endif?>
