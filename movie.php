<?php

class Movie{
    public $name;
    public $year;
    public $director;
    public $yearFromExit;
    protected $cost = null;

    public function __construct($name,$year,$director, $cost=null, $yearFromExit=null)
    {
        $this->name = $name;
        $this->year = $year;
        $this->director = $director;
        $this->yearFromExit = $yearFromExit;
        $this->cost = $cost;
    }

    public function getYearFromExit(){
        $currentYear = date("Y");
        $this->yearFromExit = $currentYear - $this->year;
    }

    public function getFullInfo(){
        echo "Il film si intitola: " . $this->name . "<br>"; 
        echo "è stato diretto da " . $this->director . "<br>"; 
        echo "ed è uscito da " . $this->yearFromExit . " anni" . "<br>";
        echo "è costato " . $this->cost . " dollari <br><br>";
    }

    
}