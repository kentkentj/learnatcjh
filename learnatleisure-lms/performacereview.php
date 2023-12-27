<?php include 'templates/dashboard_header.php' ?>
<?php include 'templates/navbar.php' ?>

<?php include 'server/encrypt_decrypt_get.php' ?>


    <!--Container Main start-->
    <div class="height-100">
        <div class="row mt-5">
            <div class="col-md-8 mb-3">
                <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Performance Review</h4>
                            </div>
                            <?php if(($account_type == 'administrator') || ($account_type == 'instructor')): ?>
                            <div>
                                <a href="manage_performance" type="button" class="btn btn-success">Manage</a> 
                                <a href="evaluate?emp=Rank/File" type="button" class="btn btn-success">Evaluate</a> 
                            </div>
                            <?php endif?>
                        </div>
                        <hr>
                        <canvas id="myChart" style="width:100%;max-width:100%"></canvas>

                        <script>
                            const xValues = ["Job knowledge", "Quality of Work/Quality of Work", "Dependability and Reliability", "Human Relations and Teamwork", "Compliance to Policies, Rules and Regulations/Punctuality and Attendance"];
                            const yValues = [5, 4, 3, 4, 5];
                            const barColors = [
                                "#b91d47",
                                "#00aba9",
                                "#2b5797",
                                "#e8c3b9",
                                "#1e7145"
                            ];

                            new Chart("myChart", {
                                type: "pie",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                    }]
                                },
                                options: {
                                    title: {
                                    display: true,
                                    text: "My Performance"
                                    }
                                }
                            });
                        </script>
                </div>
            </div>
        </div>
        <!--Website Footer Style Here-->
        <?php include 'templates/footer_style.php'?>
    </div>
    <!--Container Main end-->
<?php include 'templates/dashboard_footer.php' ?>