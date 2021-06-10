<?php 
 $menu = ['Inicio', 'Cursos', 'Mi perfil'];
    $user = [
        'name' => 'Ariel',
        'featured' => 'avatar.png',
        'lastName' => 'Coronel',
        'edad' => 32,
        'username' =>  'ArielC',
        'profession' => 'Enginer Surveyor',
        'intereses' => ['Desarrollo web', 'Diseño gráfico']
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto || Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Primer proyecto de PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach( $menu as $m ): ?>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> <?= $m ?> </a>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class= "col-auto my-4 text-center">
            <h2>Mi perfil</h2>
            <img src="./images/<?= $user[ 'featured'] ?> " class="img-fluid" width="200" alt="Foto de perfil" <?= $user['name'] ?> />
            <p><?= $user[ 'username'] ?></p>
            <p><?= $user[ 'profession'] ?></p>
        </div>
    </div>

</section>
</body>
</html>