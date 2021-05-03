<main>

  <div class="titleLine">

    <div class="wholeWidth">Radni staž za</div>
    <div class="wholeWidth"><h2>Aleksandar Šafranec</h2></div>

  </div><!-- end of .titleLine -->

  <div class="tableDiv">

    <?php include(ABSPATH . 'inc/table.inc.php'); ?>

  </div><!-- end of .tableDiv -->

  <div class="dateDiv">

    <div class="wholeWidth"><?php echo date('d.m.Y.'); ?></div>
    <div class="wholeWidth"><?php echo date('H:i'); ?></div>

  </div><!-- end of .dateDiv -->

  <div class="daysDiv">

    <?php
      use App\DoPenzije;

      $doPenzije = new DoPenzije();
      $dana = $doPenzije->doPenzije();
    ?>

     <div class="wholeWidth">Dana do penzije</div>
     <div class="wholeWidth"><?php echo '<h1>' . $dana . '</h1>'; ?></div>

  </div><!-- end of .daysDiv -->

</main><!-- end of main -->
