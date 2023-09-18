<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
     <!-- Bootstrap Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
     <!-- Data Tables -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css
">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
     <!-- Own CSS -->
     <link rel="stylesheet" href="css/style.css">
    <title> Tambah | List Data | CRUD PHP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD | List Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
   <!-- Close Navbar -->

 <!-- Container -->
<div class="container">
  <div class="row my-3">
    <div class="col-md">
        <h2><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</h2>
    </div>
    <hr>
  </div>
  <div class="row mb-3">
    <div class="col-md">
        <form action="" method="post">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="number" class="form-control w-50" id="id" name="id" placeholder="ID" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control w-50" id="title" name="title" placeholder="Title" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" class="form-control w-50" id="body" name="body" placeholder="Body" autocomplete="off" required>
        </div>
        <hr>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        
        </form>
    </div>
  </div>
</div>
<!-- Close Container -->

<!-- Footer -->
<div class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-uppercase fw-bold">About</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur corrupti earum ipsam consequatur,maxime
                nostrum repudiandae aspernatur provident ducimus id illo repellat voluptatibus molestias praesentium hic possimus
                dignissimos quam officiis.</p>
        </div>
        <div class="col-md-6 text-center link">
            <h4 class="text-uppercase fw-bold">Links Account</h4>
            <a href="https://web.facebook.com/Dhea/" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
            <a href="https://github.com/DeaPutriAnanda06" target="_blank"><i class="bi bi-github fs-2"></i></a>
            <a href="https://www.instagram.com/iyaaa._____/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
            <a href="https://twitter.com/dhea" target="_blank"><i class="bi bi-twitter fs-2"></i></a>
        </div>
    </div>
    <footer class="text-center style="padding: 5px;">
        <p>Created with <i class="bi bi-suit-heart-fill" style="color: red;"></i> by <u class="fw-bold">Dea Putri Ananda</u></p>
    </footer>
</div>
<!-- Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 
</body>
</html>