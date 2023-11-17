<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <title>SOBRE NÓS</title>
</head>

<body class="bg-dark">
    <?php
    include 'navbar.php';
    ?>
    <div class="container ">
        <div class="row mt-2">
            <div class="bg-light rounded-3 col-6 border border-warning"><p class="fs-5  mt-4" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim et quis minima explicabo qui, earum unde, nobis rem molestias illo dolorum perspiciatis ea officiis dolor praesentium eius est minus! Dicta excepturi qui molestias iure alias, voluptatem omnis quisquam fugiat unde voluptatibus placeat quia laudantium eligendi necessitatibus facere quo harum inventore.</p></div>
            <img src="https://media.gettyimages.com/id/1389908515/pt/foto/modern-hair-salon-with-no-people.jpg?s=612x612&w=0&k=20&c=5xW6MvRzW9lZ_F9ihiPLYuxxzR7pBp_s_qYkZ97dzFY=" class="col-6 " style="border-radius: 50px;padding: 10px;">
            
        </div>
        <div class="row mt-2">
            <p class="fs-5  text-dark bg-light rounded-3 border border-warning">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium ipsum facilis voluptates eius perspiciatis, expedita labore soluta vitae est quos amet libero. Aperiam sint aspernatur fugit sunt in explicabo itaque, commodi illo asperiores, iste, dolore reprehenderit? Tenetur similique vitae nisi, eum molestias illum molestiae reiciendis aliquid aliquam veritatis possimus fugit consectetur animi soluta debitis facere voluptas libero in nam voluptatum non obcaecati quo! Nisi distinctio necessitatibus, aspernatur sit facere quasi placeat suscipit cupiditate, nesciunt quis blanditiis mollitia consectetur sunt maxime sequi eos repellat velit amet iusto! Quaerat expedita sit libero adipisci sequi! Voluptates totam deserunt ea neque in quisquam omnis!</p>
        </div>
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="..." alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</body>

</html>