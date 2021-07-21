<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/icons/util-area.png">
    <title>Sua Imobiliáira</title>

    <link rel="stylesheet" href="cdn/css/bootstrap_custom.css">
    <link rel="stylesheet" href="cdn/css/app.css">
</head>

<body>

    <header class="main_header">

        <div class="header_bar bg-front">

            <div class="conteiner">
                <div class="row justify-content-around">
                    <div class="d-none d-lg-flex col-lg-4 justify-content-center align-items-center p-2 text-white">
                    <i class="icon-location-arrow"></i>
                        <p class="my-auto mx-3">Imbassai, 0 <br /> Mata de São João-BA</p>
                    </div>

                    <div class="d-none d-md-flex col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                        <i class="icon-clock-o"></i>
                        <p class="my-auto mx-3">Seg/Sex 09:00h - 18:00h<br />Sáb/Dom Plantão</p>
                    </div>

                    <div class="d-flex col-4 col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                        <i class="icon-envelope"></i>
                        <p class="my-auto mx-3">joelscatarino@outlook.com<br />+55 (71)99738-5375</p>
                    </div>
                </div>
            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light my-3">

            <div class="container">

                <div class="navbar-brand">
                    <a href="index.php">
                        <img class="d-inline-block" width="280" src="assets/images/logo.png">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php?app=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link active text-front" aria-current="page" href="index.php?app=property">Spotlight</a></li>
                        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="index.php?app=contato">Rent</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php?app=filtro">Buy</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php?app=contato">Contact</a></li>
                    </ul>
                </div>

            </div>

        </nav>

    </header>

    <?php
    $getApp = filter_input(INPUT_GET, 'app', FILTER_SANITIZE_STRIPPED);

    if (empty($getApp)) {
        require 'widget/home.php';
    } elseif (!empty($getApp) && file_exists('widget/' . $getApp . '.php')) {
        require 'widget/' . $getApp . '.php';
    } else {
        echo "Oooops, erro no app informado!";
    }
    ?>

    <article class="main_optin bg-dark text-white py-5">
        <div class="container">
            <div class="row mx-auto" style="max-width: 600px;">
                <h1 class="bceta mb-3">Want to stay on top of the news?</h1>

                <p>Leave your best e-mail in the fields below and we will inform you about the best deals and all the launches in the south of the island</p>

                <form action="">
                    <input type="text" class="form-control" placeholder="Digite seu nome" size="50">
                    <input type="email" class="form-control" placeholder="Digite seu e-mail" size="50">
                    <button type="submit" class="btn btn-front">Me avise!</button>
                </form>
            </div>
        </div>
    </article>

    <section class="main_footer bg-light" style="background: url(assets/images/footer.png) repeat-x bottom center; background-size: 10%">
        <div class="container pt-5" style="padding-bottom: 120px;">
            <div class="row justify-content-around text-muted">
                
                <div class="col-12 col-md-3 col-lg-3">
                    <h1 class="pb-2">Browse <span class="text-front">Here</span></h1>
                    <ul>
                        <li><a href="">home</a></li>
                        <li><a href="" class="text-front">Spotlight</a></li>
                        <li><a href="">Rent</a></li>
                        <li><a href="">Buy</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-9 col-lg-6">
                    <h1 class="pd2">Meet <span class="text-front">Us! </span></h1>
                    <p>Our greatest satisfaction is to help you find your dream property in the southern neighborhoods of Ilha da Mariga, in Florianópolis.</p>

                    <h1 class="pb-2">Do you Want to <span class="text-front">See?</span></h1>
                    <p>Get in touch with our team and we will always inform you about the best deals</p>
                </div>

                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <button class="btn btn-front icon-facebook icon-notext"></button>
                    <button class="btn btn-front icon-twitter icon-notext"></button>
                    <button class="btn btn-front icon-instagram icon-notext"></button>
                </div>

            </div>
        </div>
    </section>

    <div class="main_copyright py-3 bg-front text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <p class="mb-0">Imobiliária | CRECI 1234 | Av. Pequeno Principe, 0 Campeche - Florianópolis/SC</p>
                <p class="mb-0">All Rights Reserved - Up Inside Treinamentos @</p>
                </div>
            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js"></script>
</body>

</html>