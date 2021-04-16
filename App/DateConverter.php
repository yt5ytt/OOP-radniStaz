<?php

  /**
   * @package Radni staz
   * Description: This is a Date Converter Class which converts MySQL date format to Serbian date format
   */

   namespace App;

   class DateConverter
   {
     private $year;
     private $month;
     private $day;

     public function __construct($date)
     {
       $datum = explode('-', $date);
       $this->year = $datum[0];
       $this->month = $datum[1];
       $this->day = $datum[2];
     }

     public function serbianDate()
     {
       return $this->day . '.' . $this->month . '.' . $this->year . '.';
     }
   }
