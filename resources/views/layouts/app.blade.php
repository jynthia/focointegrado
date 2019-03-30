@yield('head')

<body>

    <div class="container-fluid">

            <nav class="navbar navbar-expand-lg">

                <div class="navbar-brand">
                    <img class="img-responsive" id="logo" src="img/foco_preto.png">
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Quem Somos <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/programas">Programas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/contato">Contato</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>

                    </ul>
                </div>
            </nav>

    </div>
<div class="limiter">
    @yield('content')
</div>


    <footer class="footer-distributed">

        <div class="footer-left">

            <img class="img-responsive" src="img/foco_branco.png">

            <p class="footer-links">
                <a href="index.html">Quem Somos</a>
                ·
                <a href="programs.html">Programas</a>
                ·
                <a href="contact.html">Contato</a>
                ·
                <a href="login.html">Login</a>
            </p>

            <p class="footer-company-name">Foco Integrado &copy; 2019</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Rua Miosótis, 1115</span> Teresina, Piauí</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+55 86 998240682</p>
            </div>

            <div>
                <i class="fa fa-instagram"></i>
                <p><a href="https://www.instagram.com/focointegrado/?hl=pt">@focointegrado</a></p>
            </div>

        </div>

        <div class="footer-right">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15896.644323458315!2d-42.793269!3d-5.077627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d1e073188724d3e!2sFoco+Integrado!5e0!3m2!1spt-BR!2sbr!4v1544498184240"></iframe>

        </div>

    </footer>

</body>


</html>