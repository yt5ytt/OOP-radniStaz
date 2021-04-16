<?php
    /**
     * @package Radni staz
     * Description: Class which calculate number of days to retirement
     */

    namespace App;

    class DoPenzije extends Dbh
    {
        private $toDate;

        public function __construct()
        {
            $this->toDate = '2029-05-24';
        }

        public function doPenzije()
        {
            $sql = "SELECT DATEDIFF('".$this->toDate."', now() )";
            $result = $this->dbh()->prepare($sql);
            $result->execute();
            return $result->fetchColumn();
        }
    }
