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
            <button class="login__button-n-register login-btn">Login</button>
         </div>
         <div class="login__register-button">
            <button class="login__button-n-register register-btn">Register</button>
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
               <button class="description__scroll-button">Learn More!</button>
            </div>
         </section>
      </section>

      <!-- Eplore -->
      <section class="explore-whole-content">
         <div class="explore__bg-image-content">
            <img class="explore__bg-image" src="{{ asset('images/Questions-rafiki.png') }}" alt="">
         </div>
         
         <div class="explore__ask">
            <h1>What</h1>
            <h1>Sets</h1>
            <h1>Us Apart?</h1>
         </div>
         <div style="display: none;">
            <section>
               <div>
                  <h4>Explore Diverse Specimens</h4>
               </div>
               <div>
                  <p>Immerse yourself in a vast collection of meticulously preserved plant specimens, each a testament to the richness of our planet's flora.</p>
               </div>
            </section>

            <section>
               <div>
                  <h4>User-Generated Botanical Chronicles</h4>
               </div>
               <div>
                  <p>Become a part of our community by contributing your own botanical discoveries. Share your photos, documentations, and stories to create a collaborative tapestry of plant life.</p>
               </div>
            </section>

            <section>
               <div>
                  <h4>Educational Insights</h4>
               </div>
               <div>
                  <p>Gain insights into the fascinating world of botany. From detailed plant descriptions to ecological notes, our herbarium is a treasure trove of knowledge.</p>
               </div>
            </section>
         </div>            
      </section>

      <section>
         <section>
            <div>
               <h1>Upload your Botanical Tales</h1>
            </div>
            <div>
               <p>Have a unique plant discovery to share? Upload your photos and documentations to our Herbarium. Join a community passionate about preserving and celebrating the diverse tapestry of plant life.</p>
            </div>
         </section>
      </section>

      <section>
         <section>
            <div>
               <h1>Join the Botanical Community</h1>
            </div>

            <div>
               <p>Connect with fellow plant enthusiasts, researchers, and botanists. Share your insights, seek identification help, and be a part of a global network united by a love for plants.</p>
            </div>
         </section>
      </section>

      <section>
         <section">
            <div>
               <h1>Start Exploring Now</h1>
            </div>
            <div>
               <p>Begin your botanical adventure with GreenArchive. Every page is a step into the green realms of discovery. Start exploring and contribute to the ever-growing compendium of plant knowledge.</p>
            </div>
         </section>
      </section>
   </main>
</body>
</html>