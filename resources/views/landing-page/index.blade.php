<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="language" content="English">
   <meta name="title" content="Green Archive">
   <meta name="description" content="This webpage is all about Herbarium Content">
   <meta name="robots" content="index, follow">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="Castro John Christian">
   <title>GreenArchive | Welcome</title>
   <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
   <link rel="icon" href="{{ asset('images/GreenArchive-Logo.ico') }}" type="image/x-icon">
</head>

<body class="whole-content">
   <header class="navbar">
      <section class="logo">
         <img class="logo__greenarchive-logo--modified" src="{{ asset('images/GreenArchive Logo.png') }}" alt="Green Archive Logo">
      </section>
      <section class="login">
         <div class="login__login-button">
            <a class="login__button-n-register login-btn" href="{{ route('login.account') }}">Login</a>
         </div>
         <div class="login__register-button">
            <a class="login__button-n-register register-btn" href="{{ route('register.account') }}">Register</a>
         </div>
      </section>
   </header>

   <main class="main-content">
      <!--Section Greetings -->
      <section class="greetings-whole-content">

         <section class="greetings__image">
            <div>
               <img class="section-image__potted-plants--modified" src="{{ asset('images/potted plants-rafiki.png') }}" alt="">
            </div>
         </section>

         <section class="greetings__details">
            <div>
               <h1 class="greetings__welcome-text">Welcome To </h1>
            </div>
            <div>
               <h1 class="greetings__greenarchive-text">GreenArchive!</h1>
            </div>
            <div>
               <p class="greetings__slogan-text">[Unveiling the Botanical Wonders of our World]</p>
            </div>
            <div>
               <p class="description__text">Discover the enchanting world of plant biodiversity with GreenArchive. As a hub for botanical exploration and documentation, we invite you to embark on a journey through the lush landscapes of nature, where each leaf tells a unique story.</p>
            </div>

            <div class="description__scroll-content">
               <a class="description__scroll-button" href="#explore-whole-content-id">Learn More!</a>
            </div>
         </section>
      </section>
   </main>

</body>

</html>