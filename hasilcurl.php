<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Voting</title>
</head>
<body>
<h3>Selamat Datang di Dashboard</h3>
<?php echo $_SESSION['foto']; ?><br> 
<?php echo $_SESSION['npm']; ?><br>
<?php echo $_SESSION['email']; ?><br>
<?php echo $_SESSION['angkatan']; ?><br>

</body>
</html>