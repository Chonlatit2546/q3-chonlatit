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

           

         <?php session_start();

         // ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือยัง
         if (!isset($_SESSION['username'])) { // สมมุติว่าคุณมีตัวแปรเซสชันชื่อ 'user_id' เมื่อเข้าสู่ระบบ
            header("Location: login-form.php"); // เปลี่ยนเส้นทางไปยังหน้า login
            exit(); // หยุดการทำงานของสคริปต์
         }
         ?>

         <?php
         if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
         }
         ?>
         <a href="cart.php?action=" style="color:blue;">สินค้าในตะกร้า (<?= sizeof($_SESSION['cart']) ?>)</a>
         <a href='logout.php' style='color:blue; margin-left:60%;' >ออกจากระบบ</a> 
         <div style="display:flex">
            <?php
            $stmt = $pdo->prepare("SELECT * FROM product");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
            ?>
               <div style="padding: 15px; text-align: center">
                  <a href="detail.php?pid=<?= $row["pid"] ?>">
                     <img src='../prod_photo/<?= $row["pid"] ?>.jpg' width='100'></a><br>
                  <?= $row["pname"] ?><br><?= $row["price"] ?> บาท<br>
                  <form method="post" action="cart.php?action=add&pid=<?= $row["pid"] ?>&pname=<?= $row["pname"] ?>&price=<?= $row["price"] ?>">
                     <input type="number" name="qty" value="1" min="1" max="<?= $row["quantity"] ?>">
                     <input type="hidden" name="quantity" value="<?= $row['quantity'] ?>">
                     <input type="submit" value="ซื้อ">
                  </form>
               </div>
            <?php } ?>
         </div>

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