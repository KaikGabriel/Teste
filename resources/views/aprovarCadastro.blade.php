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
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>

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

<!-- header section ends -->

<!-- home section starts  -->

<br>
<br>
<br>
<br>
<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Produtos <span> Registrados</span> </h1>

  
    <div class="swiper product-slider">

        <div class="swiper-wrapper">
        @foreach($produtos -> where ('apr', 0) as $produto)
            <div class="swiper-slide box">
                <img src="/image/produtos/{{$produto ->image}}" alt="">
                <h3>{{ $produto->nome}}</h3>

                <div class="price"> {{ $produto->valor}} </div>

                <div class="price"> {{ $produto->estado}} <a>-</a> {{ $produto->cidade}}</div>

              

                <div class="price"> <a>Categoria - </a>{{ $produto->categoria}} </div>

                <div class="price"> <a>Contato - </a>{{ $produto->contato}} </div>

                <div class="price"> <a>  </a>{{ $produto->vendadoe}} </div>

               <form action="/aprovar-produtos/{{$produto -> id}}" method ="post">
                @csrf
                @method('PUT')

                <div style = "display: none;">
                <input type="text" name ="nome" value="{{$produto-> nome}}">
                <input type="text" name ="valor" value="{{$produto-> valor}}">
                <input type="text" name ="estado" value="{{$produto-> estado}}">
                <input type="text" name ="cidade" value="{{$produto-> cidade}}">
                <input type="text" name ="categoria" value="{{$produto-> categoria}}">
                <input type="text" name ="contato" value="{{$produto-> contato}}">
                <input type="text" name ="vendadoe" value="{{$produto-> vendadoe}}">
                <input type="text" name ="apr" value="{{1}}" >
                </div>

                <button class="btn">Aprovar</button>


                </form>
                <form action="/produto/{{$produto->id}}" method ="POST">

                    @csrf
                    @method('DELETE')
                    
                    <button type ="submit">
                    <a class="btn">Negar</a>

                    </button>
                </form>
               
      
                    </div>
@endforeach

        </div>

    </div>

</section>



<section class="products" id="products">

    <h1 class="heading"> Nossos <span>Ps</span> </h1>
    @if(count($produtos) > 0)


    <div class="swiper product-slider">

        <div class="swiper-wrapper">


        @foreach($produtos -> where ('apr', 1) as $produto)
            <div class="swiper-slide box">
                <img src="/image/produtos/{{$produto ->image}}" alt="">
                <h3>{{ $produto -> nome}}</h3>

                <div class="price"> {{ $produto-> valor}} </div>

                <div class="price"> {{ $produto-> estado}} <a>-</a> {{ $produto -> cidade}}</div>

              

                <div class="price"> <a>Categoria - </a>{{ $produto ->categoria}} </div>

                <div class="price"> <a>Contato - </a>{{ $produto ->contato}} </div>

                <div class="price"> <a>  </a>{{ $produto ->vendadoe}} </div>

                
                </form>
                <form action="/produto/{{$produto->id}}" method ="POST">

                    @csrf
                    @method('DELETE')
                    
                    <button type ="submit">
                    <a class="btn">Deletar</a>

                    </button>
                </form>
               
               
            </div>
@endforeach
      
           

        </div>
@else
<h1>

</h1>
@endif
    </div>

    
  

    </div>

</section>


<!-- products section ends -->

<!-- categories section starts  -->



<!-- categories section ends -->

<!-- review section starts  -->



<!-- review section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

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















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>