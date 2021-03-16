<?php 
  include('functions.php');
  if (!isLoggedIn()) {
	  $_SESSION['msg'] = "You must log in first";
	  header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Pauls Pottery - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
  </head>

	<body>
  <header id="page-header" role="banner" aria-label="document-header">
      <div>
        <h1>Welcome</h1>
        <p>Shop handmade pottery items made by Paul Canalia</p>
      </div>
      <div>
        <img src="images/paul.jpg" alt="Paul the artist of the pottery">
      </div>
    </header>

    <nav role="navigation">
      <label for="nav-checkbox" id="nav-trigger">Menu</label>
      <input type="checkbox" id="nav-checkbox">
      <ul>
        <li><a href="welcome.php">Home</a></li>
        <li><a href="customer-shop.php">Shop</a></li>
		    <li><a href="account.php">Account</a></li>
      </ul>
      
    </nav>
	
    <main>
      <h2>What Makes Pauls Pottery So Special</h2>
      <p>My art, mainly my pottery, appeals to what I see as the most primal and instinctual feeling when observing art: aesthetic. Paired with this, 
        is the functionality pottery can have, such as a mug, teapot, and a dish for it all to sit upon. Clay, to me is one medium that anyone can pick 
        up and begin to create, no matter the skill level. Sure, anyone can pick up a pencil and draw, and eventually create something they can be proud
        of. But clay with its tactile properties, is so much more appealing and inviting in my opinion. My work expresses this relationship of form 
        and function with simple yet clean shapes and gestural use of glaze. I have drawn from antique Japanese pottery, as I am interested in not only 
        the making of Japanese pottery but also the history of the country as well. A method called “wabi sabi” is the art of imperfection in Japanese 
        pottery, and though this normally refers to the imperfection of the thrown form, I have taken this idea and made it my own and applied it to my 
        use of glaze. A specific style of Japanese pottery I have drawn from is “Onta-yaki” or Onta ware. The use of chattering, or allowing a carving 
        tool to skip across the clay while spinning on the wheel creates repetitive patterns in the clay. This can also be done with the glaze itself,
        and this has influenced my use of glaze as well. Another inspiration for my pottery is an accomplished artist names Steve Kelly. Like all artists,
        I strive to create original works, however every time I see one of Steve’s works, I feel as though I could have made it myself! His use of very 
        crisp and clean lines, to me, is one of the most perfect examples of virtuosity. Coincidentally he also has work with a gestural use of glaze, 
        and this juxtaposed against the symmetric and clean shape of the vessel plays perfectly together. I had the pleasure to speak with Kelly and he 
        gave me some excellent advice for creating and consistency. I strive to display not only my skill as an artist but to also display my interests, 
        and in turn my influences. In doing so the product, to me, is a well balanced form that is clean and sharp, but also spontaneous and maybe just a 
        little bit whimsical.</p>

        <h2>How Paul Makes His Pottery</h2>
      </main>
</body>
</html>