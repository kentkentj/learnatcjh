<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'departments_inlcudes/get_department.php'?>

<?php include 'myperformace_includes/getEmployeeRankFile.php' //get list employees in rank/file?>
<?php include 'myperformace_includes/getEmployeeSupervisor.php' //get list employees in supervisor?>

    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="mt-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4>Evaluate Employee</h4>
                        </div>
                        <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                            <div>
                                <!--<a href="#" type="button" class="btn btn-success">Manage</a> 
                                <a href="evaluate" type="button" class="btn btn-success">Evaluate</a>-->
                                <div class="dropdown">
                                    <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Employee type to Evaluate
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="evaluate?emp=Managers/Assistant Managers">Managers / Assistant Managers</a></li>
                                        <li><a class="dropdown-item" href="evaluate?emp=Supervisor">Supervisor</a></li>
                                        <li><a class="dropdown-item" href="evaluate?emp=Rank/File">Rank and File</a></li>
                                    </ul>
                                </div> 
                            </div>
                        <?php endif?>
                    </div>
                    <hr>
                </div>
                
                <form method="POST">
                    <?php if($_GET['emp'] == 'Rank/File'):?>
                        <!--Rank/File-->
                        <?php include 'myperformace_includes/rank_file.php'?>
                        <!--end Rank/File-->
                    <?php endif?>
                    <?php if($_GET['emp'] == 'Supervisor'):?>
                        <!--supervisor-->
                        <?php include 'myperformace_includes/supervisor.php'?>
                        <!--end supervisor-->
                    <?php endif?>
                    <?php if($_GET['emp'] == 'Managers/Assistant Managers'):?>
                        <!--Manager/AssistManager-->
                        <?php include 'myperformace_includes/manager_assistantmanager.php'?>
                        <!--end Manager/AssistManager-->
                    <?php endif?>
                    <!--Button-->
                    <div class="d-flex justify-content-between mt-3">
                        <div></div>
                        <div>
                            <input class="btn btn-success" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>