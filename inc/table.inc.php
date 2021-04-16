
  <div class="redniBroj outline"></div>
  <div class="odDatuma outline">Od Datuma</div>
  <div class="doDatuma outline">Od Datuma</div>
  <div class="beneficija outline">Beneficija</div>
  <div class="godina outline">Godina</div>
  <div class="meseci outline">Meseci</div>
  <div class="dana outline">Dana</div>
  <?php

    use App\GetKarijera;
    use App\DateConverter;
    use App\Accelerated;

    $karijera = new GetKarijera();
    $rows = $karijera->getKarijera();
    $wholeDays = 0;

    foreach($rows as $row):
        if($row->date_to == null):
            $row->date_to = date('Y-m-d');
        endif;

        $dateFrom = new DateConverter($row->date_from);
        $dateTo = new DateConverter($row->date_to);

        $acc = new Accelerated($row->date_from, $row->date_to, $row->koeficijent);
        $acc->accDateDiff();

    ?>

        <div class="redniBroj outline"><?php echo $row->id . '.'; ?></div>
        <div class="odDatuma outline"><?php echo $dateFrom->serbianDate(); ?></div>
        <div class="doDatuma outline"><?php echo $dateTo->serbianDate(); ?></div>
        <div class="beneficija outline"><?php echo $row->beneficija; ?></div>
        <div class="godina outline"><?php echo $acc->accYear($acc->accDateDiff()); ?></div>
        <div class="meseci outline"><?php echo $acc->accMonth($acc->accDateDiff()); ?></div>
        <div class="dana outline"><?php echo $acc->accDay($acc->accDateDiff()); ?></div>

    <?php
    $wholeDays = $acc->wholeDays($wholeDays);

    endforeach;


   ?>
  <div class="ukupno outline">
    <h3>UKUPNO: </h3>
  </div>
  <div class="godina outline"><?php echo $acc->accYear($wholeDays); ?></div>
  <div class="meseci outline"><?php echo $acc->accMonth($wholeDays); ?></div>
  <div class="dana outline"><?php echo $acc->accDay($wholeDays); ?></div>
