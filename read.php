 <?php 
 include './utils/database.php';
    if (isset($_GET['id'])) {
      $id = $_GET['id']; 
      $sql = "SELECT * FROM data WHERE id='".$id."'";
                $result = $db_connect->query($sql);
                if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                }
    }
 ?>

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
 ?>
    <div class="container">
      <div class="row m-5">
         <div class="col-md-8">
          <h1 class="py-3 fw-bold h1" style="color: var(--bs-warning-text-emphasis)"><?php echo $row['title']; ?></h1>
          <div class="row">
            <h5><?php echo $row['content']; ?></h5>
            <div class="container m-4">
              <h5 style="color: grey;">Bài viết được viết bởi: <span style="color: salmon;"><?php echo $row['author']; ?></span></h5>
            </div>
            <nav aria-label="Page navigation example">
          </div>  
        </div>
        <div class="col-md-4">
          <h1 class="py-3 fw-bold h1" style="color: var(--bs-primary-text-emphasis)">Các bài viết mới liên quan</h1>
          <?php 
                $sql = "SELECT * FROM data WHERE 1";
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
        </div>
      </div>
     
    </div>
 </body>
 <div class="container footer">
   <hr>
   <p class="text-center">Copyright DongKha 2023</p>
 </div>
 </html>