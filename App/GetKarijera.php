<?php
    /**
     * @package Radni Staz
     */

    namespace App;

    class GetKarijera extends Dbh
    {
        public function getKarijera()
        {
            $sql = "SELECT * FROM karijera";

            $result = $this->dbh()->prepare($sql);
            $result->execute();
            return $result->fetchAll();
        }
    }