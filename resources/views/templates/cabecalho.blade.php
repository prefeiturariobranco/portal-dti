<section id="header">
    <div class="container d-flex">

        <div class="mr-auto">
            <a href={{'/'}}><img src="{{ URL::asset('assets/img/Logo-DTI.png') }}" width="280" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{'/'}}">Início</a></li>
                <li><a href="{{'/novidades'}}">Novidades</a></li>
                <li><a href="{{'/tutoriais'}}">Tutoriais</a></li>
                <li><a href="{{'/contatos'}}">Contatos</a></li>
                <li class="drop-down"><a href="">Mais</a>
                    <ul>
                        <li><a href="https://webmail.riobranco.ac.gov.br">E-mail Institucional</a></li>
                        <li class="drop-down"><a href="#">Portais</a>
                            <ul>
                                <li><a href="http://portalcidadao.riobranco.ac.gov.br/todos-servicos/">Cidadão</a></li>
                                <li><a href="http://transparencia.riobranco.ac.gov.br">Transparência</a></li>
                            </ul>
                        <li><a href="http://ponto.riobranco.ac.gov.br/">Ponto Eletrônico</a></li>

                        </li>
                    </ul>
                </li>
                <li><a href="{{'/login'}}">Intranet</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</section><!-- End Header -->
