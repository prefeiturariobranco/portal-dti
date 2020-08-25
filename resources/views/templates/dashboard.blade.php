<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <meta content="Painel Administrativo" name="description" />
    <meta content="DTI - Sistemas" name="author" />
    <link rel="stylesheet" href="/css/dashboard.css">
    @yield('css')
</head>
<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- TO BAR START-->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/painel" class="logo">
                    <span>
                        <img src="/images/logo-portal-branca.png" style="width: 8em;">
                    </span>
                    <i>
                        <img src="/images/logo-sm.png" alt="" height="22">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <!-- <li class="dropdown notification-list d-none d-md-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Pesquisar..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li> -->


                    <!-- full screen -->
                    <li class="dropdown notification-list d-none d-md-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-fullscreen noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (258)
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                    </p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/storage/usuarios/{{\Illuminate\Support\Facades\Session::get('usuario')->imagem}}" alt="Minha Conta" class="rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <a class="dropdown-item" href="/painel/perfil"><i class="mdi mdi-account-circle m-r-5"></i>Minha Conta</a>
                                <a class="dropdown-item" href="/painel/senha"><i class="mdi mdi-textbox-password m-r-5"></i>Alterar
                                    Senha</a>

                                <a class="dropdown-item text-danger" href="/painel/sair"><i class="mdi mdi-power text-danger"></i> Sair</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="/painel" class="waves-effect">
                                <i class="fas fa-home"></i>
                                <span> Início </span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="/painel/relatorios" class="waves-effect">
                                <i class="fas fa-file-contract"></i>
                                <span>Relatórios</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="/painel/informacoes/historia" class="waves-effect">
                                <i class="far fa-hourglass"></i>
                                <span>Linha do Tempo DTI</span>
                            </a>
                        </li>
                        <li>
                            <a href="/painel/informacoes/equipe-dti" class="waves-effect">
                                <i class="fas fa-users"></i>
                                <span>Equipe DTI</span>
                            </a>
                        </li>
                        <li>
                            <a href="/painel/noticias">
                                <i class="far fa-id-card"></i>
                                <span>Noticias</span>
                            </a>
                        </li>


                        <li>
                            <a href="/painel/informacoes/planejamento" class="waves-effect">
                                <i class="far fa-calendar-alt"></i>
                                <span>Planejamento</span>
                            </a>
                        </li>

                        <li>
                            <a href="/painel/documentos" class="waves-effect">
                                <i class="fas fa-file-contract"></i>
                                <span>Documentos </span>
                            </a>
                        </li>

                        <li>
                            <a href="/painel/mapa/1" class="waves-effect">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>Mapas</span>
                            </a>
                        </li>


                        <li>
                            <a href="javascript:void(0);" class="waves-effect">
                                <i class="fas fa-cog"></i>
                                <span>Configurações
                                    <span class="float-right menu-arrow">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </span>
                                </span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="/painel/usuarios/listar" class="waves-effect">
                                        <i class="fas fa-users"></i>
                                        <span>Usuários</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/categorias">
                                        <i class="far fa-window-maximize"></i>
                                        <span>Categorias</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/icones">
                                        <i class="fas fa-icons">
                                        </i>
                                        <span>Ícones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/subicones">
                                        <i class="fas fa-icons"></i>
                                        <span>Sub-ícones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/tilocal">
                                        <i class="far fa-address-book"></i>
                                        <span>TI Local</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/contatos">
                                        <i class="far fa-id-card"></i>
                                        <span>Contatos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/perguntas"><i class="far fa-question-circle"></i>
                                        <span>Perguntas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/acontecimentos" class="waves-effect">
                                        <i class="far fa-hourglass"></i>
                                        <span>Linha do Tempo</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/tutoriais">
                                        <i class="far fa-id-card"></i>
                                        <span>Tutoriais</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/painel/investimentos" class="waves-effect">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                        <span>Investimentos </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="fas fa-wrench"></i>
                                        <span>Sistemas
                                            <span class="float-right menu-arrow">
                                                <i class="mdi mdi-chevron-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="/painel/sistemas/webpublico"><i class="far fa-window-maximize"></i>Webpublico</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Infra -->
                                <li>
                                    <a href="javascript:void(0);" class="waves-effect">
                                        <i class="fas fa-network-wired"></i>
                                        <span>Infraestrutura
                                            <span class="float-right menu-arrow">
                                                <i class="mdi mdi-chevron-right"></i>
                                            </span>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="/painel/infra/fibra/listar">
                                                <i class="fas fa-project-diagram"></i>Malha de Fibra
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/painel/infra/config">
                                                <i class="fas fa-cog"></i>Configurações
                                            </a>
                                        </li>
                                    </ul>
                                <li>
                                    <a href="/painel/planejamentos" class="waves-effect">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Planejamento</span>
                                    </a>
                                </li>
                                </li>
                                <!-- Fim infra -->


                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar END -->
            </div>
            <!-- Sidebar -left END -->
        </div>
        <!-- Left Sidebar End -->
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <!-- mensagens do sistema -->
                   <!--COMPONENTE MESSAGES-->
                    @include('components.messages')
                    <!--AREA DO CONTEUDO -->
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
               <!-- PERGUNTA -->
                © {{ date('Y') }} Prefeitura Municipal de Rio Branco <span class="d-none d-sm-inline-block"> - Criado por: DTI</span>.
            </footer>
        </div>
    </div>

    <script src="/js/dashboard.js"></script>
    <script src="/js/loadingover/loadingoverlay.js"></script>
    <script src="/js/funcoes.js"></script>

    @yield('js')
</body>
</html>
