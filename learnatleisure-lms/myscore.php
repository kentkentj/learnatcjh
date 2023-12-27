<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'courses/quiz/count_score.php'?>

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
            <div class="col-sm-9 col-md-9 col-lg-9 mb-5">
                <div class="mt-4">
                  <h3>My Scores</h3>
                  <hr>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Quiz Name</th>
                            <th scope="col">Score</th>
                            <th scope="col">Out of</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result_count_scores as $row):?>
                            <tr>
                                <th scope="row"><?php echo escape($row['quiz_Name']);?></th>
                                <td><?php echo escape($row['points']);?></td>
                                <td>8</td>
                                <td></td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->

    <script src="js/index.global.js"></script>
<?php include 'templates/dashboard_footer.php' ?>


