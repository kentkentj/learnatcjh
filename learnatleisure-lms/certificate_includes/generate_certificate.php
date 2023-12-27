<?php 
if(isset($_POST['finish'])){
    try{
        require "server/config_main.php";
        $connection=new PDO($dsn, $username, $password, $options);
    
        $course_id = base64_url_decode($_GET['c']);
        $sql="SELECT * FROM tbl_certificate WHERE course_id = :course_id AND user_id = :user_id";
    
        $statement_determine_certificate = $connection->prepare($sql);
        $statement_determine_certificate ->bindValue(':course_id', $course_id);
        $statement_determine_certificate ->bindValue(':user_id', $employee_id);
        $statement_determine_certificate ->execute();
        
    
        if($statement_determine_certificate->rowCount() <= 0){
            $certificate = array(
                "certificate_id" => uniqid(),
                "certificate_date" => date('Y-m-d'),
                "course_id" => $course_id,
                "user_id" => $employee_id,
                "department_id" => $department_id
            );
            $sql_certificate = sprintf(
                    "INSERT INTO %s (%s) values (%s)",
                    "tbl_certificate",
                    implode(", ", array_keys($certificate)),
                    ":" . implode(", :", array_keys($certificate))
            );
            
            $statement_generate_cert = $connection->prepare($sql_certificate);
            $statement_generate_cert->execute($certificate);

            if($statement_generate_cert){
                header('Location: certificates');
                exit;
            }
        }
    } catch(PDOException $error){
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>