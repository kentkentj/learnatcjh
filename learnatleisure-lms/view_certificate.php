<?php
include 'certificate_includes/get_certificate.php';
header('content-type:image/jpeg');
$font="assets/certificate_templates/AGENCYR.TTF";
$image=imagecreatefromjpeg("assets/certificate_templates/".$certificate_filename);
$color=imagecolorallocate($image,19,21,22);


$course=strtoupper($course_name);
imagettftext($image,20,0,265,300,$color,$font,$course);

$name=strtoupper($full_name);
imagettftext($image,50,0,355,450,$color,$font,$name);

$date=date("F d, Y", strtotime($date_created));
imagettftext($image,20,0,230,525,$color,"assets/certificate_templates/AGENCYR.TTF",$date);

imagejpeg($image);
imagedestroy($image);
?>