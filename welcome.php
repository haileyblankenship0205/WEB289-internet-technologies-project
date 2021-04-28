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
    <title>Paul's Pottery - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
  </head>

	<body>
    <header id="page-header" role="banner" aria-label="document-header">
      <div id="heading">
        <h1>Welcome, <?php echo $_SESSION['user']['user_first_name']; ?></h1>
        <p>Shop handmade pottery items made by Paul Canalia</p>
      </div>
      <div>
        <img src="images/paul.jpg" alt="Paul the artist of the pottery">
      </div>
    </header>
  
    <?php include 'private/user-nav.php'; ?>

    <main>
      <h2>What Makes Paul's Pottery So Special</h2>
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
        <p>My creative process begins like most people begin their own creative process: with lots of brainstorming. I start by sketching as many 
        ideas as possible to find a good form to work on. The shape or form of each piece, in my opinion, is the most important aspect of brainstorming, 
        as it provides the foundation for the entire piece. Once I have an established form to work towards, I do just that: I start shaping the clay 
        to this form to the best of my abilities. A bit of variation from the original idea is okay to me, this just adds a little personality to the 
        works. Working on the wheel especially, there is going to be some "imperfections" in each form and that is okay! I enjoy finding these 
        differences and finding a way to accentuate them. After either throwing the clay on the wheel or forming the clay using other methods like 
        rigid slab or coiling, it's time for the bisque fire. This vitrifies the clay, turning the form from a maleable, absorbent material into an 
        almost glass-like state, making it water tight and much more durable. At this point the glaze can be applied to the pieces. This stage is 
        my favorite, as it allowes me to be a bit more free in my creativity. Rather than adhering to a strict form, I can be gestural with the glaze 
        and allow each piece to be different while still conveying an over-arcing idea as a collection of pieces of art. Once glaze is applied, 
        the pottery goes back into the kiln for it's final firing. Like the clay body vitrified in the first firing, this time the same thing happens 
        to the glaze. The glaze goes from a chalky state to a glass state, giving the piece a glossy and vibrant look while also adding strength and 
        durability. At this point the pottery is complete! I either enjoy using my works myself or sell (sometimes give away) my work to others for 
        them to enjoy.</p>
      </main>
</body>
</html>