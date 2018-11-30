<?php
//php globale
include 'assets/php/globale.php';
//header du site
include 'assets/php/header.php';
?>

<!-- partie principale du site -->
<main>
  <section>
    <?php
      for ($i=1; $i<$aLength+1; $i++) { 
        if ($_GET[page] == $animals[$i][Titre]){ ?>
          <h1><?php echo $animals[$i][Titre]; ?></h1>
          <img src="assets/img/<?php echo $animals[$i][Titre]; ?>.jpg" alt="<?php echo $animals[$i][Titre]; ?>">
          <div>
            <p>
              <?php echo $animals[$i][Description]; ?>
            </p>
          </div>
      <?php  }else if(!isset($_GET[page])){ ?>
          <a href="<?php echo "index.php?page=".$animals[$i][Titre];?>">
            <img src="assets/img/<?php echo $animals[$i][Titre]; ?>.jpg" alt="<?php echo $animals[$i][Titre]; ?>">
          </a>
      <?  }
      }
    ?>
  </section>
</main>
<?php
//footer du site
include 'assets/php/footer.php';
?>