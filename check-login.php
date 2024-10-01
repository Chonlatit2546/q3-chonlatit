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

         <?php
         include "connect.php";

         session_start();

         $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ? AND password = ?");
         $stmt->bindParam(1, $_POST["username"]);
         $stmt->bindParam(2, $_POST["password"]);
         $stmt->execute();
         $row = $stmt->fetch();

         // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
         if (!empty($row)) {
            // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
            $_SESSION["fullname"] = $row["name"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"] = $row["role"];

           
   
            // แสดง link เพื่อไปยังหน้าต่อไปหลังจากตรวจสอบสำเร็จแล้ว
            echo "เข้าสู่ระบบสำเร็จ<br>";

            header("Location: index.php");
            //echo "<a href='user-home.php' style='color:blue;'>ไปยังหน้าหลักของผู้ใช้</a>";

            // กรณี username และ password ไม่ตรงกัน
         } 
         else {
            echo "ไม่สำเร็จ ชื่อหรือรหัสผ่านไม่ถูกต้อง";
            echo "<a href='login-form.php' style='color:blue;'>เข้าสู่ระบบอีกครัง</a>";
         }
         ?>

      </article>
      <nav id="menu">
         <h2>Navigation</h2>
         <ul class="menu">
            <li class="dead"><a>Home</a></li>
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