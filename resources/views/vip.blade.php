<!DOCTYPE html>
<html lang="en">
<?php
$prenom = Session::get('prenom') ? :'';
$email =  Session::get('email') ? :'';
?>
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
<?php
$user = Session::get('email');
$name = strstr($user, '@', true);
?>
<!-- START HEADER -->
<header class="header_wrap fixed-top">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="1s">
                <img class="logo_light" src="{{asset('assets/images/logoblanc.png')}}" alt="logo" />
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

            </div>
        </nav>
    </div>
</header>
<!-- END HEADER -->

<!-- START SECTION BANNER -->
<section id="home_section" class="section_banner section_gradiant3">
    <div id="banner_bg_effect" class="banner_effect"></div>
    <div class="container">
        <div class="divider large_divider"></div>
        <div class="divider small_divider d-none d-lg-block"></div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_50 pt-lg-0 order-lg-first">
                <div class="banner_text_s2 text_md">
                    <h1 class="animation text-white center" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>Votre espace VIP</strong></h1>
                    <p class="animation text-white" data-animation="fadeInUp" data-animation-delay="1.3s">L'espace VIP va être mis à jour dans les prochaines semaines pour vous apporter du contenu exclusif !</p>


                </div>
            </div>

        </div>

    </div>

    </div>
    <div class="banner_light_gradiant"></div>
</section>
<!-- END SECTION BANNER -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text-center res_md_mb_30 res_sm_mb_20">
                    <img width="200em" src="{{asset('assets/sponsor.png')}}">

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 text_md_center">
                <div class="title_cyan_dark">
                    <h4 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">Gagnez 50$ par parrainage !</h4>
                    <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">Pour chaque parrainage recevez un bonus de 50$ ! Il suffit de communiquer votre lien de parrainage à vos proches pour qu'ils s'inscrivent, une fois leur inscription validée et 5 trades cloturés sur Stormgain recevez votre commission !</p>
                    <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">Voici votre lien de parrainage :
                        <input type="text" class="form-control" required="" value="https://cryptotraders.fr/inscription.php?ref=<?php echo $name;?>"></p><br>
                    <a href="https://t.me/rogercryptotraders" class="video btn btn-default btn-radius">DEMANDER MON PAIEMENT<i class="ion-ios-arrow-thin-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>












<!-- START CLIENTS SECTION -->
<section class="client_logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title_cyan_dark text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Nos partenaires</h4>
                </div>
            </div>
        </div>
        <div class="row align-items-center text-center overflow_hide small_space">
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <img src="{{asset('assets/images/binanceok.png')}}" alt="client_logo_dark_gray1" />
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <img src="{{asset('assets/images/stormgainok.png')}}" alt="client_logo_dark_gray2" />
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                    <img src="{{asset('assets/images/apolloxok.png')}}" alt="client_logo_dark_gray3" />
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                    <img src="{{asset('assets/images/primeok.png')}}" alt="client_logo_dark_gray4" />
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END CLIENTS SECTION -->

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
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="{{route('inscription')}}">NOUS REJOINDRE</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="{{route('login')}}">Se connecter</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#whitepaper">Le guide</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a target="_blank" href="https://t.me/max_cryptotraders">Support</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.9s"><a href="/mentions">Mentions légales</a></li>
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
    var Tawk_API=Tawk_API||{};
    Tawk_API.visitor = {
        name : '<?php echo $prenom; ?>',
        email : '<?php echo $email; ?>',
    };
    var Tawk_LoadStart=new Date();
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
