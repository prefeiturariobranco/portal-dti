<section id="header">
    <div class="container d-flex">

        <div class="mr-auto" style="margin-top: -10px">
            <a href={{'/'}}><img src="{{ URL::asset('images/logos/logo-2.png') }}" width="150" alt="" class="img-fluid">|</a>
            <a href={{url('http://riobranco.ac.gov.br/')}}><img src="{{ URL::asset('assets/img/Logo.png') }}" width="160" alt="" class="img-fluid"></a>
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
                                <li><a href="https://portalrbdoc.riobranco.ac.gov.br/">RBDoc</a></li>
                                <li><a href="http://transparencia.riobranco.ac.gov.br/">Transparência</a></li>
                                <li><a href="http://transportes.riobranco.ac.gov.br/">Transporte</a></li>
                                <li><a href="http://turismo.riobranco.ac.gov.br/">Turismo</a></li>
                                <li><a href="https://fgb.riobranco.ac.gov.br/">Cultura</a></li>
                                <li><a href="http://portalcidadao.riobranco.ac.gov.br/todos-servicos/">Cidadão</a></li>
                                <li><a href="http://portaldaescola.riobranco.ac.gov.br/">Escola</a></li>
                                <li><a href="https://saerb.jtech.com.br/">SAERB</a></li>
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
