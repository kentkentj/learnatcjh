<?php

    include 'server/signin_config.php';
    // We need to use sessions, so you should always start sessions using the below code.
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
   	    header('Location: signin');
   	    exit;   
    } 

    if(isset($_GET['f'])){
        try{
            require "server/config_main.php";
            require "server/common.php";
            include 'server/encrypt_decrypt_get.php';
            $connection=new PDO($dsn, $username, $password, $options);
    
            $sql="SELECT module_file_id,module_file_name FROM tbl_module_file WHERE module_file_id = :module_file_id";
    

            $statement_list_file = $connection->prepare($sql);
            $statement_list_file->bindValue(':module_file_id', base64_url_decode($_GET['f']));
            $statement_list_file->execute();
            $result_list_file = $statement_list_file->fetchAll();
            
            $module_file_name = "";
            foreach($result_list_file as $row){
                $module_file_name = escape($row['module_file_name']);
            }
        } catch(PDOException $error){
            //echo $sql . "<br>" . $error->getMessage();
            header('Location: errors/404');
        }
    }
    
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $module_file_name;?></title>
<link href="//vjs.zencdn.net/8.3.0/video-js.min.css" rel="stylesheet">
<script src="//vjs.zencdn.net/8.3.0/video.min.js"></script>

<!-- unpkg : use the latest version of Video.js -->
<link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
<script src="https://unpkg.com/video.js/dist/video.min.js"></script>

<!-- unpkg : use a specific version of Video.js (change the version numbers as necessary) -->
<link href="https://unpkg.com/video.js@8.3.0/dist/video-js.min.css" rel="stylesheet">
<script src="https://unpkg.com/video.js@8.3.0/dist/video.min.js"></script>

<!-- cdnjs : use a specific version of Video.js (change the version numbers as necessary) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.3.0/video-js.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.3.0/video.min.js"></script>

<script>window.HELP_IMPROVE_VIDEOJS = false;</script>

<style>
    body{
        margin:0px;
    }
</style>
</head>
<body>

<video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="//vjs.zencdn.net/v/oceans.png"
    controlsList="nodownload"
    oncontextmenu="return false;"
    data-setup='{}'
    style="width:100%;height:99.5vh;">
  <source src="uploads/pdf/<?php echo $module_file_name;?>" type="video/mp4"></source>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>

<script>
var options = {};

var player = videojs('my-player', options, function onPlayerReady() {
  videojs.log('Your player is ready!');

  // In this context, `this` is the player that was created by Video.js.
  this.play();

  // How about an event listener?
  this.on('ended', function() {
    videojs.log('Awww...over so soon?!');
  });
});
</script>
</body>
</html>