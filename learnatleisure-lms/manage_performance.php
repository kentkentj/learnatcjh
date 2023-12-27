<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>

<?php include 'server/encrypt_decrypt_get.php' ?>


    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="mt-4">
                    <h3>Manage Employee Performance</h3>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-2">
                            <label for="start" class="form-label">Priod Start</label>
                            <input type="date" class="form-control form-control-sm" id="start">
                        </div>
                        <div class="col-sm-2">
                            <label for="end" class="form-label">Priod End</label>
                            <input type="date" class="form-control form-control-sm" id="end">
                        </div>
                        <div class="col-sm-2 mt-4">
                            <input type="submit" class="btn btn-success btn-sm mt-2" value="Proceed">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Period Start</th>
                                        <th>Period End</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Period Start</th>
                                        <th>Period End</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>