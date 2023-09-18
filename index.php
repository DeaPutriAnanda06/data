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
    <title>List Data | CRUD PHP</title>
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
        <h2 class="text-uppercase text-center fw-bold">List Data</h2>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-md">
        <a href="tambah.php" class="btn btn-primary"><i class="bi bi-person-plus"></i>&nbsp;Tambah Data</a>
        <a href="#" class="btn btn-success ms-1" target="_blank"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;
        Expor ke Excel</a>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
<tr>
        <td>1</td>
        <td>sunt aut facere repellat provident occaecati excepturi optio reprehenderit</td>
        <td>quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto</td>
</tr>
<tr>
        <td>2</td>
        <td>qui est esse</td>
        <td>est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla</td>
</tr>
<tr>
        <td>3</td>
        <td>ea molestias quasi exercitationem repellat qui ipsa sit aut</td>
        <td>et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut</td>
</tr>
<tr>
        <td>4</td>
        <td>eum et est occaecati</td>
        <td>ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit</td>
</tr>
<tr>
        <td>5</td>
        <td>nesciunt quas odio</td>
        <td>repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque</td>
</tr>
<tr>
        <td>6</td>
        <td>dolorem eum magni eos aperiam quia</td>
        <td>ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae</td>
</tr>
<tr>
        <td>7</td>
        <td>magnam facilis autem</td>
        <td>dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas</td>
</tr>
<tr>
        <td>8</td>
        <td>dolorem dolore est ipsam</td>
        <td>dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae</td>
</tr>
<tr>
        <td>9</td>
        <td>nesciunt iure omnis dolorem tempora et accusantium</td>
        <td>consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas</td>
</tr>
<tr>
        <td>10</td>
        <td>optio molestias id quia eum</td>
        <td>quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error</td>
</tr>
           </tbody>
         </table>
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

 <!-- Data Tables -->
 <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

 <script>
 new DataTable('#example');
 </script>
</body>
</html>