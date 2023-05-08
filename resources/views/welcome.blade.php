<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    {{-- font awesome link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    {{-- mi archivo personalizado de css --}}
    @vite(['resources/css/app.css', 'resources/js/scripts.js'])
    
</head>
<body>
    {{-- Inicio del header --}}

    <header class="header">
        <a href="#" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="Busca aquí...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-1.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-2.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-3.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-4.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">100.000 Gs.</div>
                </div>
            </div>
            <a href="#" class="btn">Salir ahora</a>
        </div>
    </header>

    {{-- Fin del header --}}

    {{-- Inicio del home --}}

    
    <section class="home" id="home">
        <div class="content">          
            <h1>Elias Buffet</h1>
            <p></p>
            <a href="#" class="btn">Menú</a>
        </div>
    </section>

    {{-- Fin del home --}}

    {{-- Inicio del about us --}}

    <section class="about" id="about">

        <h3 class="heading"> <span> Sobre </span> nosotros </h3>
        <div class="row">
            <div class="image">
                <img src="images/nosotros-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>Qué hace que nuestro comedor sea especial?</h3>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem enim culpa, molestias modi a labore exercitationem quis eligendi nam fugit corporis officiis tempora amet, reiciendis, voluptatibus quod cupiditate non unde?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum exercitationem placeat non voluptatibus! Illum recusandae molestias placeat voluptas aliquid expedita?</p>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div>
        
    </section>

    {{-- Fin del about us --}}

    {{-- Inicio del menú --}}

    <section class="menu" id="menu">
        <h3 class="heading"> NUESTRO <span> MENÚ </span></h3>

        <div class="categoria-container">
            <h2>Carnes</h2>
            <br>
            <div class="box-container">
                @foreach ($Carnes as $carne)
                    <div class="box">
                        <img src="images/{{ $carne->foto }}" alt="">
                        <h3>{{ $carne->nombre }}</h3>
                    </div>
                @endforeach
            </div>

            <h2>Guarnisiones</h2>
            <br>
            <div class="box-container">
                @foreach ($Guarnisiones as $guarnision)
                    <div class="box">
                        <img src="images/{{ $guarnision->foto }}" alt="">
                        <h3>{{ $guarnision->nombre }}</h3>
                    </div>
                @endforeach
            </div>

            <h2>Ensaladas</h2>
            <br>
            <div class="box-container">
                @foreach ($Ensaladas as $ensalada)
                    <div class="box">
                        <img src="images/{{ $ensalada->foto }}" alt="">
                        <h3>{{ $ensalada->nombre }}</h3>
                    </div>
                @endforeach
            </div>

            <h2>Jugos</h2>
            <br>
            <div class="box-container">
                @foreach ($Jugos as $jugo)
                    <div class="box">
                        <img src="images/{{ $jugo->foto }}" alt="">
                        <h3>{{ $jugo ->nombre }}</h3>
                    </div>
                @endforeach
            </div>

        </div>
        
    </section>    

    {{-- Fin del menú --}}


    <section class="review" id="review">

        <h3 class="heading">RESEÑA <span> DE CLIENTES </span> </h3>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores sed vel beatae ab, illo natus doloremque eum impedit laborum!</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>Elias Gonzalez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores sed vel beatae ab, illo natus doloremque eum impedit laborum!</p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3>Elias Gonzalez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolores sed vel beatae ab, illo natus doloremque eum impedit laborum!</p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3>Elias Gonzalez</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h3 class="heading"> <span> contacta con </span> nosotros </h3>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5092.3667300780335!2d-54.61029298615985!3d-25.510147142502746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f6854c573a7187%3A0x8598b961c21c034!2sDudu%20Empanadas%20-%20Mister%20Burger!5e0!3m2!1ses!2spy!4v1664889207518!5m2!1ses!2spy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">

                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Número">
                </div>
                <input type="submit" value="Escribenos" class="btn">

            </form>
        </div>

    </section>

    {{-- Inicio del footer --}}

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </div>

        <div class="credit"> Created by <span> Elias Gonzalez </span> | all rights reserved </div>

    </section>

    {{-- Fin del footer --}}





    {{-- mi archivo personalizado de javascript --}}
    <script src="js/script.js"></script>
</body>
</html>