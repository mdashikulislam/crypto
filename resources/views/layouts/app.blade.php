@php
    $email =  Session::get('email');
    if (!empty($email)){
        $name = strstr($email, '@', true);
    }else{
        $name = '';
    }
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "8bcb4689-074d-4841-9dcd-313c8b4c0750",
                safari_web_id: "web.onesignal.auto.40e188d7-5f7a-4af3-8ac5-05427adc97a7",
            });
        });
    </script>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quel sera le prix du Bitcoin à 22h ? 10$ à gagner tous les soirs pour la prédiction la plus proche !" />
    <meta property="og:image" content="https://cryptotraders.fr/logosansecrit.PNG">
    <!-- SITE TITLE -->
    <title>Cryptotraders.fr</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon-32x32.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" >
    <!-- ionicons CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/spop.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Color CSS -->
    <link id="layoutstyle" rel="stylesheet" href="{{asset('assets/color/theme.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51272653-7"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <style>
        header.fixed-top {
            position: fixed !important;
        }
        div::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }
        .input {
            background: rgba(0, 0, 0, 0.05);
            transition: border-color 0.2s ease, background-color 0.2s ease;
            border-radius: 6px;
            border: none;
            border: solid 2px rgba(255, 255, 255, 0.35);
            color: inherit;
            display: block;
            outline: 0;
            padding: 0 1em;
            text-decoration: none;
            width: 125%;
            height: 2.75em;
            padding-right: none !important;
        }
        .iti input, .iti input[type=text], .iti input[type=tel] {margin-top: 3% !important;}
    </style>
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
<script>

    function $_GET(param) {
        var vars = {};
        window.location.href.replace( location.hash, '' ).replace(
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
            }
        );

        if ( param ) {
            return vars[param] ? vars[param] : null;
        }
        return vars;
    }
    var ref = $_GET('ref');

    function showColorBox() {
        var x = document.getElementById("email");

        var myDiv = document.getElementById("telephonediv");
        if (x.value != "")
        {
            myDiv.style.display = "block";
            document.getElementById("ref").value = ref;
        } else {
            myDiv.style.display = "none";
        }
    }
    function checkForm(form) // Submit button clicked
    {
        //
        // check form input values
        //

        form.submitbutton.disabled = true;
        form.submitbutton.value = "Merci de patienter...";
        return true;
    }


</script>
<!-- START SECTION BANNER -->
<section id="home_section" class="section_banner section_gradiant3">
    <div id="banner_bg_effect" class="banner_effect"></div>
    <div class="container">
        
        <div class="divider small_divider d-none d-lg-block"></div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_50 pt-lg-0 order-lg-first">
                <div class="banner_text_s2 text_md">
                    <center><h2 class="animation text-white center" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>10$ A GAGNER</strong></h2><p style="color:white">TOUS LES SOIRS</p>
		 <h1 class="animation text-white center" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>Heure limite de participation : 20h</strong></h1></center>
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 pt-lg-0 order-lg-first">
                            <div class="col-lg-12">
                                <div class="authorize_box">
                                    <div class="title_default_dark title_border text-center">
                                        <h4 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">QUEL SERA LE PRIX DU BITCOIN A 22H ?</h4>

                                    </div>
                                    <div class="field_form authorize_form">
                                        <form action="{{route('contest')}}" id="inscription" method="POST" onsubmit="return checkForm(this);">
                                            @csrf
                                            <div class="form-group col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                                                <input type="number" min="0" max="200000" step="0.01" class="form-control" required="" placeholder="Votre prédiction de prix (en $)" name="btc" >
                                            </div>
                                            <div class="form-group col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                                                <input type="text" class="form-control" required="" placeholder="Email" name="email" id="email" onkeyup="showColorBox()">
                                            </div>
                                            <div id="telephonediv" name="telephonediv" style="display: none;">
                                                <div class="form-group col-md-12" style="animation-delay: 0.7s; opacity: 1;">
                                                    <input type="text" class="form-control" required="" placeholder="Pseudo" name="pseudo">
                                                </div>
                                                <div class="form-group col-12">
                                                    <textarea name="wallet" placeholder="Adresse de paiement NEAR (Optionelle)" class="form-control" ></textarea>
                                                </div>
                                                <div class="form-group col-md-12" style="animation-delay: 0.8s; opacity: 1;">
                                                    <input id="phone" type="tel" name="phone" class="input" value="+33" pattern=".{9,}" required>
                                                </div>

                                                <div class="form-group col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.9s" style="animation-delay: 0.9s; opacity: 1;">
                                                    <div class="checkbox_field d-inline">
                                                        <input type="checkbox" name="rememberme" id="rememberme" value="rememberme">
                                                        <label for="rememberme">En cliquant sur s'inscrire je certifie être majeur et avoir pris connaissances des mentions légales de Cryptotraders tout en les acceptant.</a></label>
                                                    </div></div>
                                            </div>
                                            <div class="form-group col-md-12 text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">
                                                <input type="submit" class="btn btn-default btn-radius" id="submitbutton" value="VALIDER" name="submitbutton"><img width="40px">
                                            </div>
                                        </form>
					
                                    </div>
                                </div>
<br><p style="color:white">🏆 Annonce du gagnant tous les soirs à 22h sur notre canal telegram, cliquer ci-dessous.</p><a href="https://t.me/cryptotradersfr" class="btn btn-default nav-link"><i class="fa fa-telegram fa-3x"></i>REJOINDRE LE TELEGRAM</a>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
            
</section>
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
<br><a href="#home_section" class="btn btn-default nav-link"><i class="fa fa-space-shuttle"></i>OBTENIR LES SIGNAUX</a></div>
</div>
            
           
            <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
            	<div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<img src="assets/images/wc_icon6.png" alt="wc_icon3"/>
                    <h4>Formation téléphonique individuelle</h4>
                    <p>Une fois votre inscription validée, nous fixerons une date pour effectuer votre <b>formation téléphonique</b> afin de faire un point sur vos connaissances et vous donner <b>les clés de notre stratégie de trading</b>. <br> Vous serez donc en mesure de pouvoir suivre et comprendre parfaitement nos signaux et analyses. Nous tâchons d'effectuer <b>un suivi individuel</b> quotidien lors de vos 15 premiers jours avec nous. <br><br>⭐ Rassurez vous, <b>nous nous adaptons à votre niveau</b> et pouvons personnaliser le contenu de la formation sur-mesure.</p><br>
<a href="#home_section" class="btn btn-default nav-link"><i class="fa fa-calendar"></i>RESERVER MA SESSION</a>
                </div>
            </div>
 <div class="col-lg-4 col-md-6 col-sm-12">
            	<div class="box_wrap radius_box bg-white text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<span style="color: #193F87;"><i class="fa fa-life-ring fa-5x" aria-hidden="true"></i></span>

                    <h4>Support & entraide 24/7</h4>
                    <p>Nous avons mis en place un support en ligne pour <b>répondre à toutes vos questions</b>. <br>De plus, nous avons un <b>groupe public d'échange sur Telegram réunissant plus de 14.000 francophones</b> de tout niveaux partageant quotidiennement <b>informations et bons plans</b> dans l'objectif d'apprendre les uns des autres.</p>
<br><a href="#home_section" class="btn btn-default nav-link"><i class="fa fa-check-square-o"></i>S'INSCRIRE</a>                
</div>
            </div></div>
    	</div>
<style>
.btn.btn-radius {border-color: black !important;}</style>
<br><center><div id="temoin"><a target="_blank" href="https://fr.trustpilot.com/review/cryptotraders.fr"><img width="300em" src="cryptotruste.PNG"></a><a style="color:black" target="_blank" href="https://fr.trustpilot.com/review/cryptotraders.fr" class="btn btn-border-white btn-radius">Voir les avis <i class="fa fa-star" aria-hidden="true"></i></a></center>

<br><br><center><a href="#team" class="btn btn-default btn-radius">NOTRE EQUIPE<i class="ion-ios-arrow-thin-right"></i></a></center><br></div>
  	</div>
</section>
<!-- END SECTION WHY CHOOSE US --> 


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
<footer class="section_gradiant3" data-z-index="1" data-parallax="scroll" data-image-src="assets/images/roadmap_bg4.png">
    <div class="top_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <a href="#home_section" class="page-scroll">
                            <img alt="logo" width="70%" src="assets/images/logoblanc.png">
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

<!-- Latest jQuery -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- owl-carousel min js  -->
<script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
<!-- magnific-popup min js  -->
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<!-- waypoints min js  -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- parallax js  -->
<script src="{{asset('assets/js/parallax.js')}}"></script>
<!-- countdown js  -->
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- particles min js  -->
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<!-- scripts js -->
<script src="{{asset('assets/js/jquery.dd.min.js')}}"></script>
<!-- jquery.counterup.min js -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<!-- jquery.wavify js -->
<script src="{{asset('assets/js/spop.min.js')}}"></script>
<script src="{{asset('assets/js/notification.js')}}"></script>
<!-- scripts js -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{};
    Tawk_API.visitor = {
        name : '',
        email : '',
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
<script>

    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "fr",
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    function process(event) {
        $("#phone").intlTelInput("getSelectedCountryData").dialCode;
        $('input[name=phone]').val();
        $("#submitbutton").attr("disabled", true);
        return True;

    };

</script>
</body>
</html>
@include('sweetalert::alert')
