<?php include 'templates/dashboard_header.php' ?>
<?php include 'server/encrypt_decrypt_get.php' ?>
<?php include 'server/common.php' ?>
<?php include 'courses/module/module_content_manager/list_module_contents_manager.php' ?>
<?php include 'courses/module/module_content_manager/delete_module_content.php' ?>
<?php
//redirect to home page when user is not admin
if($account_type == 'user'){
    header('Location: /cjh_leisure_elearning');
    exit;
}
?>
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
               <div class="mt-4">
                    <h3>Manage Module Content</h3>
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Module Content Name</th>
                                <th>Module</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result_list_module_contents_manager as $row):?>
                            <tr>
                                <td><?php echo escape($row['module_content_name']);?></td>
                                <td><?php echo escape($row['module_name']);?></td>
                                <td>
                                    <?php
                                       if(escape($row['module_content_status']) == 0){
                                        echo "Published";
                                       }else{
                                        echo "Draft";
                                       }
                                    ?>
                                </td>
                                <td>
                                    <a class="text-danger pe-3" href="manage_module?c=<?php echo $_GET['c']; ?>&&del=<?php echo base64_url_encode(escape($row['module_content_id']));?>&&manage=<?php echo $_GET['manage'];?>">Remove</a>
                                    <a class="text-success" href="module_content?c=<?php echo $_GET['c']; ?>&&content=<?php echo base64_url_encode(escape($row['module_content_id']));?>">Update</a>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Module Content Name</th>
                                <th>Module</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
               </div>
            </div>
        </div>
    </div>
    <!--Container Main end-->

    <script src="js/index.global.js"></script>
<?php include 'templates/dashboard_footer.php' ?>



<!--
<?php if(isset($_POST['del']) && $statement_delete_module_content):?>
  <script>
        Swal.fire(
            'Success!',
            'You have been successfully added a module',
            'success'
        ).then(function() {
                window.location = 'manage_module?c=<?php echo $_GET['c'];?>&&manage=<?php echo $_GET['manage'];?>';
        });
    </script>
<?php endif?>-->

