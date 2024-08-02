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
                        <label for="old-password">OLD PASSWORD</label>
                        <input type="text" name="old-password" value="old-password">
                    </li>
                    <li>
                        <label for="old-password">NEW PASSWORD</label>
                        <input type="" name="password" value="new-password">
                    </li>
                    <li><button type="submit" name="update">UPDATE</button></li>
                </ul>
                
            </form>
          </div>
       </li>
       </ul>    
  </body>
</html>
