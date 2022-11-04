<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> ---------->
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Área Restrita</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#33b5e5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="./css/meucss.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <link rel='stylesheet' id='roboto-subset.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5' type='text/css' media='all' />
    <meta charset="utf-8">
    <meta name="description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta name="image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta itemprop="name" content="Bootstrap Login Form - free examples, templates &amp; tutorial">
    <meta itemprop="description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta itemprop="image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Bootstrap Login Form - free examples, templates &amp; tutorial">
    <meta property="twitter:description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta property="twitter:site" content="@MDBootstrap">
    <meta property="twitter:creator" content="@MDBootstrap">
    <meta property="twitter:image:src" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta property="twitter:player" content="">
    <meta property="og:title" content="Bootstrap Login Form - free examples, templates &amp; tutorial">
    <meta property="og:description" content="Responsive login form built with Bootstrap 5. Collection of examples for signup forms, full page login templates, login modals &amp; many other sign in designs.">
    <meta property="og:image" content="https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg">
    <meta property="og:url" content="https://mdbootstrap.com/docs/standard/extended/login/">
    <meta property="og:site_name" content="MDB - Material Design for Bootstrap">
    <meta property="og:locale" content="en_US">
    <meta property="og:video" content="">
    <meta property="fb:admins" content="443467622524287">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/favicon.ico" />
    <link rel="canonical" href="https://mdbootstrap.com/docs/standard/extended/login/" />
    <script data-cfasync="false">
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W7MBMN');
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "MDBootstrap",
                "item": "https://mdbootstrap.com/",
                "image": "https://mdbcdn.b-cdn.net/img/Marketing/mdb-press-pack/mdb-main.webp"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "Standard",
                "item": "https://mdbootstrap.com/docs/standard/",
                "image": "https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp"
            }, {
                "@type": "ListItem",
                "position": 3,
                "name": "Login form",
                "item": "https://mdbootstrap.com/docs/standard/extended/login/",
                "image": "https://mdbcdn.b-cdn.net/docs/standard/extended/login/assets/featured.jpg"
            }]
        }
    </script>

    <style>
        #navbarNotification::after {
            content: none !important;
        }

         
        #main-navbar .badge {
            position: absolute;
            font-size: .6rem;
            margin-top: -.1rem;
            margin-left: -.5rem;
            padding: .2em .45em;
        }

         
        #main-navbar .nav-link {
            color: rgba(0, 0, 0, .55) !important;
            font-size: 1rem !important;
            font-weight: 400;
        }

        #main-navbar .nav-link :hover {
            color: rgb(76, 76, 76);
        }


         
        [aria-labelledby=new-mdb-technologies-dropdown] li {
            background-color: rgb(255, 255, 255) !important;
        }

        [aria-labelledby=new-mdb-technologies-dropdown] li :hover {
            background-color: #EEEEEE !important;
            box-shadow: none !important;
        }

        [aria-labelledby=userDropdown] a {
            background-color: rgb(255, 255, 255) !important;
            box-shadow: none !important;
        }

        [aria-labelledby=userDropdown] a:hover {
            background-color: #EEEEEE !important;
        }

        #navbarNotificationContent a {
            background-color: rgb(255, 255, 255) !important;
            box-shadow: none !important;
        }

        #navbarNotificationContent a:hover {
            background-color: #EEEEEE !important;
        }

        .dropdown-item-pseudo-focus {
            background-color: rgba(0, 0, 0, 0.05) !important;
            box-shadow: none !important;
        }
    </style>
    <style>
        .docs-pills {
            border-radius: 0.5rem;
        }
    
        .docs-pills pre[class*="language-"] {
            border-bottom-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
    
        .docs-pills .btn-copy-code,
        .docs-tab-content .export-to-snippet {
            position: absolute;
            top: 16px;
            right: 16px;
            box-shadow: none !important;
            color: #616161 !important;
            background-color: transparent !important;
            padding: 6px 15px !important;
        }
    </style>
    <style>
        @media (max-width: 576px) {
            [id^=dpl-], [class^=dpl-], .mobile-hidden {
                display: none!important;
            }
        }
    </style>
</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
			
			<?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
				<form method="POST" action="valida.php">
              <h2 class="fw-bold mb-2 text-uppercase">Área de Login!</h2>
              <p class="text-white-50 mb-5"></p>

              <div class="form-outline form-white mb-4">
                <input type="email" name="email" placeholder="Email" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="senha" placeholder="Senha" class="form-control form-control-lg" />
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu senha?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Logar</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Criar conta? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>