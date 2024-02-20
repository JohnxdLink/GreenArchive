<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<form method="" action=""> 
               <div>
                  <div>
                     <label for="name">Username</label>
                     <input type="text" name="name" id="name" placeholder="Username" required>
                  </div>

                  <div>
                     <label for="email">Email</label>
                     <input type="text" name="email" id="email" placeholder="Email" required>
                  </div>

                  <div>
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" placeholder="Password" required>
                  </div>

                  <div>
                     <label for="confirmed_password">Confirm Password</label>
                     <input type="password" name="confirmed_password" id="confirmed_password" placeholder="Confirm Password" required>
                  </div>

                  <div>
                     <label for="location">Address</label>
                     <input type="text" name="location" id="location" placeholder="Location">
                  </div>

                  <div>
                     <label for="occupation">Occupation</label>
                     <input type="text" name="occupation" id="occupation" placeholder="Occupation">
                  </div>

                  <div>
                     <label for="bio">Biography</label>
                     <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
                  </div>

                  <div>
                     <label for="certified_botanist">Certified Botanist</label>
                     <input type="checkbox" name="certified_botanist" id="certified_botanist" value="1">                  
                  </div>

                  <div>
                     <input type="checkbox" name="agree_terms" id="agree_terms" value="1" required>
                     <label for="agree_terms">I agree to the terms and conditions</label>
                  </div>
               </div>

               <div>
                  <input type="submit" value="Register">
               </div>
            </form>
</body>
</html>