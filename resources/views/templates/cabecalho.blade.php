<section id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <a href={{'/'}}><img src={{ URL::asset('assets/img/logo.png') }} alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{'/'}}">Inicio</a></li>
                <li><a href="{{'/novidades'}}">Novidades</a></li>
                <li><a href="{{'/tutoriais'}}">Tutoriais</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li class="drop-down"><a href="">Mais</a>
                    <ul>
                        <li><a href="#">E-mail Intitucional</a></li>
                        <li class="drop-down"><a href="#">Portais</a>
                            <ul>
                                <li><a href="#">Cidadão</a></li>
                                <li><a href="#">Transparencia</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{'/login'}}">Intranet</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</section><!-- End Header -->
