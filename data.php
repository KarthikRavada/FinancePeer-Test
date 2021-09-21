<?php
    include('db.php');
    $dt = $_FILES['fileToUpload']['name'];
    $jsondata = file_get_contents($dt);
    $data = json_decode($jsondata, true);
    foreach($data as $row){
        $userId = $row['userId'];
        $id = $row['id'];
        $title = $row['title'];
        $body = $row['body'];
        mysqli_query($con,"INSERT INTO `json_data`(userId, id, title, body) VALUES ('$userId','$id','$title','$body');");
    }
?>
<html>
    <body>
        <div class="form">
            <a href="dashboard.php">Return</a>
        </div>
    </body>
</html>