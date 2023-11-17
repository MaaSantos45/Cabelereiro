<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>HOME PAGE || CABELEIREIRO</title>
</head>

<body class="bg-dark  ">
    <?php
    include 'navbar.php';
    ?>

    <div class="text-center bg-danger border border-dark p-1 ">
        <div><span class="text-light fw-bold  fs-4 ">Brilhe neste fim de ano com nossa promoção exclusiva para novos clientes - <a href="servicos.php" class="fw-bold">Agende já</a> e transforme sua beleza! </span></div>
    </div>

    <div class="text-center mt-3 container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active col">
                    <img src="https://blog.archtrends.com/wp-content/uploads/2022/07/decoracaodesalaodebelezamoveis-700x467.jpeg" style='width: 70rem;height: 35rem;' alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://corsicastudio.com.br/wp-content/uploads/2019/09/sal%C3%A3o-de-beleza-no-Panamby-manicure-1220x660.jpg" style='width: 70rem;height: 35rem;' alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.gettyimages.com/id/1410142646/pt/foto/customer-enjoying-cup-of-coffee-at-hairdressers.jpg?s=612x612&w=0&k=20&c=ELgsB7WnNWBcMxaes_S-qLbpy_vzFktWS-DQ8QQkKew=" style='width: 70rem;height: 35rem;' alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.gettyimages.com/id/1410142646/pt/foto/customer-enjoying-cup-of-coffee-at-hairdressers.jpg?s=612x612&w=0&k=20&c=ELgsB7WnNWBcMxaes_S-qLbpy_vzFktWS-DQ8QQkKew=" style='width: 70rem;height: 35rem;' alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.gettyimages.com/id/1410142646/pt/foto/customer-enjoying-cup-of-coffee-at-hairdressers.jpg?s=612x612&w=0&k=20&c=ELgsB7WnNWBcMxaes_S-qLbpy_vzFktWS-DQ8QQkKew=" style='width: 70rem;height: 35rem;' alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.gettyimages.com/id/1410142646/pt/foto/customer-enjoying-cup-of-coffee-at-hairdressers.jpg?s=612x612&w=0&k=20&c=ELgsB7WnNWBcMxaes_S-qLbpy_vzFktWS-DQ8QQkKew=" style='width: 70rem;height: 35rem;' alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://media.gettyimages.com/id/1410142646/pt/foto/customer-enjoying-cup-of-coffee-at-hairdressers.jpg?s=612x612&w=0&k=20&c=ELgsB7WnNWBcMxaes_S-qLbpy_vzFktWS-DQ8QQkKew=" style='width: 70rem;height: 35rem;' alt="...">
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>