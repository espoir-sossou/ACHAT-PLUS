<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="{{asset('css/acceuil.css')}}">
    <link rel="stylesheet" href="{{asset('css/Slide_nav.css')}}">
   
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Labrada:wght@100;200;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300&family=Yatra+One&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ACHAT+</title>

    <script src="js/main.js"></script>

</head>
<body>
    <div class="">
        @yield("acceuil-body")
    </div>
   
    <div class="" style="z-index:-1; background-color:#C5E0D9">
        @yield('acceuil-connection')
    </div>
    <div class="">
        @yield('creation-compt')
    </div>
    <div class="">
        @yield('reinitialise-mot_pass')
    </div>
    <div class="">
        @yield('pannier-page')
    </div>
</body>

<footer class="footer pb-3" style="background-color: rgb(40, 37, 37); box-sizing:border-box;">
<div class="container" >
<div class="row">
    <h5 class="text-center mt-2" style="color: white">Restez à l'affût de nos actus et de nos engagements</h5>
    <div class="row mt-3">
        <div class="col-lg-6">
            <span class="sp1 ">Achat</span><span class="sp2">Plus</span>
            <p class="" style="color: white">Achat en Ligne</p>
        </div>
        <div class="col-lg-4">
            <h4 class="" style="color: white">Contactez-nous</h4>
            <p class="" style="color: white">espoirclavier0@gmail.com</p>
        </div>
        <div class="col-lg-2">

            <span><a href=""><i class=""><img src="/images/linkdin.png" width="25px" height="auto"  alt=""></i></a></span>
            <span><a href=""> <i class="" ><img src="/images/facebook.png" width="25px" height="auto"  alt=""></i></a></span>
            <span><a href=""><i class=""><img src="/images/whats.png" width="25px" height="auto"  alt=""></i></a></span>
            <span><a href=""> <i class=""><img src="/images/pinterest.png" width="25px" height="auto"  alt=""></i></a></span>
            <span><a href=""> <i class="" ><img src="/images/insta.png" width="25px" height="auto"  alt=""></i></a></span>
        </div>
    </div>
    <div class="mt-3 mb-4" style="padding: 0.5px; background-color: white;"></div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <p class="text-center"  style="color: white">Achat Plus , service d'achat en ligne.on propose avec nos meilleurs productions des articles ou produits de qualite. Achat Plus est l'une des sites e~commerce recent uploder en 2023. Bonne decouverte</p>
        </div>
        <div class="col-lg-2">
            <h5 class="text-center"  style="color: white">A PROPOS</h5>
            <p class="text-center"  style="color: white">
                À propos de Achat Plus
                La boutique en ligne
                Le blog
                IT charger
                </p>
        </div>
        <div class="col-lg-2">
            <h5 class="text-center"  style="color: white">LIENTS UTILS</h5>
        </div>
        <div class="col-lg-2">
            <h5 class="text-center"  style="color: white">CONTACTEZ</h5> 
            <p class="text-center"  style="color: white"> 
            Nous serions ravis de répondre à vos questions au 06 44 66 05 54 ou via notre <a href="#" class="color-danger">formulaire de contact
            </p></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8"></div>
    <div class="col-lg-4">
        <span><a href=""><i class=""><img src="/images/visa.png" width="45px" height="auto"  alt=""></i></a></span>
        <span><a href=""> <i class="" ><img src="/images/mastercard.png" width="45px" height="auto"  alt=""></i></a></span>
        <span><a href=""><i class=""><img src="/images/paypal.jpg" width="45px" height="auto"  alt=""></i></a></span>
        <span><a href=""> <i class=""><img src="/images/tmoney.png" width="45px" height="auto"  alt=""></i></a></span>
        <span><a href=""> <i class="" ><img src="/images/flooz.png" width="45px" height="auto"  alt=""></i></a></span>
    </div>
</div>
</div>
</footer>

</html>
