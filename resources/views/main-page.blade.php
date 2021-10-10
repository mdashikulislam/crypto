<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51272653-7"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <?php
    date_default_timezone_set('UTC');
    setlocale (LC_TIME, 'fr_FR.utf8','fra');
    $jour = date("j")+10;
    $mois = strftime("%B");
    $pourcentage = 10+$jour*2.5;
    $place = 32-date("j");
    ?>
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
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.4s"><a class="nav-link page-scroll nav_item" href="#temoin">Témoignages</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a class="nav-link page-scroll nav_item" href="#roadmap">Historique</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.6s"><a class="nav-link page-scroll nav_item" href="#team">L'équipe</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a class="nav-link page-scroll nav_item" href="#resultats">Résultats</a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a class="nav-link page-scroll nav_item" href="#faq">FAQ</a></li>


                </ul>
                <ul class="navbar-nav nav_btn align-items-center">

                    <li class="animation" data-animation="fadeInDown" data-animation-delay="2.1s"><a href="{{route('inscription')}}" class="btn btn-default btn-radius" >S'INSCRIRE <i class="ion-ios-arrow-thin-right"></i></a></li>
                    <li class="animation" data-animation="fadeInDown" data-animation-delay="2.1s"><a class="btn btn-white btn-radius nav_item" href="/login">CONNEXION</a></li>
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
        <center><h1 class="animation text-white center" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>+500</strong> personnes formées en 2021 !</h1></center>
        <div class="divider small_divider d-none d-lg-block"></div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_50 res_sm_mt_20 py-5 pt-5 pt-lg-0 order-lg-first">
                <div class="banner_text_s2 text_md_center">
                    <h1 class="animation text-white" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>L'expertise</strong> au service de la <strong>passion</strong></h1>
                    <p class="animation text-white" data-animation="fadeInUp" data-animation-delay="1.3s">Notre <strong>expertise</strong> en finance et notre <strong>passion</strong> pour les <strong>cryptomonnaies</strong> nous ont amené aujourd'hui à construire <strong>une communauté</strong> et un ensemble de services associés au <strong>cryptotrading</strong>.</p>
                    <div class="btn_group animation" data-animation="fadeInUp" data-animation-delay="1.1s">
                        <a href="#why" class="btn btn-default btn-radius page-scroll"><i class="fa fa-rocket"></i>Nos services</a>

                    </div>

                </div>
            </div>
            <div style="margin-top: 12% !important;" class="row align-items-center justify-content-center">
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
                            <span class="rating">+47.5 <small>%</small></span>
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
            <div class="col-lg-5 offset-lg-1 col-md-12 col-sm-12 pb-lg-0 order-first">
                <div class="banner_inner token_gradiant position-relative">
                    <div class="tk_countdown transparent_bg token_bg token_circle text-center animation" data-animation="fadeIn" data-animation-delay="1.1s">
                        <div class="banner_text tk_counter_inner">
                            <div class="tk_countdown_time p-0 transparent_bg box_shadow_none animation" data-animation="fadeInUp" data-animation-delay="1.2s" data-time="2021/10/31 00:00:00"></div>
                            <div class="progress animation" data-animation="fadeInUp" data-animation-delay="1.3s">
                                <div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pourcentage;?>%"><?php echo $place;?> places restantes
                                </div>
                                <span class="progress_label bg-white" style="left: 20%"> <strong> 25 minimum </strong></span>
                                <span class="progress_label bg-white" style="left: 90%"> <strong> 50 maximum </strong></span>
                                <span class="progress_min_val">Nombre de places en <?php echo $mois;?></span>
                                <span class="progress_max_val">OFFERT</span>
                            </div>
                            <a href="/login" class="btn btn-border-white btn-radius">Se connecter <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                            <a href="{{route('inscription')}}" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="1.40s" >S'INSCRIRE <i class="ion-ios-arrow-thin-right"></i></a>

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



<!-- START SECTION WHY CHOOSE US -->
<section id="why" class="bg_gray3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
                <div class="title_cyan_dark text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Pourquoi nous rejoindre ?</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Nos services s'articulent autour de 3 axes majeurs : les signaux, la formation et l'assistance.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
<span style="color: #193F87;">
<i class="fa fa-telegram fa-5x" aria-hidden="true"></i></span>
                    <h4>Signaux et analyses en temps réel</h4>
                    <p>Nous envoyons <b>quotidiennement</b> des signaux, en <b>swing</b> majoritairement, parfois <b>intra-day</b> mais aussi des calls investissements long termes small/mid caps (<b>cryptopepites</b>). <br><br>📉 Nos signaux sont toujours accompagnés d'une <b>analyse détaillée en vidéo</b> permettant d'expliquer et justifier nos différentes prises de position. <br> <br>🏆 Notre objectif au delà de votre rentabilité ? Vous faire <b>gagner en compréhension et en autonomie</b>.</p></p>
                    <br><a href="#resultats" class="btn btn-default nav-link"><i class="fa fa-area-chart"></i>Nos résultats</a>
                    <br><a href="{{route('inscription')}}" class="btn btn-default nav-link"><i class="fa fa-space-shuttle"></i>OBTENIR LES SIGNAUX</a></div>
            </div>


            <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
                <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <img src="{{asset('assets/images/wc_icon6.png')}}" alt="wc_icon3"/>
                    <h4>Formation téléphonique individuelle</h4>
                    <p>Une fois votre inscription validée, nous fixerons une date pour effectuer votre <b>formation téléphonique</b> afin de faire un point sur vos connaissances et vous donner <b>les clés de notre stratégie de trading</b>. <br> Vous serez donc en mesure de pouvoir suivre et comprendre parfaitement nos signaux et analyses. Nous tâchons d'effectuer <b>un suivi individuel</b> quotidien lors de vos 15 premiers jours avec nous. <br><br>⭐ Rassurez vous, <b>nous nous adaptons à votre niveau</b> et pouvons personnaliser le contenu de la formation sur-mesure.</p><br>
                    <a href="{{route('inscription')}}" class="btn btn-default nav-link"><i class="fa fa-calendar"></i>RESERVER MA SESSION</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <span style="color: #193F87;"><i class="fa fa-life-ring fa-5x" aria-hidden="true"></i></span>

                    <h4>Support & entraide 24/7</h4>
                    <p>Nous avons mis en place un support en ligne pour <b>répondre à toutes vos questions</b>. <br>De plus, nous avons un <b>groupe public d'échange sur Telegram réunissant plus de 14.000 francophones</b> de tout niveaux partageant quotidiennement <b>informations et bons plans</b> dans l'objectif d'apprendre les uns des autres.</p>
                    <br><a href="{{route('inscription')}}" class="btn btn-default nav-link"><i class="fa fa-check-square-o"></i>S'INSCRIRE</a>
                </div>
            </div></div>
    </div>
    <style>
        .btn.btn-radius {border-color: black !important;}</style>
    <br><center><div id="temoin"><a target="_blank" href="https://fr.trustpilot.com/review/cryptotraders.fr"><img width="300em" src="{{asset('assets/cryptotruste.PNG')}}"></a><a style="color:black" target="_blank" href="https://fr.trustpilot.com/review/cryptotraders.fr" class="btn btn-border-white btn-radius">Voir les avis <i class="fa fa-star" aria-hidden="true"></i></a></center>

    <br><br><center><a href="#team" class="btn btn-default btn-radius">NOTRE EQUIPE<i class="ion-ios-arrow-thin-right"></i></a></center><br></div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->
<!-- START SECTION TIMELINE -->
<section id="roadmap" class="section_gradiant3" data-z-index="1" data-parallax="scroll" data-image-src="{{asset('assets/images/roadmap_bg4.png')}}">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 col-md-12 offset-lg-3">
                <div class="title_default_light text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Chronologie</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Notre historique depuis 2017 et notre feuille de route à suivre.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="timeline owl-carousel small_space">
                    <div class="item">
                        <div class="timeline_box complete">
                            <div class="timeline_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Avril 2017</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Création d'un topic dédié au cryptotrading par Jérémie sur Cryptofr.com suivi par une centaine de personnes. Analyses, prédictions et vidéos pédagogiques sont partagées chaque mois.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="timeline_box complete current">
                            <div class="timeline_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Novembre 2019</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Roger rencontre Jérémie et s'officialise le projet Cryptotraders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="timeline_box">
                            <div class="timeline_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Juillet 2020</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Création du site internet et accélération de la fréquence des publications d'analyses de marchés.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="timeline_box">
                            <div class="timeline_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Septembre 2021</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lancement officiel de la communauté sur Télégram et du service de signaux en temps réel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="timeline_box">
                            <div class="roadmap_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Janvier 2021</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Le groupe télégram public réunit + de 5000 francophones et une centaine de personnes ont étaient formées individuellement et suivent quotidiennement le VIP. Zeph nous rejoint également pour nous renforcer sur la partie conseil et support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="timeline_box">
                            <div class="timeline_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Mars 2021</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Presque 10.000 personnes nous suivent, et nous décidons d'intégrer Antoine dans l'équipe pour nous renforcer sur la partie formation et analyse de marchés sur les alt-coins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="timeline_box">
                            <div class="timeline_inner">
                                <div class="timeline_circle"></div>
                                <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">Janvier 2022</h6>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Lancement d'un service de copy trading crypto indépendant (sans intérmediaire basé sur la blockchain).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TIMELINE -->
<!-- START SECTION TEAM -->
<section id="team" class="bg_gray3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 offset-lg-3">
                <div class="title_cyan_dark text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Nos experts</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Notre équipe est composée de 6 personnes dont 3 experts, 2 conseillers et 1 agent support. </p>
                </div>
            </div>
        </div>
        <div class="row small_space">
            <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="text-center">
                        <img src="{{asset('assets/images/placeholder9.png')}}" alt="placeholder9"/>
                        <div class="team_social_s2 list_none">
                            <ul>
                                <li><a href="https://t.me/jeremiecryptotraders"><i class="fa fa-telegram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/j%C3%A9remie-fournier-7887291b3/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h4><a href="#team1" class="">Jérémie Fournier</a></h4>
                        <p>Trader | Fondateur</p><br>
                        <p style="text-align: left !important;">Jérémie est issu du milieu des fonds d'investissement. Après plusieurs années d'experiences dont 4 aux USA comme gestionnaire d'actifs sur des assets plus tradionnelles, Jérémie s'est passionné de cryptomonnaies et en a fait sa famille de produit de prédilection.<br>Jérémie a une parfaite connaissance du price action du bitcoin et des facteurs extérieurs pouvant impacter son cours.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="text-center">
                        <img src="{{asset('assets/images/roger.png')}}" alt="placeholder9"/>
                        <div class="team_social_s2 list_none">
                            <ul>
                                <li><a href="https://t.me/rogercryptotraders"><i class="fa fa-telegram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/roger-fonjallaz-6247261b3/"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h4><a href="#team2" class="">Roger Fonjallaz</a></h4>
                        <p>Crypto-Analyste | Co-fondateur</p><br>
                        <p style="text-align:left !important;">Bitcoin Holder depuis 2015, Roger a obtenu son MSc in Innovative Finance : Fintech, blockchains & cryptocurrencies à Montpellier Business School. <br>Il a rencontré Jérémie en fin d'année 2019.

                            Il intervient dans l'équipe comme macro/crypto-analyste. <br><br>Ses outils préférés ? Glassnode.com et Cryptopanic.com</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                    <div class="text-center">
                        <img src="{{asset('assets/images/antoine.png')}}" alt="placeholder9"/>
                        <div class="team_social_s2 list_none">
                            <ul>
                                <li><a href="#"><i class="fa fa-telegram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h4><a href="#team3" class="">Antoine "Alt-scanner"</a></h4>
                        <p>Gestionnaire de stratégie</p>
                    </div>
                    <div id="team3" class="team_pop mfp-hide">
                        <div class="row m-0">
                            <div class="col-md-4 text-center">
                                <div class="team_img_wrap">
                                    <img class="w-100" src="{{asset('assets/images/placeholder3.jpg')}}" alt="user_img-lg"/>
                                    <div class="team_title">
                                        <h4>Alvaro Martin</h4>
                                        <span>Blockchain App Developer</span>
                                    </div>
                                </div>
                                <div class="social_single_team list_none mt-3">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="pt-3">
                                    <h5>About</h5>
                                    <hr>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                    <p>Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful entrepreneurships under his name over the last 18 years.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider large_divider"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="title_cyan_dark text-center">
                <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Nos conseillers</h4>
            </div>
        </div>
    </div>
    <div class="row small_space justify-content-center">
        <div class="col-lg-9 col-md-12">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                    <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <div class="text-center">
                            <img src="{{asset('assets/images/teamdefault.png')}}" alt="placeholder9"/>
                            <div class="team_social_s2 list_none">
                                <ul>
                                    <li><a href="https://t.me/zeph_crypto"><i class="fa fa-telegram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h4><a href="#team5" class="">Zeph</a></h4>
                            <p>Conseiller</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                    <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="text-center">
                            <img src="{{asset('assets/images/teamdefault.png')}}" alt="placeholder9"/>
                            <div class="team_social_s2 list_none">
                                <ul>
                                    <li><a href="https://t.me/anthonycryptotradersfr"><i class="fa fa-telegram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h4><a href="#team6" class="">Anthony</a></h4>
                            <p>Conseiller</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
                    <div class="bg-white radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <div class="text-center">
                            <img src="{{asset('assets/images/teamdefault.png')}}" alt="placeholder9"/>
                            <div class="team_social_s2 list_none">
                                <ul>
                                    <li><a href="https://t.me/max_cryptotraders"><i class="fa fa-telegram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h4><a href="#team7" class="">Maxime</a></h4>
                            <p>Support</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEAM -->

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
        <center><a href="{{route('inscription')}}" class="btn btn-default btn-radius animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1.40s" style="animation-delay: 1.4s; opacity: 1;">OBTENIR LES SIGNAUX <i class="fa fa-bell-o"></i></a></center>
        <br><center><a target="_blank" href="https://docs.google.com/spreadsheets/d/1NjmCWfNiEZwGaY-0oU4QtNNxWTfi8yvCuK4-QyKiV-c/edit?usp=sharing" class="btn btn-border btn-radius">Historique des signaux <i class="ion-ios-arrow-thin-right"></i></a></center><br><br><center><p style="color:white">Les performances passées ne garantissent pas les performances futures</p></center></div>
</section>
<!-- END SECTION resultats SALE -->



<!-- START SECTION WHITEPAPER -->
<section id="whitepaper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 offset-lg-3">
                <div class="title_cyan_dark text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Notre guide de formation 🔨</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">En cours de rédaction</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center small_space">
            <div class="col-lg-7 order-md-first">
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Notre guide de formation est en cours de rédaction. Une partie importante sera orientée trading, tout en étant adaptée à la cryptomonnaie.</p>

                <div class="tab-content document_tab">
                    <div class="tab-pane fade show active" id="Whitepaper" role="tabpanel">
                        <ul class="list_none doc_lan text-center">
                            <li  class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="{{route('inscription')}}"><img src="{{asset('assets/images/frn_flage.png')}}" alt="eng_flage"><span>Francais<i class="ion-ios-download-outline"></i></span></a></li>
                            <li  class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="{{route('inscription')}}"><img src="{{asset('assets/images/eng_flage.png')}}" alt="eng_flage"><span>Anglais<i class="ion-ios-download-outline"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-first">
                <div class="res_md_mb_40 res_sm_mb_20 text-center animation" data-animation="zoomIn" data-animation-delay="0.3s">
                    <img width="70%" src="{{asset('assets/images/guideok.png')}}" alt="whitepaper5"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION WHITEPAPER -->



<!-- START SECTION FAQ -->
<section id="faq">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="title_cyan_dark text-center">
                    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Foire aux questions</h4>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"> Nous avons regroupé un ensemble de questions/réponses fréquemment posés par nos membres pour vous aider à mieux comprendre nos services et notre vision.</p>
                </div>
            </div>
        </div>
        <div class="row small_space">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="tab_content">
                    <ul class="nav nav-pills tab_nav_s2 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                            <a class="active" data-toggle="tab" href="#tab1">Général</a>
                        </li>

                    </ul></div>
                <div class="col-lg-9 col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <div id="accordion1" class="faq_question">
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Qu'est ce que les cryptomonnaies ?</a> </h6>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                                        <div class="card-body">Les cryptomonnaies sont des actifs numériques qui constituent un moyen d’échange entre deux parties. Elles permettent d’opérer des transactions directes entre individus sans avoir recours à un intermédiaire, comme une banque. Tandis que la monnaie fiat est soumise à l’inflation et que les banques centrales peuvent en imprimer en quantité à tout moment, le leader des cryptomonnaies Bitcoin dispose d’un approvisionnement fixe de 21 000 000 d’unités, ce qui le rend encore plus rare que l’or.</div>
                                    </div>
                                </div>
                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="card-header" id="headingTwo">
                                        <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Je suis débutant, est-ce grave ?</a> </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                        <div class="card-body">Ce n'est pas un problème, bien au contraire. Nos services permettent aux débutants de faire un premier pas dans le monde de l'investissement de la crypto en bénéficiant de conseils avisés permettant d'éviter les erreurs de débutants. <br>Notre accompagnement et formation téléphonique individuelle nous permettent de vous assurer une parfaite compréhension de vos actions et du suivi de nos signaux.</div>
                                    </div>
                                    <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                        <div class="card-header" id="headingThree">
                                            <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Comment puis je retirer mes profits ?</a> </h6>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                                            <div class="card-body">Vous pouvez retirer vos profits en Euro à n'importe quel moment via la plateforme de trading. En virement SEPA sur votre compte bancaire (2 à 3 jours ouvrés).</div>
                                        </div>
                                        <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                            <div class="card-header" id="headingFour">
                                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Quel capital de départ investir ?</a> </h6>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                                                <div class="card-body"> Le capital minimum pour suivre nos signaux en appliquant notre stratégie de money management est de 280€ (300$). Néanmoins pour optimiser votre gestion des risques et pouvoir suivre l'intégralité de nos signaux nous recommandons un capital de 500€ pour démarrer.</div>
                                            </div>
                                            <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                <div class="card-header" id="headingFive">
                                                    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Puis-je perdre mon argent ?</a> </h6>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion1">
                                                    <div class="card-body"> La réponse est OUI. Toute activité d'investissement et de trading comporte des risques et la possibilité de perdre votre capital. Néanmoins il n'est pas possible de perdre l'intégralité de votre capital en un trade si vous avez suivi notre recommandation de gestion de votre portefeuille et l'application des Stop Loss. <br>Nos <a href="#resultats">résultats</a> sont à l'heure actuelle concluant, néanmoins les performances passées ne garantissent pas les performances futures. </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="headingSix">
                                                        <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Comment se compose un signal ?</a> </h6>
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion1">
                                                        <div class="card-body"> Un signal se décompose de la manière suivante : <br>- ACHAT ou VENTE<br>- Prix d'entrée<br>- Stop Loss (seuil de prix pour limiter les pertes)<br>- Take Profit 1 (seuil de prix pour prendre ses gains)<br>- Take Profit 2 (second seuil de prix pour prendre ses gains)<br>- Commentaire (justification, risque et indicateurs utilisés)</div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
</section>
<!-- END SECTION FAQ -->



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
                    <a href="/apollox"><img width="80%" src="https://www.comparateurbanque.com/files/2021/08/libertex-logo-forex.png" alt="client_logo_dark_gray3" />
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
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#resultats">Résultats</a></li>
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s"><a href="#team">L'équipe</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-auto res_sm_mt_20">
                    <h4 class="footer_title_s2 animation" data-animation="fadeInUp" data-animation-delay="0.2s">Utile</h4>
                    <ul class="footer_link list_none">
                        <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="{{route('inscription')}}">NOUS REJOINDRE</a></li>
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
                                Les CFD sont des instruments complexes et comportent un risque élevé de perte d'argent rapide en raison de l'effet de levier. 83 % des comptes des investisseurs particuliers perdent de l'argent lorsqu'ils négocient des CFD avec ce fournisseur. Vous devez vous demander si vous comprenez le fonctionnement des CFD et si vous pouvez vous permettre de prendre le risque élevé de perdre votre argent                    </div>
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

</body>
</html>
