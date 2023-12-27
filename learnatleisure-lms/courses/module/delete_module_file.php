<?php

/**
  * Delete a file
  */

require "server/config_main.php";

if (isset($_GET["df"])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $module_file_id = base64_url_decode($_GET["df"]);

    $sql = "DELETE FROM tbl_module_file WHERE module_file_id = :module_file_id";

    $statement_delete = $connection->prepare($sql);
    $statement_delete->bindValue(':module_file_id', $module_file_id);
    $statement_delete->execute();

    if($statement_delete){
        if(isset($_GET['file'])){
            $location = "uploads/pdf/";

            if(file_exists($location)){
                if(unlink($location.$_GET['file'])){
                    header('Location:course?c=' . $_GET['c'] . '&&link=files');
                    exit;
                }
            }
        }
    }
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}

?>