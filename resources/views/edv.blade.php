<!DOCTYPE html>
<html lang="en">
<?php

$prenom = Session::get('prenom') ? :'';
$email =  Session::get('email') ? :'';

$ip=$_SERVER['REMOTE_ADDR'];
//Using the API to get information about this IP
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
//Using the geoplugin to get the continent for this IP
$continent=$details->geoplugin_continentCode;
//And for the country
$country=$details->geoplugin_countryCode;
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
<!-- START HEADER -->
<header class="header_wrap fixed-top">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="1s">
                <a href="/"><img class="logo_light" src="{{asset('assets/images/logoblanc.png')}}" alt="logo" /> </a>
                <a href="/"><img class="logo_dark" src="{{asset('assets/images/logonoir.png')}}" alt="logo" /> </a>
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


                    <li class="animation" data-animation="fadeInDown" data-animation-delay="2.1s"><a class="btn btn-white btn-radius nav_item" href="{{route('login')}}">CONNEXION</a></li>
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
        <center><h1 class="animation text-white center" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>Vos disponibilités </strong> <?php echo $prenom;?> ?</h1></center>
        <div class="divider small_divider d-none d-lg-block"></div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 pt-lg-0 order-lg-first">
                <div class="banner_text_s2 text_md">
                    <p class="animation text-white" data-animation="fadeInUp" data-animation-delay="1.3s">Veuillez de <strong>saisir vos disponibilités</strong> dans le calendrier ci-dessous.<strong> Merci d'honorer votre rendez-vous</strong>, notre temps comme le votre est précieux.</p>
                    <div class="btn_group animation center" data-animation="fadeInUp" data-animation-delay="1.1s">
                        <!-- Calendly inline widget begin -->
                        <?php
                        session_start();
                        if($continent==="EU"){ ?>
                        <div class="calendly-inline-widget" style="min-width:320px;height:600px;" data-auto-load="false">
                            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                            <script>
                                var prenom = '<?php echo $_SESSION["prenom"]; ?>';
                                var email = '<?php echo $_SESSION["email"]; ?>';
                                var phone_number = '<?php echo $_SESSION["phone"]; ?>';
                                Calendly.initInlineWidget({
                                    url: 'https://calendly.com/cryptotradersrdv/15min?hide_event_type_details=1&hide_gdpr_banner=1&background_color=0d0c0c&text_color=ffffff&primary_color=fab83d',
                                    prefill: {
                                        name: prenom,
                                        email: email,
                                        phone_number: phone_number,
                                    }
                                });
                            </script>
                        </div>
                        <!-- Calendly inline widget end -->
                    </div>
                    <?php }else{ ?>
                    <a class="btn btn-default btn-radius page-scroll" href="javascript:void(Tawk_API.toggle())">PRENDRE RENDEZ-VOUS</a>
                    <?php }
                    ?>


                </div>
            </div>
            <div style="margin-top: 4% !important;" class="row align-items-center justify-content-center">
                <div class="col-lg-3">
                    <h5 class="rate_title text_md_center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">Quelques chiffres</h5>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="review_box animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                        <div class="review_icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="review_info">
                            <h6>ROI mensuel ~</h6>
                            <span class="rating">+27 <small>%</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="review_box animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                        <div class="review_icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="review_info">
                            <h6>15.000 membres</h6>
                            <span class="rating">+600<small> en VIP</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="review_box animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">
                        <div class="review_icon">
                            <a href="https://fr.trustpilot.com/review/cryptotraders.fr"><i class="fa fa-star-o"></i></a>
                        </div>
                        <div class="review_info">
                            <h6><a style="color:white" href="https://fr.trustpilot.com/review/cryptotraders.fr">Avis Trustpilot &nbsp;<i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                                </a></h6>
                            <span class="rating">4.6 <small>/ 5 (Excellent)</small></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="divider small_divider d-none d-lg-block"></div>
        <div class="divider large_divider d-none d-lg-block"></div>
    </div>
    <div class="banner_light_gradiant"></div>
</section>
<!-- END SECTION BANNER -->







<!-- START SECTION resultats SALE -->
<section id="resultats" class="section_token section_gradiant3">
    <div class="container">

        <div class="divider large_divider"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="title_default_light text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Résultats</h4>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                <div class="bonus_box2 bonus_text_white bg-white-tran radius_box text-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                    <div class="stage_title">
                        <h5>INVESTISSEMENT 🆕</h5>
                    </div>
                    <a href="#" class="disabled">Small/mid caps HODL</a>
                    <div class="bonus_info">
                        <h6>08 juillet - 1 septembre</h6>
                        <div class="discount_text"><span class="discount_num"></span>Pourcentage de profit (à son ATH)</div>
                        <h7>Coin 1</h7>
                        <div class="progress bg-green">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="22.32" aria-valuemin="0" aria-valuemax="100">+304%</div>
                        </div><h7>Coin 2</h7>
                        <div class="progress bg-green">
                            <div class="progress-bar" role="progressbar" style="width: 91%;" aria-valuenow="22.32" aria-valuemin="0" aria-valuemax="100">+91%</div>
                        </div><h7>Coin 3</h7>
                        <div class="progress bg-blue">
                            <div class="progress-bar" role="progressbar" style="width: 24%;" aria-valuenow="22.32" aria-valuemin="0" aria-valuemax="100">+24%</div>
                        </div><h7>Coin 4</h7>
                        <div class="progress bg-orange">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="22.32" aria-valuemin="0" aria-valuemax="100">+15%</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6">
                <div class="bonus_box2 bonus_text_white bg-white-tran radius_box text-center animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                    <div class="stage_title">
                        <h5>TRADING</h5>
                        <a href="#" class="disabled">Levier 5-10 & Ratio Risk 5%-10%</a>
                    </div>
                    <div class="bonus_info">
                        <ul class="list_none chart_list animation animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">
                            <li>
                                <h6>Septembre-Decembre 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="22.32" aria-valuemin="0" aria-valuemax="100">106%</div>
                                </div>
                            </li>

                            <li>
                                <h6>Janvier 2021</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 59.6%;" aria-valuenow="30.25" aria-valuemin="0" aria-valuemax="100">59.6%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Février 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 54.22%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">54.2%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Mars 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 36.22%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">36.22%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Avril 2020</h6>
                                <div class="progress bg-blue">
                                    <div class="progress-bar" role="progressbar" style="width: 12%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">11.6%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Mai 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 56.2%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">56.2%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Juin 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 30.8%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">30.8%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Juillet 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 51.6%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">51.6%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Août 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 38%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">38%</div>
                                </div>
                            </li>
                            <li>
                                <h6>Septembre 2020</h6>
                                <div class="progress bg-green">
                                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="12.22" aria-valuemin="0" aria-valuemax="100">En cours</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div><br>
        <center><a href="/inscription" class="btn btn-default btn-radius animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1.40s" style="animation-delay: 1.4s; opacity: 1;">OBTENIR LES SIGNAUX <i class="fa fa-bell-o"></i></a></center>
        <br><center><a target="_blank" href="https://docs.google.com/spreadsheets/d/1NjmCWfNiEZwGaY-0oU4QtNNxWTfi8yvCuK4-QyKiV-c/edit?usp=sharing" class="btn btn-border btn-radius">Historique des signaux <i class="ion-ios-arrow-thin-right"></i></a></center><br><br><center><p style="color:white">Les performances passées ne garantissent pas les performances futures</p></center></div>
</section>
<!-- END SECTION resultats SALE -->






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
                    <a href="/binance"><img src="{{asset('assets/images/binanceok.png')}}" alt="client_logo_dark_gray1" /></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <a href="/stormgain"><img src="{{asset('assets/images/stormgainok.png')}}" alt="client_logo_dark_gray2" />
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                    <a href="/apollox"><img src="{{asset('assets/images/apolloxok.png')}}" alt="client_logo_dark_gray3" />
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 logo_border">
                <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                    <a href="/prime"><img src="{{asset('assets/images/primeok.png')}}" alt="client_logo_dark_gray4" />
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
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="/inscription">NOUS REJOINDRE</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="/login">Se connecter</a></li>
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
