<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>
<?php include 'server/common.php';?>
<?php include 'user_includes/display_user.php'?>
<?php include 'courses/enroll/add_student.php'?>

    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <form method="POST">
                    <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Add Course Member</h4>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-success" value="Add Member" name="add_member">
                            </div>
                        </div>
                        <hr>
                    </div>
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th>Department</th>
                                <th>Property</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result_list_employee as $row) : ?>
                                <tr>
                                    <td><?php echo strtoupper(escape($row['employee_first_name']) . ' ' . escape($row['employee_last_name'])); ?></td>
                                    <td><?php echo strtoupper(escape($row['department_name']));?></td>
                                    <td><?php echo strtoupper(escape($row['property']));?></td>
                                    <td>
                                        <input class="form-check-input mt-0" type="checkbox" name="select_member[]"  value="<?php echo escape($row['employee_id']);?>">
                                    </td>
                                </tr>
                            <?php endforeach?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Employee Name</th>
                                <th>Department</th>
                                <th>Property</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>

<?php if(isset($_POST['add_member']) && $statement_enroll_student):?>
    <script>
        Swal.fire(
            'Done',
            'You have successfully added student!',
            'success'
        ).then(function() {
            window.location = 'course?c=<?php echo $_GET['c'];?>&&link=people';
        });
    </script>
<?php endif?>