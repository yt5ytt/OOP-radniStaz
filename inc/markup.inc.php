<main>
  <div class="titleLine">
    Radni staž za<br />
    <h2>Aleksandar Šafranec</h2>
  </div>

  <div class="tableDiv">
    <?php include(ABSPATH . 'inc/table.inc.php'); ?>
  </div>

  <div class="dateDiv">
      <p><?php echo date('d.m.Y.'); ?></p>
      <p><?php echo date('H:i'); ?></p>
  </div>

  <div class="daysDiv">
    <?php
      use App\DoPenzije;

      $doPenzije = new DoPenzije();
      $dana = $doPenzije->doPenzije();
      echo '<span>Dana do penzije<br />
      <h2>' . $dana . '</h2></span>';
     ?>
  </div>
</main>
