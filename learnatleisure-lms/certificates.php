<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>

<?php include 'server/encrypt_decrypt_get.php' ?>
<?php require 'server/common.php'?>
<?php include 'certificate_includes/list_user_certificates.php' ?>

    <!--Container Main start-->
    <div class="height-100">
        <h4 class="pt-5">Certificates of Completion</h4>
        <div class="mt-5"></div>
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Course Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result_list_certificates as $row):?>
                    <tr>
                        <th scope="row"><?php echo escape($row['course_name']);?></th>
                        <td><?php echo escape($row['certificate_date']); ?></td>
                        <td>
                            <a href="view_certificate?crt=<?php echo base64_url_encode(escape($row['certificate_id']));?>" target="_blank">Get Certificate</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
            </div>
            <div class="col-md-3 mb-3">
                 <!--Sidenav-->
            </div>
        </div>

        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>