<div class="">
  <!-- SALVO IL TESTO IN UNA VARIABILE -->
  <?php
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
   ?>
</div>

<!-- STAMPO IL TESTO -->
<div class="testo-originale">
  <?php echo $testo; ?>
</div>

<!-- STAMPO LA LUNGHEZZA DEL TESTO -->
 <div class="lunghezza">
    Lunghezza testo: <?php echo strlen($testo); ?>
 </div>

<!-- STAMPO LA PAROLA DA CENSURARE CHE INSERISCO NELL'URL -->
<div class="">
  La parola censurata è: <?php echo $_GET['badword']; ?>
</div>

<!-- SOSTITUISCO NEL TESTO LA PAROLA DA CENSURARE CON *** -->
 <div class="testo-censurato">
   <?php echo str_replace(' ' . $_GET["badword"], ' ***', $testo); ?>
 </div>
