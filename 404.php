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
 <title>404 không tìm thấy :(</title>

<body data-bs-theme="dark">
  <?php 
    include './bootstrap.html';
    include './navbar.php';
 ?>
    <div class="container">
      <div class="row m-5">
        <h1>404 error :)</h1>
        <script>
          Swal.fire({icon: 'error',title: 'Ôi không!',text: 'Địa chỉ bạn yêu cầu không tồn tại hoặc đã bị xóa!', allowOutsideClick: false}).then((result) => {
          if (result.isConfirmed) {
            window.location = 'index.php';
          }
        })</script>
      </div>
    </div>
 </body>
 <div class="container footer">
   <hr>
   <p class="text-center">Copyright DongKha 2023</p>
 </div>
 </html>