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
            <button>Login</button>
         </div>
         <div class="login__register-button">
            <button>Register</button>
         </div>
      </section>
   </header>
   <main class=main-content>
   
      <!--Section Greetings -->
      <section class="greetings">
         <section>
            <div>
               <h1 class="greetings__welcome">Welcome to<span class="greetings__span-greenarchive"><br>GreenArchive!</span></h1>
            </div>

            <div>
               <h5 class="greetings__welcome--subscript">[Unveiling the Botanical Wonders of our World]</h5> 
            </div>
         </section>

         <section class="section-image">
            <div>
               <img class="section-image__potted-plants--modified" src="{{ asset('images/potted plants-rafiki.png') }}" alt="">
            </div>
         </section>      
      </section>

      <section class="description">
         <div>
            <p class="description__layout">Discover the enchanting world of plant biodiversity with GreenArchive. As a hub for botanical exploration and documentation, we invite you to embark on a journey through the lush landscapes of nature, where each leaf tells a unique story.</p> 
         </div>
      </section>

      <section class="articles">
         <div class="articles__header">
            <h1>What Sets Us Apart?</h1>
         </div>
         <div class="articles__content">
            <section class="articles__card">
               <div>
                  <h4 class="articles__card-header">Explore Diverse Specimens</h4>
               </div>
               <div>
                  <p class="articles__card-content">Immerse yourself in a vast collection of meticulously preserved plant specimens, each a testament to the richness of our planet's flora.</p>
               </div>
            </section>

            <section class="articles__card">
               <div>
                  <h4 class="articles__card-header">User-Generated Botanical Chronicles</h4>
               </div>
               <div>
                  <p class="articles__card-content">Become a part of our community by contributing your own botanical discoveries. Share your photos, documentations, and stories to create a collaborative tapestry of plant life.</p>
               </div>
            </section>

            <section class="articles__card">
               <div>
                  <h4 class="articles__card-header">Educational Insights</h4>
               </div>
               <div>
                  <p class="articles__card-content">Gain insights into the fascinating world of botany. From detailed plant descriptions to ecological notes, our herbarium is a treasure trove of knowledge.</p>
               </div>
            </section>
         </div>            
      </section>

      <section class="gallery">
         <section class="gallery__description">
            <div>
               <h1>Upload your Botanical Tales</h1>
            </div>
            <div>
               <p>Have a unique plant discovery to share? Upload your photos and documentations to our Herbarium. Join a community passionate about preserving and celebrating the diverse tapestry of plant life.</p>
            </div>
         </section>
      </section>

      <section class="community">
         <section class="community__join">
            <div>
               <h1>Join the Botanical Community</h1>
            </div>

            <div>
               <p>Connect with fellow plant enthusiasts, researchers, and botanists. Share your insights, seek identification help, and be a part of a global network united by a love for plants.</p>
            </div>
         </section>
      </section>

      <section class="start-explore">
         <section class="start-explore__now">
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