<?php

class Inventory{
    public function carTotal ($company) {
        $companies = [
            "BMW" => 250,
            "Mercedez Benz" => 140
        ];

        return $companies[$company];
    }
}

?>