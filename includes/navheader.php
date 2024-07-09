<?php
include ("connection.php");

session_start();
if (isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header("location: index.php");
}
?>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<div class="nav-div">
    <div class="navbar">
        <img src="img/logo.png" alt="logo" class="logo">
        <nav>
            <ul>
                <li class="align-li nav-btn" ><a href="home.php" >Home</a></li>
                <li class="align-li nav-btn" ><a href="products.php" >Products</a></li>
                <li class="align-li nav-btn" ><a href="gallery.php" >Gallery</a></li>
                <li class="align-li nav-btn" ><a href="about.php" >About Us</a></li>
                <li class="align-li nav-btn" ><a href="contact.php" >Contact Us</a></li>
                <?php
                if (isset($_SESSION['username'])){
                    $user_id = $_SESSION['username'];
                    $select = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user_id'") or die('query failed');
                    if (mysqli_num_rows($select) > 0){
                        $fetch = mysqli_fetch_assoc($select);

                        if ($fetch['username'] == $user_id){
                            echo ' <li class="align-li nav-item dropdown">
                                      <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="img/user.png" style="width: 40px; height: 40px">
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li class="dropdown-li"><a class="dropdown-item" href="cart.php">Cart</a></li>
                                        <li class="dropdown-li"><a class="dropdown-item" href="home.php?logout=<?php echo $user_id; ?>">Log out</a></li>
                                      </ul>
                                    </li>
                                    ';
                        }
                    }
                } else {
                    echo '<li class="align-li nav-btn"><a href="login.php">Log in</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>

