<?php include('header.php');?>

  <body>
    <ul class="container">
        <li>
        <?php include('sidebar.php');?>

        </li>
        <li>
        <div class="change">
          <div class="form">
            <form method="post">
                <ul>
                    <li>
                        <label for="old-password">PROFILE-PICTURE</label>
                        <input type="file" name="background-image">
                    </li>
                    <li><button type="submit" name="update">UPDATE</button></li>
                </ul>
                
            </form>
          </div>
       </li>
       </ul>    
  </body>
</html>
