<!DOCTYPE html>
<html lang="en-EN">

<head>
  <meta charset="UTF-8">
  <title>PROGRAMARE</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--ion icons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--ion icons-->

  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--google fonts-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

  <!--google fonts-->


  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<header>
<!--less than 959px--------------------------------------------------------------------------------------------------------------->

<nav class="topnav">

      <!-- <a href="#home" class="logo">Logo</a> -->

      <a href="../index.html" class="logo">

        <div class="logoWords">
          <span>Cabinet</span>
          <span>Stomatologic</span>
        </div>
      </a>

      <!-- Navigation links (hidden by default) -->
      <div id="myLinks">
        <!-- <a class="active" href="index.html">Home</a> -->
        <a href="../company.html">Companie</a>
        <a href="../team.html">Echipa</a>
        <a href="../manopere.html">Manopere</a>
        <a href="../reduceri.html">Reduceri</a>
        <a href="../medicina-generala.html">Medicina generala</a>
        <a href="../tehnica-dentara.html">Tehnica dentara</a>
        <a href="../contact.html">Contact</a>
      </div>
      <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>

    </nav>

<!---more than 960px------------------------------------------------------------------------------------>
  <!-- The navigation menu -->
  <nav class="navbar">

    <div id="left">
      <a href="../index.html" class="logo screen">

        <div class="logoWords screen-logo">
          <span>Cabinet</span>
          <span>Stomatologic</span>
        </div>
      </a>
    </div>

    <div id="right">
    <!-- <a href="#home" class="active">Home</a> -->
    <a href="../contact.html" style="font-weight:bold">Contact</a>
    <div class="subnav">
      <button class="subnavbtn">Parteneri <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="../medicina-generala.html">Medicina generala</a>
        <a href="../tehnica-dentara.html">Tehnica dentara</a>
      </div>
    </div>

    <div class="subnav">
      <button class="subnavbtn">Servicii <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="../manopere.html">Manopere</a>
        <a href="../reduceri.html">Reduceri</a>
      </div>
    </div>

    <div class="subnav">
      <button class="subnavbtn">Despre noi <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="../company.html">Companie</a>
        <a href="../team.html">Echipa</a>
        <!-- <a href="#careers">Carieres</a> -->
      </div>
    </div>

      <!-- <a href="#home" class="logo">Logo</a> -->
    </div>
  </nav>
</header>

<!-- nicu.moraru55@gmail.com -->

<!--content--------------------------------------------------------------------------------->
<main style="display:flex ; align-items:center ; justify-content:center"  id="programare-body">
<aside class="aside-pattern"></aside>

<section class="container section-on-page">



<form class="form" id="form" action="programare.php" method="POST">

<div class="form-control">
  <label for="username">Nume
  <input type="text" placeholder="Mihaela Aco" id="username" name="username" value="<?php
                if (isset($_POST['username'])){
                    echo $_POST['username'];
                }
            ?>" required/>
  </label>
  <i class="fa fa-check-circle"></i>
  <i class="fa fa-exclamation-circle"></i>
   <small>Eroare</small>
</div>

<div class="form-control">
  <label for="phone">Telefon
  <input type="tel" placeholder="0722111111" name="phone"  id="phone" name="phone" value="<?php
                if (isset($_POST['phone'])){
                    echo $_POST['phone'];
                }
            ?>" required/>
  </label>
  <i class="fa fa-check-circle"></i>
  <i class="fa fa-exclamation-circle"></i>
   <small>Eroare</small>
</div>

<div class="form-control">
  <label for="email">Email
  <input type="email" placeholder="mihaela@yahoo.com" id="email" name="email" value="<?php
                if (isset($_POST['email'])){
                    echo $_POST['email'];
                }
            ?>" required/>
  </label>
  <i class="fa fa-check-circle"></i>
  <i class="fa fa-exclamation-circle"></i>
   <small>Eroare</small>
</div>

<div class="form-control">
  <label for="password">Parola
  <input type="password" placeholder="parola" id="password" name="password" value="<?php
                if (isset($_POST['password'])){
                    echo $_POST['password'];
                }
            ?>" required/>
  </label>
  <i class="fa fa-check-circle"></i>
  <i class="fa fa-exclamation-circle"></i>
   <small>Eroare</small>
</div>

<div class="form-control">
  <label for="password-check">Verificare parola
  <input type="password" placeholder="verificare parola" id="password-check" name="password-check" value="<?php
                if (isset($_POST['password-check'])){
                    echo $_POST['password-check'];
                }
            ?>" required/>
  </label>
  <i class="fa fa-check-circle"></i>
  <i class="fa fa-exclamation-circle"></i>
   <small>Eroare</small>
</div>

<div class="form-control">
  <label for="message">Mesaj
 <textarea id="message" placeholder="mesaj" name="message" rows="4" cols="50" name="message" required>
   <?php
               if (isset($_POST['message'])){
                   echo $_POST['message'];
               }
           ?>
 </textarea>
  </label>
  <i class="fa fa-check-circle"></i>
  <i class="fa fa-exclamation-circle"></i>
   <small>Eroare</small>
</div>

<div class="form-control">
   <p style="text-align:left">Alege varsta:</p>

  <input type="radio" id="age1" name="age" value="tanar" <?php
            if (isset($_POST['age']) && $_POST['age'] == 'tanar'){
                echo 'checked="checked"';
            }
        ?> />
    <label for="age1">0 - 30</label><br>
    <input type="radio" id="age2" name="age" value="adult" <?php
              if (isset($_POST['age']) && $_POST['age'] == 'adult'){
                  echo 'checked="checked"';
              }
          ?> />
    <label for="age2">31 - 60</label><br>
    <input type="radio" id="age3" name="age" value="batran" <?php
              if (isset($_POST['age']) && $_POST['age'] == 'batran'){
                  echo 'checked="checked"';
              }
          ?> />
    <label for="age3">61 - 100</label>
</div>

<?php
    $regiuni=array('Bucuresti' , 'Ilfov' , 'provincie') ;
    ?>

<div class="form-control">
  <label for="regiuni" required>Regiune:

  <select name="regiuni" id="regiuni">

<?php

foreach($regiuni as $regiuneKeyIndex => $regiuneValue){

    if($_POST['regiuni'] == $regiuneValue){
       echo '<option selected="selected" value="' . $regiuneValue . '">' . $regiuneValue . '</option>' ;
    }else{
       echo '<option value="' . $regiuneValue . '">' . $regiuneValue . '</option>' ;
    }

}

 ?>

    <!-- <option value="Bucuresti">Bucuresti</option>
    <option value="Ilfov">Ilfov</option>
    <option value="provincie">provincie</option> -->
  </select>
  </label>
</div>

 <div class="center-content">
<button type="submit" name="submit" id="programare" style="margin-top:1em; background-color:cornflowerblue">Trimite</button>
</div>

</form>

<!-- nicu.moraru55@gmail.com -->

<div style="background-color:white ; border-radius:0.3em">
<?php

if(isset($_POST['submit'])){

if( $_POST['password'] == $_POST['password-check'] ){
  echo '<h3 style="color:green ; margin:1.5em 1em">Ai trimis formularul</h3>';

  // echo '<br>' ;
  // echo $_POST['username'];
  // echo '<br>' ;
  // echo $_POST['phone'];
  // echo '<br>' ;
  // echo $_POST['email'];
  // echo '<br>' ;
  // echo $_POST['password'];
  // echo '<br>' ;
  // echo $_POST['message'];
  // echo '<br>' ;
  // echo $_POST['age'];
  // echo '<br>' ;
  // echo $_POST['regiuni'];
  // echo '<br>' ;


  mail('esmeraldagabriela83@yahoo.com' ,
        'Mail de pe site-ul php-dental-office/programare.php' ,
        'Username este: ' . $_POST['username'] .
        ' User  phone:  ' . $_POST['phone'] .
        ' User  email:  ' . $_POST['email'] .
        ' user regiune:  ' . $_POST['regiuni'] .
        ' user with age:  ' . $_POST['age'] .
        ' user with message:  ' . $_POST['message'] .
        ' User with password:  ' . $_POST['password'] );



}else{
  echo '<h3 style="color:Tomato ; margin:1.5em 1em">Parolele nu sunt aceleasi</h3>';
}


}

?>
</div>


</section>



<aside class="aside-pattern"></aside>
</main>



<!--content----------------------------------------------------------------------->
  <footer>
    <div class="container">

      <div id="icons">
        <div class="footerIcons"><a href="https://facebook.com/" target="_blank">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></div>
        <div class="footerIcons"><a href="https://instagram.com/" target="_blank">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></div>
        <div class="footerIcons"><a href="https://twitter.com/" target="_blank">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></div>
      </div>

      <!--sources links-->
      <a href="#" title="show and hide source links" class="btn_show_hide">
        <!-- <h3>Sources</h3> -->
      </a>
      <div id="divSources" class="hidden">
        <!-- <h5><a href="https://images.unsplash.com/photo-1623387641168-d9803ddd3f35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" target="_blank">
            https://images.unsplash.com/
            photo-1623387641168-
            d9803ddd3f35?ixlib=rb-
            1.2.1&ixid=MnwxMj
            A3fDB8MHxwaG90by1wYWdlfH
            x8fGVufDB8fHx8&auto
            =format&fit=crop&w=1170&q=80
          </a></h5> -->
      </div>

    </div>

    <div class="container copyright">
     <small>&copy; Copyright Reserved</small>
    </div>

  </footer>
  <!--footer-->

</body>
<script src="../js/footer.js" type="text/javascript"></script>
<script src="../js/hamburger.js" type="text/javascript"></script>
<!-- <script src="js/footer.js" type="text/javascript"></script> -->
<!-- <script src="../js/form-programare.js" type="text/javascript"></script> -->
</html>
