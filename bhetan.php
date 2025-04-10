<?php

if($_SERVER['REQUEST_METHOD']== "POST"){
    include "config.php";

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $father = mysqli_real_escape_string($con, $_POST['father']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $choose = mysqli_real_escape_string($con, $_POST['choose']);

    $image = NULL;
    if($_FILES['image']['size']>0){
        $folder = "bhetanImgFolder/";
        $image_name = basename($_FILES['image']['name']);
        $file = $folder.time()."_".$image_name;

        if(move_uploaded_file($_FILES['image']['tmp_name'],$file)){
            $image = $file;
        }
    }

    $sql = "INSERT INTO bhetan(name, father, address, email, phone, choose, image) VALUES('$name','$father','$address','$email','$phone','$choose','$image')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<script>alert('DONE!');</script>";
    }
    else{
        echo "<script>alert('Query Failed!');</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="pa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daswandh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>
<body>

<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i> <!-- Menu icon -->
        <div class="logo"><a href="#">Logo</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">Logo</span>
                <i class='bx bx-x'></i> <!-- Close icon -->
            </div>
            <ul class="links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="daswandh.html">ਦਸਵੰਧ</a></li>
                <li>
                    <a href="deg.html">ਦੇਗ</a>
                </li>
                <li>
                    <a href="#">ਅੰਮ੍ਰਿਤ ਸੰਚਾਰ</a>
                    <i class='bx bxs-chevron-down js-arrow arrow'></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="#">Booking</a></li>
                        <li><a href="#">Certificate</a></li>
                    </ul>
                </li>
                <li><a href="bhetan.html">ਭੇਟਾ</a></li>
                <li><a href="nitnem.html">ਨਿਤਨੇਮ</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-primary">Login</button>

    </div>
</nav>


<section class="daswandh">
    <div class="container-daswandh">
        <h2 class="text-center">Bhetan</h2>
        <div class="section-wrapper">
            <div class="form-container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="father-name" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="father-name" name="father" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="options" class="form-label">Options:</label>
                        <select id="options" class="form-control" name="choose">
                            <option>--select--</option>
                            <option value="amount">Amount</option>
                            <option value="transport">Vehicle/Transport</option>
                            <option value="land">Land</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Image That You Want To Donate</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
            <div class="qr-container">
                <h4>Scan QR to Donate</h4>
                <img src="qr-image.jpg" alt="QR Code for Payment">
            </div>
        </div>
    </div>
</section>
</body>
</html>
