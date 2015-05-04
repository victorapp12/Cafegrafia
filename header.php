<html>

<head>
    <title>Cafegrafia</title>

    <meta charset="utf-8">

    <!-- Use .min in production version -->
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/funcoes.js"></script>



</head>

<body>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="tudo">
        <div id="conteudo">

            <header>
                <a href="#" title="Cafegrafia" id="logo">
                    <img src="assets/img/logo.png" width="379" height="155" alt="Cafegrafia">
                </a>

                <nav class="navbar">

                    <div id="navbar" class="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a>
                            </li>
                            <li><a href="#">About</a>
                            </li>
                            <li><a href="#">Contact</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li id="item-busca">
                                <label>
                                    <input type="text" placeholder="Busca..." class="campos">
                                    <a href="#">
                                        <img src="assets/img/ic-lupa.png" alt="Buscar" width="19" height="16">
                                    </a>
                                </label>
                            </li>
                        </ul>
                    </div>

                </nav>

            </header>
