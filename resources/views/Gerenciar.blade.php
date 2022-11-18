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

    
        @foreach($produtos as $produto)
            <div class="swiper-slide box">

            <form action="/aprovar-produtos/{{$produto -> id}}" method ="post">
            @csrf
            @method('PUT')  


            <img src="/image/produtos/{{$produto ->image}}" alt="">

         
            <div class="content">
            <div class="user-details">

<div class="input-box">    
    
<input  type="text" name="nome" value="{{$produto -> nome}}" required>

</div>

                
                
<div class="input-box">

<input id="valor" type="text" value="{{$produto -> valor}}" name="valor" placeholder="R$ 0,00"  required>

</div>

               
                
<div class="input-box">

    <div class="select">    

        <select name="estado" value="{{$produto -> estado}}" id="estado">

        <option>Selecione o Estado (UF)</option>

          <option></option>

        </select>

    </div>

</div>


<div class="input-box">



    <div class="select">    

        <select name="cidade" value="{{$produto -> cidade}}" id="cidade">

        <option >Seleciona a Cidade</option>

         <option></option>

        </select>

    </div>

</div>

              

           
<div class="input-box">

<div class="select">
<select name="categoria" value="{{$produto-> categoria}}"  id="cidade">

<option value="Cesta Básica" {{ $produto->categoria == 'Cesta Básica' ? "selected='selected'" : "" }}>Cesta Básica</option>
<option value="Perecíveis" {{ $produto->categoria == 'Perecíveis' ? "selected='selected'" : "" }}>Perecíveis</option>
 <option value="Não Perecíveis" {{ $produto->categoria == 'Não Perecíveis' ? "selected='selected'" : "" }}>Não Perecíveis</option>

</select>
 </div>
 </div>


               
               
<div class="input-box">


<input type="text" name="contato" value="{{$produto-> contato}}"  required>

</div>

               
<div class="input-box">

<div class="select" value="{{$produto-> vendadoe}}">
<select name="vendadoe" id="cidade">

<option value="Venda" {{ $produto->vendadoe == 'Venda' ? "selected='selected'" : "" }}>Venda</option>
<option value="Doação" {{ $produto->categoria == 'Doação' ? "selected='selected'" : "" }}>Doação</option>
 

</select>
 </div>
 </div>
              

                <div style = "display: none;">
                <input type="text" name ="apr" value="{{0}}" >
                </div>
<br>
                <button class="btn">Editar</button>

                </div>
                <form></form>
                </div>
                </div>
           
@endforeach

        </div>

    </div>

</section>



<section class="products" id="products">

    <h1 class="heading"> Produtos <span> Aprovados </span></h1>
    @if(count($produtos) > 0)


    <div class="swiper product-slider">

        <div class="swiper-wrapper">


        @foreach($produtos -> where ('apr', 1) as $produto)
            <div class="swiper-slide box">
                <img src="/image/produtos/{{$produto ->image}}" alt="">
                <h3>{{ $produto -> nome}}</h3>

                <div class="price"> {{ $produto-> valor}} </div>

                <div class="price"
                > {{ $produto-> estado}} <a>-
                    
                </a> {{ $produto -> cidade}}</div>

              

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js" type="text/javascript"></script>
<script src="js/cidades.js" type="text/javascript"></script>


<script>
 const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

</script>

  <script>
jQuery(function() {
    
    jQuery("#valor").maskMoney({
	prefix:'R$ ', 
	thousands:'.', 
	decimal:','
})

});
</script>

</body>
</html>