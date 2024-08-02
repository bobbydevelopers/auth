<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/favico/site.webmanifest" />
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <title>Admin Panel</title>
  </head>
  <body>
    <ul class="container">
        <li>
          <div class="sidebar">
             <ul>
             <li><div class="row"><a href="home.php">Home</a></div></li>
             <li><div class="row"><a href="profile.php">Profile</a> </div></li>
             <li><div class="row"><a href="change.php">Change Password</a> </div></li>
             <li><div class="row"><a href="setting.php">Setting</a></div></li>
             <li><div class="row"><a href="#">Logout</a></div></li>
            </ul>
          </div>
        </li>
        <li>
        <div class="home">
            <ul class="data-box">
                <li><div class="box-1"></div></li>
                <li><div class="box-2"></div></li>
                <li><div class="box-3"></div></li>
            </ul>
            <hr color="black">
            <h3>Added Users</h3>
            <div class="user-data">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>   
                    </tr>
                </table>
            </div>
        </div>
       </li>
       </ul>    
  </body>
</html>
