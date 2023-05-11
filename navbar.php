<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link btn" aria-current="page" href="/index.php">Trang chủ</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary m-2" aria-current="page" data-bs-toggle="modal" data-bs-target="#search">Tìm kiếm <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary m-2" aria-current="page" href="/post.php" >Đăng bài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary m-2" aria-current="page" href="/about.php" >Về chúng tôi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary m-2" aria-current="page" href="/all.php" >Tất cả bài viết</a>
        </li>
     </ul>
    </div>
  </div>
</nav>


<div class="modal fade" id="search" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tìm kiếm</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body search-container">
        <form class="d-flex" role="search" action="javascript:void(0);">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-input">
        </form>
      </div>
      <div class="container">
        <div id="search-results">
          
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  const searchInput = document.querySelector('#search-input');
  const searchResults = document.querySelector('#search-results');

  searchInput.addEventListener('input', function() {
    const searchTerm = this.value.trim();

    if (searchTerm.length > 0) {
      fetch(`./utils/search.php?q=${searchTerm}`)
        .then(response => response.json())
        .then(data => {
          let resultsHtml = '';

          data.forEach(result => {
            resultsHtml += `<div class="search-result-item"><a href="${result.url}">${result.title}</a></div>`;
          });

          searchResults.innerHTML = resultsHtml;
        });
    } else {
      searchResults.innerHTML = '';
    }
  });
</script>