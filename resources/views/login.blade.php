<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51272653-7"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-51272653-7');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '279165596975398');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=279165596975398&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body class="v_cyan_blue" data-spy="scroll" data-offset="110">

<!-- START LOADER -->
<div id="loader-wrapper">
    <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<!-- END LOADER -->
<style>
    header.fixed-top {
        position: fixed !important;
    }
    div::-webkit-scrollbar {
        width: 0px;
        background: transparent;
    }
</style>
<!-- START HEADER -->
<header class="header_wrap fixed-top">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand page-scroll animation" href="/" data-animation="fadeInDown" data-animation-delay="1s">
                <img class="logo_light" src="{{asset('assets/images/logonoir.png')}}" alt="logo" />
                <img class="logo_dark" src="{{asset('assets/images/logonoir.png')}}" alt="logo" />
            </a>
            <button class="navbar-toggler animation" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-animation="fadeInDown" data-animation-delay="1.1s">
                <span class="ion-android-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">

                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a class="nav-link page-scroll nav_item" href="#about">Accueil</a></li>
                    <li class="animation" data-animation="fadeInDo    wn" data-animation-delay="1.3s"><a class="nav-link page-scroll nav_item" href="#why">Nos services</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.4s"><a class="nav-link page-scroll nav_item" href="#temoin">Témoinages</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a class="nav-link page-scroll nav_item" href="#roadmap">Historique</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.6s"><a class="nav-link page-scroll nav_item" href="#team">L'équipe</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a class="nav-link page-scroll nav_item" href="#token">Résultats</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a class="nav-link page-scroll nav_item" href="#faq">FAQ</a></li>


                </ul>
                <ul class="navbar-nav nav_btn align-items-center">

                    <li class="animation" data-animation="fadeInDown" data-animation-delay="2.1s"><a class="btn btn-white btn-radius nav_item" href="{{route('login')}}">S'INSCRIRE</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="2.1s"><a class="btn btn-white btn-radius nav_item" href="{{route('login')}}">CONNEXION</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END HEADER -->

<section>
    <div style="margin-top: 20%" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="authorize_box">
                    <div class="title_default_dark title_border text-center">
                        <h4 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">Connexion</h4>
                        <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">Se connecter sur votre compte</p>
                    </div>
                    <div class="field_form authorize_form">
                        <form action="{{route('login2')}}" method="get">
                            <div class="form-group col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                                <input type="text" class="form-control" required="" placeholder="Adresse email" name="email" id="email">
                            </div>

                            <div class="form-group col-md-12 text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">
                                <button class="btn btn-default btn-radius" type="submit">Valider</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="divider small_divider"></div>
                <div class="text-center">
                    <span class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">Pas encore de compte ?<a href="/inscription"> S'inscrire</a></span>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- START FOOTER SECTION -->
<footer class="section_gradiant3" data-z-index="1" data-parallax="scroll" data-image-src="{{asset('assets/images/roadmap_bg4.png')}}">
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <a href="#home_section" class="page-scroll">
                            <img alt="logo" width="70%" src="{{asset('assets/images/logoblanc.png')}}">
                        </a>
                    </div>
                    <div class="footer_desc small_text">
                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Cryptotraders est une communauté d'investisseur et trader en ligne piloté par une équipe pluridisciplinaire et d'expérience. Notre objectif premier est de rendre accessible la crypto au plus grand nombre tout en respectant une transparence et une éthique de travail.</p>
                    </div>

                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-auto res_sm_mt_20">
                    <h4 class="footer_title_s2 animation" data-animation="fadeInUp" data-animation-delay="0.2s">Liens rapides</h4>
                    <ul class="footer_link list_none">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#home">Accueil</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#why">Nos services</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#token">Résultats</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a href="#team">L'équipe</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-auto res_sm_mt_20">
                    <h4 class="footer_title_s2 animation" data-animation="fadeInUp" data-animation-delay="0.2s">Utile</h4>
                    <ul class="footer_link list_none">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="/inscription">NOUS REJOINDRE</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="/login">Se connecter</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#whitepaper">Le guide</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a target="_blank" href="https://t.me/max_cryptotraders">Support</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_bottom">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="copyright">Cryptotraders - Copyright &copy; 2017-2021 <br>Tout droits réservés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION -->

<a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a>

@include('include.foot')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f186c67a45e787d128bef75/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
