<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'departments_inlcudes/get_department.php'?>
<?php include 'courses/get_announcement.php'?>
<?php include 'courses/update_announcement.php'?>

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
                </ul>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="container mt-4">
                    <h3>Announcement</h3>
                    <hr>
                    <form method="post">
                        <?php foreach($result_get_announcement as $row): ?>
                        <div class="form-group mb-2">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Leave a subject text here" name="subject" value="<?php echo escape($row['announcement_name']);?>">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group input-group-md mb-2">
                                <label for="from">From</label>
                                <input type="date" class="form-control" id="from" name="from_date" value="<?php echo escape($row['announcement_from']);?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group input-group-md mb-2">
                                <label for="to">To</label>
                                <input type="date" class="form-control" id="to" name="to_date" value="<?php echo escape($row['announcement_to']);?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mt-2">
                            <textarea class="form-control" placeholder="Leave a description here" id="description" style="height: 100px" name="description_announcement">
                                <?php echo escape($row['announcement_description']);?>
                            </textarea>
                            <label for="description">Description</label>
                        </div>
                        <?php endforeach ?>
                        <div class="mt-3">
                            <input class="btn btn-success" type="submit" value="Edit" name="edit_announcement">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->

    <script src="js/index.global.js"></script>

<?php include 'templates/dashboard_footer.php' ?>
