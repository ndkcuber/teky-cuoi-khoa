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
          <h1 class="py-3 fw-bold h1" style="color: var(--bs-warning-text-emphasis)">Về chúng tôi</h1>
          <div class="row card mb-4">
            <h3 class="py-3 fw-bold h5" style="color: var(--bs-success-text-emphasis)" >Điều khoản dịch vụ:</h3>
            <p>- Đây là một trang web tin tức được lập bởi Đông Kha siêu đẹp trai</p>
            <br>
            <p>- Mọi thông tin đều có thể được đăng bởi tất cả người dùng, kể cả người xem</p>
            <br>
            <p>- Chia sẻ những thông tin của bạn tại đây</p>
            
          </div> 

          <div class="row card">
            <h3 class="py-3 fw-bold h5" style="color: var(--bs-success-text-emphasis)" >Thống kê:</h3>
            <h3 class="py-3 fw-bold h5" > - Tổng cộng 
              <span style="color: var(--bs-success-text-emphasis)">
                <?php 
                $sql_x = "SELECT COUNT(*) FROM `data`";
                $result_x = $db_connect->query($sql_x);
                $count = mysqli_fetch_row($result_x)[0];
                echo $count;
              ?> 
              </span>
              

              bài viết
             </h3>
            
          </div>  
        </div>
        <div class="col-md-4">
          <h1 class="py-3 fw-bold h1" style="color: var(--bs-primary-text-emphasis)">Xem thêm</h1>
          <?php 
                $sql = "SELECT * FROM `data` ORDER BY id DESC LIMIT 4";
                $result = $db_connect->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()){
                      echo "<div class=\"card m-2\" style=\"width: 18rem;\"><img src=\"/files/thumbnail.jpg\" class=\"card-img-left\" alt=\"title\"><div class=\"card-body\"><a class=\"card-text\" href=\"/read.php?id=".$row['id']."\">".$row['title']."</a></div></div>";
                    }
                } else {
                  echo "0 bài viết";
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