<link rel="stylesheet" href="css/style.css">

<?php
include('db.php');
if (!isset($_SESSION['email'])) {
    if (isset($_REQUEST['submit'])) {
        // Checking Valiation on empty fields
        if (($_REQUEST['email'] == "") || ($_REQUEST['password'] == "")) {
            $msg =  "All Fields Are Required";
        } else {
            // Checking Password and Email Correct 
            $email = trim($_REQUEST['email']);
            $password = trim($_REQUEST['password']);
            $sql_match = "SELECT * FROM requester_tb 
             WHERE r_email = '" . $_REQUEST['email'] . "' limit 1";
             $data = $conn->query($sql_match);
            $row =  mysqli_fetch_assoc($data);
            $db_password = $row['r_password'];
            if (password_verify($password, $db_password)) {
                session_start();
                $_SESSION['email'] = $email;
                echo "<script>location.href='profile/dashboard.php';</script>";
            } else {
                $msg = "Email or Password is Incorrect";
            }
        }
    }
}

?>

<div class="container">
    <div class="login">
        <form action="" method="post">

            <div class="row">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="row">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="submit">
                <input type="submit" name="submit" value="Login">
            </div>

            <div class="row">
                <span id="text-signup">Not Have Account </span>
                <a href="signup.php">Sign up</a>
            </div>
            <?php if (isset($msg)) {
                echo $msg;
            } ?>
        </form>
    </div>
</div>