<?php

    class Car
    {
        private $make;
        private $price;
        private $year;
        private $img;
        private $mileage;

        function __construct($make, $price, $year=1990, $img="none.png", $mileage="13,000")
        {
            $this->make = $make;
            $this->price = $price;
            $this->year = $year;
            $this->img = $img;
            $this->mileage = $mileage;
        }

        function getMake()
        {
            return $this->make;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getYear()
        {
            return $this->year;
        }
        function getImg()
        {
            return $this->img;
        }
        function getMileage()
        {
            return $this->mileage;
        }

        function setMake($new_make)
        {
            $this->make = $new_make;
        }

        function setYear($new_year)
        {
            $this->year= $new_year;
        }

        function setPrice($new_price)
        {
            $this->price = $new_price;
        }
        function setImg($new_img)
        {
            $this->img = $new_img;
        }
        function save(){
            array_push($_SESSION['new_session_array'], $this);
        }
        static function getAll(){
            return $_SESSION['new_session_array'];
        }

    }
    ?>
