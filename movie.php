<?php

class movie{
    public $name;
    public $year;
    public $director;

    public function __construct($name,$year,$director)
    {
        $this->name = $name;
        $this->year = $year;
        $this->director = $director;
    }
}