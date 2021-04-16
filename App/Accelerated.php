<?php

/**
 * @package Radni Staz
 * Description:
 */

  namespace App;

  class Accelerated extends Dbh
  {
    private $dateFrom;
    private $dateTo;
    private $coefficient;
    public $accDateDiff;

    public function __construct($from, $to, $coefficient)
    {
      $this->dateFrom = $from;
      $this->dateTo = $to;
      $this->coefficient = $coefficient;
    }

    public function accYear($accDays)
    {
      $sql = "SELECT EXTRACT(YEAR FROM from_days(days))-1600 FROM (SELECT $accDays + to_days('1600-01-01') as days) as year";
      $result = $this->dbh()->prepare($sql);
      $result->execute();
      return $result->fetchColumn();
    }

    public function accMonth($accDays)
    {
      $sql = "SELECT EXTRACT(MONTH FROM from_days(days))-1 FROM (SELECT $accDays + to_days('1600-01-01') as days) as month";
      $result = $this->dbh()->prepare($sql);
      $result->execute();
      return $result->fetchColumn();
    }

    public function accDay($accDays)
    {
      $sql = "SELECT EXTRACT(DAY FROM from_days(days))-1 FROM (SELECT $accDays + to_days('1600-01-01') as days) as day";
      $result = $this->dbh()->prepare($sql);
      $result->execute();
      return $result->fetchColumn();
    }

    public function accDateDiff()
    {
      $sql = "SELECT DATEDIFF('$this->dateTo', '$this->dateFrom') as days";
      $result = $this->dbh()->prepare($sql);
      $result->execute();
      return $result->fetchColumn() * $this->coefficient;
    }

    public function wholeDays($days)
    {
      return $days + $this->accDateDiff();
    }

  }
