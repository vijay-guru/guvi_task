<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <label>Email:</label><br/>
        <input class="form-control" type="text" name="username"></input><br/>
        <label>Username:</label><br/>
        <input class="form-control" type="text" name="username"></input><br/>
        <label>Password:</label><br/>
        <input class="form-control" type="password" name="username"></input><br/>
        <button class="btn btn-primary">Update</button><br/>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>