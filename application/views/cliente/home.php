<?php
	//se extrae la session cliente
	$user = $this->session->userdata("cliente");
?>


<body>
    <div class="loader-bg"></div>
    <div class="loader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-teal lighten-1">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mn-content fixed-sidebar">
        <header class="mn-header navbar-fixed">
            <nav class="cyan darken-1">
                <div class="nav-wrapper row">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out"
                            class="button-collapse show-on-large material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <div class="header-title col s3 m3">
                        <span class="chapter-title">Cliente</span>
                    </div>
                </div>
            </nav>
        </header>








        <aside id="slide-out" class="side-nav white fixed">
            <div class="side-nav-wrapper">
                <div class="sidebar-profile">
                    <div class="sidebar-profile-image">
                        <!--<img src="assets/images/profile-image.png" class="circle" alt=""> -->
                        <img src="data:image/jpeg;base64,<?php echo base64_encode( $user[0]->foto); ?>" class="circle"
                            alt="">

                    </div>
                    <div class="sidebar-profile-info">
                        <a>
                            <p><?php echo $user[0]->nombre." ".$user[0]->apellido; ?></p>
                            <span><?php echo $user[0]->mail; ?></span>
                        </a>
                    </div>
                </div>

                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Modulo Perfil</a>
                    </li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Modulo Cliente</a>
                    </li>
                    <li class="no-padding">
                        <a class="waves-effect waves-grey"><i class="material-icons">done</i>Modulo Usuario</a>
                    </li>
                    <li class="no-padding">
                        <a href="<?php echo base_url()?>logout" class="waves-effect waves-grey">
                            <i class="material-icons">exit_to_app</i>cerrar sesion</a>
                    </li>
                </ul>
                <div class="footer">
                    <p class="copyright">Steelcoders ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
            </div>
        </aside>




        <main class="mn-inner inner-active-sidebar">
            <!--contenido -->
        </main>



        <div class="page-footer">
            <div class="footer-grid container">
                <div class="footer-l white">&nbsp;</div>
                <div class="footer-grid-l white">
                </div>
                <div class="footer-r white">&nbsp;</div>
                <div class="footer-grid-r white">
                    <a class="footer-text" href="<?php echo base_url()?>logout">
                        <i class="material-icons arrow-r">arrow_forward</i>
                        <span class="direction">Next</span>
                        <div>
                            inicio
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="left-sidebar-hover"></div>