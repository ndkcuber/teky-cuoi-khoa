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
 
    if (isset($_POST['title'])) {
      $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
      $author = filter_var($_POST['author'], FILTER_SANITIZE_STRING);
      $content = filter_var($_POST['noidung'],FILTER_SANITIZE_STRING);

      $sql = "INSERT INTO `data`(`title`, `content`, `author`) VALUES ('".$title."','".$content."','".$author."')";
      $result = $db_connect->query($sql);
      if ($result) {
      	echo "<script>Swal.fire('Đã đăng bài','Bài viết của bạn đã được đăng','success')</script>";
        $_COOKIE['author'] = $author;
      } else{
        echo "<script>Swal.fire('Thất bại','Có lỗi xảy ra, vui lòng thử lại','error')</script>";
        $_COOKIE['author'] = $author;
      }

    }

 ?>
    <div class="container">
      <div class="row m-5">
         <div class="col-md-8">
          <h1 class="py-3 fw-bold h1" style="color: var(--bs-success-text-emphasis)">Đăng bài viết mới</h1>
          <div class="row">
          	<div class="container">
	            <form id="newpost" method="post">
	            	<div class="mb-2">
	            		<label for="title"></label>
	            		<h3 class="py-3 fw-semibold h3" style="color: var(--bs-info-text-emphasis)">Tựa đề</h3>
	            		<input class="form-control" type="search" placeholder="Tựa đề bài viết" name="title" required>
	            	</div>
	            	<div class="mb-2">
	            		<label for="author"></label>
	            		<h3 class="py-3 fw-semibold h3" style="color: var(--bs-info-text-emphasis)">Tác giả</h3>
	            		<input class="form-control" type="search" placeholder="Tên tác giả" name="author" value="<?php if (isset($_COOKIE['author'])) {
                    echo $_COOKIE['author'];
                  } ?>" required>
	            	</div>
	            	<div class="mb-2">
	            		<label for="noidung"></label>
	            		<h3 class="py-3 fw-semibold h3" style="color: var(--bs-info-text-emphasis)">Nội dung</h3>
	            		<div class="form-floating">
						  <textarea class="form-control" placeholder="Viết nội dung vào đây" id="floatingTextarea2" name="noidung" style="height: 100px" required></textarea>
						  <label for="floatingTextarea2">Nội dung bài viết</label>
						</div>
	            	</div>
	            	<input form="newpost" class="btn btn-primary m-4" type="submit" name="submit" value="Đăng bài viết">
	            </form>
	        </div>
          </div>  
        </div>
        <div class="col-md-4">
          <h1 class="py-3 fw-bold h1" style="color: var(--bs-primary-text-emphasis)">Thông báo</h1>
          Vui lòng đăng bài đàng hoàng :))
        </div>
      </div>
     
    </div>
 </body>
 <div class="container footer">
   <hr>
   <p class="text-center">Copyright DongKha 2023</p>
 </div>
 </html>