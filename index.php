 <!DOCTYPE html>
 <html>
 <head>
 <?php 
    include './bootstrap.html';
    include './navbar.php';
    include './utils/database.php';
 ?>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>

<body data-bs-theme="dark">
    <div class="container">
      <div class="row m-5">
         <div class="col-md-8">
          <h1>Tin tức thịnh thành</h1>
          <div class="row">
            <div class="card m-2" style="width: 18rem;">
              <img src="/files/thumbnail.jpg" class="card-img-left" alt="title">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
              <img src="/files/thumbnail.jpg" class="card-img-left" alt="title">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
              <img src="/files/thumbnail.jpg" class="card-img-left" alt="title">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card m-2" style="width: 18rem;">
              <img src="/files/thumbnail.jpg" class="card-img-left" alt="title">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <nav aria-label="Page navigation example">
          </div>  
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-4">
          <h1>Thông báo</h1>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
     
    </div>
 </body>
 </html>