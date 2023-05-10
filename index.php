<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include'./pagesTemplate/dependecias.php';
    ?>
</head>
<body>
<!--Nav-->
<?php
include './pagesTemplate/nav.php';
?>
 <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/fondo.png" class="d-block w-100" alt="..." width="350px" height="550px">
            </div>
            <div class="carousel-item">
                <img src="./images/fondo2.jpeg" class="d-block w-100" alt="..." width="350px" height="550px">
            </div>
            <div class="carousel-item">
                <img src="./images/fondo3.jpg" class="d-block w-100" alt="..." width="350px" height="550px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>
<Section class="mt-5 container-fluid">
        <!--Caracteristicas-->
        <div class="row justify-content-center">
            <h1 class="text-center fw-bold">Hey Hey!!</h1>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-4">
                <img src="#" alt="#">
                <h2 class="fw-bold text-center">Una caracteristica interesante. (Floro)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-4">
                <img src="#" alt="#">
                <h2 class="fw-bold text-center">Una caracteristica interesante. (Floro)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-4">
                <img src="#" alt="#">
                <h2 class="text-center fw-bold">Una caracteristica interesante. (Floro)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-4">
                <img src="#" alt="#">
                <h2 class="fw-bold text-center">Una caracteristica interesante. (Floro)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-4">
                <img src="#" alt="#">
                <h2 class="fw-bold text-center">Una caracteristica interesante. (Floro)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-4">
                <img src="#" alt="#">
                <h2 class="text-center fw-bold">Una caracteristica interesante. (Floro)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <!--Imagen en la parte superior en tres columas-->
        <div class="row justify-content-center">
            <h1 class="text-center fw-bold">Ultimos libros subidos</h1>
            <!--encabezado-->
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-5">
                <img src="images/portada.jpg" alt="portada" width="100%">
                <h2 class="fw-bold text-center">Analisis Matematico 1</h2>
                <p class="text-center"> Autor: Eduardo Espinoza Ramos <br> Asignatura: Matematica </p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-5">
                <img src="images/portada2.jpg" alt="portada2" width="100%">
                <h2 class="fw-bold text-center">Analisis Matematico 2</h2>
                <p class="text-center"> Autor: Eduardo Espinoza Ramos <br> Asignatura: Matematica </p>
            </div>
            <div class="shadow-sm rounded-4 p-4 mt-4 col-3 m-5">
                <img src="images/portada4.jpg" alt="portada4" width="100%">
                <h2 class="text-center fw-bold">Lenguaje y Comunicacion</h2>
                <p class="text-center"> Autor: Patricia Serrano <br> Asignatura: Lenguaje </p>
            </div>
        </div>
        <!--Categorias Preview-->
        <div class="row justify-content-center mt-4 mb-4">
            <div class="col-5 animation">
                <h2>
                    <span>Tenemos...<br></span>
                    <div class="message">
                        <div>Matematicas</div>
                        <div>Fisica</div>
                        <div>1</div>
                    </div>
                    
                </h2>
            </div>
            <div class="col-5 justify-content-center row">
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
                <div class="text-center m-3 col-3 shadow-sm icons-navSize rounded-3 p-2">
                    <i class="bi bi-alarm"></i>
                    <h4>Mate</h4>
                </div>
            </div>
        </div>
        <!--Videos de Uso-->
        <h1 class="text-center">Video Recomendado</h1>
        <video width="640px" height="360px">
            <source type="video/mp4">
            Oi
        </video>
</Section>
<!--Footer-->
<?php
include './pagesTemplate/footer.php';
?>
</body>
</html>