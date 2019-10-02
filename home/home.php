<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Daily Report IT Departmen</title>
</head>

<body>
<header>
<img class="logo" src="picture/logo.jpg" alt="logo">
<h3 style="text-align:center; font-family:Century Gothic; color=#545456";>DAILY REPORT IT DEPARTMEN</h3>
</header>

<nav class="navbar navbar-expand-sm" id="navbar-style">
    <ul class="navbar-nav">
        <li class="nav-item">
            <div class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle mainmenubtn" data-toggle="dropdown">Search by</button>
<div class="dropdown-menu">
    <a class="dropdown-item" href="../keyword1.php">Date</a>
    <a class="dropdown-item" href="../location.php">Location</a>
</div>
</div>
</li>
<li class="nav-item">
    <form action="keyword.php" class="search form-inline" method="POST">
        <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
        <button type="submit" class="btn btn-default"
        name="search">Search</button>
</form>
</li>
<li class="nav-item">
    <ul class="right">
        <form action="input.html">
        <button type="submit" class="input btn btn-deault">Input</button>
        </ul>
        </form>
        </li>
        <li class="nav-item">
        <form class="logout" action="logout.php">
        <button type="submit" class="save btn-default">Logout</button>
        </form>
        </li>
        </ul>
        </nav>

        <div class="container">
        <br>
        <br>
        <form class="edit" action="edit.php">
        <button type="submit" class="btn btn-default">Edit</button>
        </form>
        <form class="save" action="pdf.php">
        <button type="submit" class="btn btn-default">Save PDF</button>
        </form>
        <table width="800px" class="table table-bordered">
        <thead>
        <tr>
        <th width="100px">Date</th>
        <th width="300px">Description</th>
        <th width="200px">Location</th>
        <th width="200px">Condition</th>
        </tr>
        <?php
        $host = "localhost";
        $user = "root"; //nama user phpmyadmin
        $password = ""; //password phphmyadmin
        $database = "user"; //nama database
        $connect = mysqli_connect($host, $user, $password, $database);
        $data=mysqli_query($connect, "SELECT * from report");

        while($hasil=mysqli_fetch_array($data)){
            echo "<tr>
            <td>$hasil[tgl]</td>
            <td>$hasil[description]</td>
            <td>$hasil[location]</td>
            <td>$hasil[kondisi]</td>
            </tr>";
        }
        ?>
        </table>
</body>
</html>