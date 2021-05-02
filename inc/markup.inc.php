<main>
  <div class="titleLine">
    <p>Radni staž za</p>
    <p><h2>Aleksandar Šafranec</h2></p>
  </div>

  <div class="tableDiv">
    <?php include(ABSPATH . 'inc/table.inc.php'); ?>
  </div>

  <div class="dateDiv">
    <div>
      <p><?php echo date('d.m.Y.') . '<br />'; ?></p>
      <p><?php echo date('H:i'); ?></p>
    </div>
  </div>

  <div class="daysDiv">
    <?php
      use App\DoPenzije;

      $doPenzije = new DoPenzije();
      $dana = $doPenzije->doPenzije();
    ?>
      <div>

        <?php
          echo '<span>Dana do penzije<br />
          <h1>' . $dana . '</h1></span>';
         ?>

      </div>

  </div>
</main>
