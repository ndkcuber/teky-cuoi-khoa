 <!DOCTYPE html>
 <html>
 <head>
 
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>

<body data-bs-theme="dark">
  <?php 
    include './bootstrap.html';
    include './navbar.php';
    include './utils/database.php';
 ?>
    <div class="container">
      <div class="row m-5">
         <div class="col-md-8">
          <h1>Tin tức thịnh thành</h1>
          <div class="row">
            <?php 
                $sql = "SELECT * FROM data WHERE 1 LIMIT 4";
                $result = $db_connect->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  for ($x = 0; $x < 4; $x += 1){
                      $row = $result->fetch_assoc();
                      echo "<div class=\"card m-2\" style=\"width: 18rem;\"><img src=\"/files/thumbnail.jpg\" class=\"card-img-left\" alt=\"title\"><div class=\"card-body\"><a class=\"card-text\" href=\"/read.php?id=".$row['id']."\">".$row['title']."</a></div></div>";
                    }
                } else {
                  echo "0 results";
                }
             ?>

            <nav aria-label="Page navigation example">
          </div>  
        </div>
        <div class="col-md-4">
          <h1>Thông báo</h1>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
     
    </div>
 </body>
 </html>