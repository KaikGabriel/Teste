<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->


    <link rel="stylesheet" href="/css/styleSearch.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="/" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">sobre</a>
        <a href="#products">produtos</a>
        <a href="#categories">categorias</a>
      
     
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
       
        <a href="dashboard">
        <div class="fas fa-user" id="login-btn"></div>
        </a>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

  
    
  

</header>
<br>
<br>
<br>
<br>



            



          

<section class="categories" id="categories">

<h1 class="heading"> Resultado <span>Pesquisa</span> </h1>

<div class="box-container">
@foreach($produtos as $produto)
    <div class="box">
    <img  src="/image/produtos/{{$produto ->image}}" alt="">
    <h3>{{ $produto->nome}}</h3>
        <p>{{ $produto->valor}}</p>
        <p>{{ $produto->estado}} <A>-</A> {{ $produto->cidade}}</p>
        <p><a>Categoria - </a>{{ $produto->categoria}}</p>
        <p><a>Contato - </a>{{ $produto->contato}}</p>
        <p>{{ $produto->vendadoe}}</p>

    </div>
    
    @endforeach
</div>

</section>
      


    






<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> groco <i class="fas fa-shopping-basket"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> sobre </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> produtos </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categorias </a>
           
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</section>

<!-- footer section ends -->


