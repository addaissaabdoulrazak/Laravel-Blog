<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Mon blog</title>
    <link rel="icon" href="https://www.jsdelivr.com/img/icon_256x256.png">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">

    <!-- other CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome">
                <img src="https://www.jsdelivr.com/img/icon_256x256.png" width="30" height="30" class="d-inline-block align-top" alt=""> Mon blog
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Articles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/articles/java">Java</a></li>
                            <li><a class="dropdown-item" href="/articles/php">PHP</a></li>
                            <li><a class="dropdown-item" href="/articles/cpp">C/C++</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarLang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="flag-icon flag-icon-fr"></span> FR
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLang">
                            <li><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span> FR <i class="fa fa-check px-2" aria-hidden="true"></i></a></li>
                            <li><a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> EN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn btn-outline-primary me-2" href="/login">Connexion</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="btn btn-outline-primary" href="/register">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>