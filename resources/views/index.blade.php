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
   <main class=main-content>

      <!--Section Greetings -->
      <section class="greetings-whole-content">
         <section class="greetings__content">
            <div>
               <img class="greetings__mobile-image--modified" src="{{ asset('images/strelitzia plant-rafiki.png') }}" alt="">
            </div>

            <div class="greetings__welcome">
               <div>
                  <h1 class="greetings__welcome-text">Welcome To</h1>
               </div>
               <div>
                  <h1 class="greetings__greenarchive-text">GreenArchive!</h1>
               </div>
            </div>

            <div>
               <p class="greetings__slogan-text">[Unveiling the Botanical Wonders of our World]</p>
            </div>
         </section>

         <section>
            <div>
               <img class="section-image__potted-plants--modified" src="{{ asset('images/potted plants-rafiki.png') }}" alt="">
            </div>
         </section>

         <section class="description">
            <div>
               <p class="description__text">Discover the enchanting world of plant biodiversity with GreenArchive. As a hub for botanical exploration and documentation, we invite you to embark on a journey through the lush landscapes of nature, where each leaf tells a unique story.</p>
            </div>

            <div class="description__scroll-content">
               <a class="description__scroll-button" href="#explore-whole-content-id">Learn More!</a>
            </div>
         </section>
      </section>

      <!-- Eplore -->
      <section id="explore-whole-content-id" class="explore-whole-content">

         <div id="explore-ask-main" class="explore__ask w3-animate-opacity">
            <div class="explore__ask-text">
               <div>
                  <h1 class="explore__ask-text--layout">What</h1>
               </div>

               <div>
                  <h1 class="explore__ask-text--layout">Sets</h1>
               </div>

               <div>
                  <h1 class="explore__ask-text--layout">Us Apart?</h1>
               </div>
            </div>

            <div class="explore__ask-image">
               <img class="explore__ask-image--layout" src="{{ asset('images/Questions-rafiki.png') }}" alt="">
            </div>

            <div class="explore__ask-next-btn">
               <button id="next-btn-main" class="next-btn--layout" onclick="open_define_one()">Next</button>
            </div>

         </div>

         <div class="explore-define-content">
            <section id="explore-define-one" class="explore-define__section w3-animate-opacity" style="display: none;">
               <div>
                  <img class="explore-define__images" src="{{ asset('images/Wilderness-rafiki.png') }}" alt="">
               </div>

               <div>
                  <div>
                     <h4 class="explore-define__header">Explore Diverse Specimens</h4>
                  </div>
                  <div>
                     <p class="explore-define__description">Immerse yourself in a vast collection of meticulously preserved plant specimens, each a testament to the richness of our planet's flora.</p>
                  </div>
               </div>

               <div>
                  <button id="next-btn-one" class="next-btn--layout" onclick="open_define_two()">Next</button>
               </div>
            </section>

            <section id="explore-define-two" class="explore-define__section w3-animate-opacity" style="display: none;">
               <div>
                  <img class="explore-define__images" src="{{ asset('images/Social Growth-pana.png') }}" alt="">
               </div>

               <div>
                  <div>
                     <h4 class="explore-define__header">User-Generated Botanical Chronicles</h4>
                  </div>
                  <div>
                     <p class="explore-define__description">Become a part of our community by contributing your own botanical discoveries. Share your photos, documentations, and stories to create a collaborative tapestry of plant life.</p>
                  </div>
               </div>

               <div>
                  <button id="next-btn-two" class="next-btn--layout" onclick="open_define_three()">Next</button>
               </div>
            </section>

            <section id="explore-define-three" class="explore-define__section w3-animate-opacity" style="display: none;">
               <div>
                  <img class="explore-define__images" src="{{ asset('images/college campus-bro.png') }}" alt="">
               </div>

               <div>
                  <div>
                     <h4 class="explore-define__header">Educational Insights</h4>
                  </div>
                  <div>
                     <p class="explore-define__description">Gain insights into the fascinating world of botany. From detailed plant descriptions to ecological notes, our herbarium is a treasure trove of knowledge.</p>
                  </div>
               </div>

               <div>
                  <button id="next-btn-three" class="next-btn--layout" onclick="open_define_return()">Return</button>
               </div>
            </section>
         </div>
      </section>

      <!-- Botany Gallery -->
      <section class="botanical-tale-content">
         <section>
            <div>
               <img class="botanical-tale__image" src="{{ asset('images/Image upload-bro.png') }}" alt="">
            </div>
         </section>

         <section>
            <div>
               <h1 class="botanical-tale__header">Upload your Botanical Tales</h1>
            </div>
            <div>
               <p class="botanical-define__description">Have a unique plant discovery to share? Upload your photos and documentations to our Herbarium. Join a community passionate about preserving and celebrating the diverse tapestry of plant life.</p>
            </div>
         </section>
      </section>

      <!-- Botanical Community -->
      <section class="botanical-community-content">
         <sectio>
            <div>
               <img class="botanical-community__image" src="{{ asset('images/planting tree-bro.png')}}" alt="">
            </div>
         </sectio>
         <section>
            <div>
               <h1 class="botanical-community__header">Join the Botanical Community</h1>
            </div>

            <div>
               <p class="botanical-community__description">Connect with fellow plant enthusiasts, researchers, and botanists. Share your insights, seek identification help, and be a part of a global network united by a love for plants.</p>
            </div>
         </section>
      </section>

      <!-- Start Exploring -->
      <section class="start-exploring-content">
         <section>
            <div>
               <img class="start-exploring__image" src="{{ asset('images/Collection-amico.png')}}" alt="">
            </div>
         </section>

         <section">
            <div>
               <h1 class="start-exploring__haeder">Start Exploring Now</h1>
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