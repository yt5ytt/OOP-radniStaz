<main>

  <div class="titleLine">

    Radni staž za<br />
    <h2>Aleksandar Šafranec</h2>

  </div><!-- end of .titleLine -->

  <div class="tableDiv">

    <?php include(ABSPATH . 'inc/table.inc.php'); ?>

  </div><!-- end of .tableDiv -->

  <div class="dateDiv">

    <?php echo date('d.m.Y.') . '<br />'; ?>
    <?php echo date('H:i'); ?>

  </div><!-- end of .dateDiv -->

  <div class="daysDiv">

    <?php
      use App\DoPenzije;

      $doPenzije = new DoPenzije();
      $dana = $doPenzije->doPenzije();
    ?>

     Dana do penzije<br />
     <?php echo '<h1>' . $dana . '</h1>'; ?>

  </div><!-- end of .daysDiv -->

</main><!-- end of main -->
