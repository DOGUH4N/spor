<?php
include 'config.php';
if (isset($_REQUEST["submit"])) {
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $amount = $_REQUEST["amount"];
    
    $ins = "INSERT INTO billing (id,name, date,amount) VALUES ('$id','$name','$date','$amount')";
        $query1 = mysqli_query($connection, $ins);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fatura sayfası</title>
<link rel="shortcut icon" href="img/logo.png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<!– nav bar start –>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html"><img src="img/logo.png" height="150px" width="150px" alt="Tuitions Tonight Logo"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="billing.php">Fatura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="coach.php">Koç ekle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="member.php">Üye ol</a>
            </li>
        </ul>
    </div>
</nav>


<!– nav bar ends –>
<!– form start –>


<form>
    <h1>Fatura Sayfası</h1>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Üye ID</label>
            <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Üye ismi</label>
            <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="isim">
        </div>
    </div>

    <div class="form-group">
        <label for="inputAddress">Fatura tarihi</label>
        <input type="text" name="date" class="form-control" id="inputAddress" placeholder="d/m/y">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Fiyat</label>
        <input type="text" name="amount"class="form-control" id="inputAddress2" placeholder="fiyat">
    </div>

    <button type="submit" name= "submit" class="btn btn-primary">kaydet</button>
</form>


<!– form end –>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>