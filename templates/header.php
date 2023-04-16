<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestras Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= CSS . 'style.css' ?> ">
    <?php enqueue_script([
        'name' => 'conversor',
        'type' => 'js',
        'uri' => '/conversor'
    ]); ?>
</head>

<body>
    <header class="navbar d-flex flex-row row p-3">
        <div class="icon-site col-sm-12 col-md-2 container">
            <img width="75" src="<?= IMAGES . 'logo-calamo-azul.png' ?>" alt="Logo del sitio" class="logo img-fluid">
        </div>
        <div class="title col container col-sm-12 col-md-4">
            <span class="fs-4">MUESTRAS DE FRONTEND</span>
        </div>
        <nav class="menu col col-sm-12 col-md-4">
            <ul>
                <li><a href="/conversor">Conversor</a></li>
            </ul>
        </nav>
        <div class="container-iconos container col-sm-12 col-md-2">

        </div>
    </header>