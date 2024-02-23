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

      <!-- Explore What Sets Us Apart -->
      <section id="explore-whole-content-id" class="explore-whole-content">
         <section class="explore_image--modified">
            <div class="explore__ask-text">
               <h1 class="explore__ask-text--layout">What sets us apart?</h1>
            </div>
            <div class="explore__ask-image">
               <img id="explore__ask-image-one" class="explore__ask-image--layout w3-animate-right" src="{{ asset('images/Questions-rafiki.png') }}" alt="">
               <img id="explore__ask-image-two" class="explore__ask-image--layout w3-animate-right" src="{{ asset('images/Social Growth-pana.png') }}" alt="" style="display: none;">
               <img id="explore__ask-image-three" class="explore__ask-image--layout w3-animate-right" src="{{ asset('images/college campus-bro.png') }}" alt="" style="display: none;">
            </div>
         </section>

         <section class="explore-define-content">
            <div id="explore-define-one" class="explore-define--layout w3-animate-opacity">

               <div class="explore-define__header">
                  <h1 class="explore-define__header--text">Explore Diverse Specimens</h1>
               </div>

               <div class="explore-define__details">
                  <p class="explore-define__details--text">Immerse yourself in a vast collection of meticulously preserved plant specimens, each a testament to the richness of our planet's flora.</p>
               </div>

               <div class="explore-define__button">
                  <button class="explore-define__button--layout" onclick="open_define_two()">Next</button>
               </div>
            </div>

            <div id="explore-define-two" class="explore-define--layout w3-animate-opacity" style="display: none;">
               <div class="explore-define__header">
                  <h1 class="explore-define__header--text">User-Generated Botanical Chronicles</h1>
               </div>
               <div class="explore-define__details">
                  <p class="explore-define__details--text">Become a part of our community by contributing your own botanical discoveries. Share your photos, documentations, and stories to create a collaborative tapestry of plant life.</p>
               </div>
               <div class="explore-define__button">
                  <button class="explore-define__button--layout" onclick="open_define_three()">Next</button>
               </div>
            </div>

            <div id="explore-define-three" class="explore-define--layout w3-animate-opacity" style="display: none;">
               <div class="explore-define__header">
                  <h1 class="explore-define__header--text">Educational Insights</h1>
               </div>
               <div class="explore-define__details">
                  <p class="explore-define__details--text">Gain insights into the fascinating world of botany. From detailed plant descriptions to ecological notes, our herbarium is a treasure trove of knowledge.</p>
               </div>
               <div class="explore-define__button">
                  <button class="explore-define__button--layout" onclick="open_define_return()">Return</button>
               </div>
            </div>
         </section>
      </section>

      <!-- Botany Gallery -->
      <section class="botanical-tale-content">
         <div>
            <h1 class="botanical-tale__header">Upload your botanical tales</h1>
         </div>

         <div class="botanical-tale__image-content">

         </div>

         <div>
            <p class="botanical-define__description">Have a unique plant discovery to share? Upload your photos and documentations to our Herbarium. Join a community passionate about preserving and celebrating the diverse tapestry of plant life.</p>
         </div>
      </section>

      <!-- Botany Community -->
      <section class="botanical-community-content">
         <section class="botanical-community__text-content">
            <div>
               <h1 class="botanical-community__header">Join the botanical community</h1>
            </div>

            <div>
               <p class="botanical-community__description">Connect with fellow plant enthusiasts, researchers, and botanists. Share your insights, seek identification help, and be a part of a global network united by a love for plants.</p>
            </div>
         </section>

         <section class="botanical-community__image-content">
            <img class="botanical-community__image" src="{{ asset('images/planting tree-bro.png')}}" alt="">
         </section>
      </section>

      <!-- Start Exploring -->
      <section class="start-exploring-content">
         <section>
            <div>
               <img class="start-exploring__image" src="{{ asset('images/Collection-amico.png')}}" alt="">
            </div>
         </section>

         <section>
            <div>
               <h1 class="start-exploring__header">Start Exploring Now</h1>
            </div>
            <div>
               <p class="start-exploring__description">Begin your botanical adventure with GreenArchive. Every page is a step into the green realms of discovery. Start exploring and contribute to the ever-growing compendium of plant knowledge.</p>
            </div>
         </section>
      </section>
   </main>

   <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>