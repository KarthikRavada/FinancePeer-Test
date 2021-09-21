<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <form class="form" action="data.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload" name="submit">
        </form>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <div class="form">
        <form class="form" action="result.php">
            <input type="submit" value="Result" name="Database">
        </form>
    </div>
</body>
</html>
