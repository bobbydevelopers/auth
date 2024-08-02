<link rel="stylesheet" href="css/style.css">

<?php
include('db.php');

if (isset($_REQUEST['submit'])) {
    // Checking Valiation on empty fields
    if (($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['password'] == "")) {
        $msg =  "All Fields Are Required";
    } else {
        // Checking Already registered 
        $sql_email = "SELECT r_email FROM requester_tb WHERE r_email = '" . $_REQUEST['email'] . "'";
        $data = $conn->query($sql_email);
        if ($data->num_rows == 1) {
            $msg =  "Email is Already Registered";
        }
        // Registering Requester
        else {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO requester_tb (r_name, r_email, r_password) VALUES('$name', '$email', '$hash')";
            $conn->query($sql_insert);
            if ($conn) {
                $msg =  "Account Craeted Succesfully";
            }
        }
    }
}
?>

<div class="container">
    <div class="login">
        <form action="" method="post">
            <div class="row">
                <input type="text" name="name" placeholder="Name">
            </div>

            <div class="row">
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="row">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="row">
                <input type="password" name="confirm-password" placeholder="Confirm Password">
            </div>

            <div class="submit">
                <input type="submit" name="submit" value="SIGN UP">
            </div>

            <div class="row">
                <span id="text-signup">Created ! Login</span>
                <a href="login.php">Log in</a>
            </div>
            <?php if (isset($msg)) {
                echo $msg;
            } ?>
        </form>
    </div>
</div>