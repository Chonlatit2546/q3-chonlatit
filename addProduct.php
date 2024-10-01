<?php include "../connect.php" ?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>CS Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="mcss.css" rel="stylesheet" type="text/css" />
    <script src="mpage.js"></script>
  </head>

  <body>

    <header>
      <div class="logo">
        <img src="cslogo.jpg" width="200" alt="Site Logo">
      </div>
      <div class="search">
        <form>
          <input type="search" placeholder="Search the site...">
          <button>Search</button>
        </form>
      </div>
    </header>

    <div class="mobile_bar">
      <a href="#"><img src="responsive-demo-home.gif" alt="Home"></a>
      <a href="#" onClick='toggle_visibility("menu"); return false;'><img src="responsive-demo-menu.gif" alt="Menu"></a>
    </div>

    <main>
      <article>

      <h1>Add product</h1>

      <form action="./addProduct_db.php" method="post" enctype="multipart/form-data" style="display:flex;flex-direction: column;gap:2px;">

      <label for="pname">product name:</label>
      <input type="text" name="pname">
      <br>

      <label for="pdetail">detail:</label>
      <input type="text" name="pdetail">
      <br>

      <label for="price">price:</label>
      <input type="text" name="price">
      <br>

      <label for="quantity">quantity:</label>
      <input type="text" name="quantity">
      <br>

      <label for="picture">picture:</label>
      <input type="file" name="picture">
      <br>

      <input type="submit" value="add">
   </form>
      </article>
      <nav id="menu">
        <h2>Navigation</h2>
        <ul class="menu">
        <li class="dead"><a href="./index.php">Home</a></li>
            <li><a href="./deleteProduct.php">Delete Product</a></li>
            <li><a href="./addProduct.php">Add Product</a></li>
            <li><a href="./editProduct.php">Edit Product</a></li>
            <li><a href="./member.php">Member</a></li>
            <li><a href="./deleteMember.php">Delete Member</a></li>
            <li><a href="./addMember.php">Add Member</a></li>
            <li><a href="./editMember.php">Edit Member</a></li>
            <li><a href="./user-home.php">Order</a></li>
            <li><a href="./Lab7.php">lab7</a></li>
            <li><a href="./mpage1.php">workshop1</a></li>
            <li><a href="./mpage2.php">workshop2</a></li>
            <li><a href="./mpage3.php">workshop3</a></li>
            <li><a href="./mpage4.php">workshop4</a></li>
            <li><a href="./mpage5.php">workshop5</a></li>
            <li><a href="./mpage6.php">workshop6</a></li>
            <li><a href="./mpage7.php">workshop7</a></li>
            <li><a href="./mpage9.php">workshop9</a></li>
        </ul>
      </nav>
      <aside>
        <h2>Aside</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit libero sit amet nunc ultricies, eu feugiat diam placerat. Phasellus tincidunt nisi et lectus pulvinar, quis tincidunt lacus viverra. Phasellus in aliquet massa. Integer iaculis massa id dolor venenatis scelerisque.
          <br><br>
        </p>
      </aside>
    </main>
    <footer>
      <a href="#">Sitemap</a>
      <a href="#">Contact</a>
      <a href="#">Privacy</a>
    </footer>
  </body>
</html>