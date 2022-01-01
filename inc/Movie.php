<?php

class Movie
{
    private $name;
    private $country;
    private $year;
    private $director;

    public function __construct($name, $country, $year, $director)
    {
        $this->name = $name;
        $this->country = $country;
        $this->year = $year;
        $this->director = $director;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDirector()
    {
        return $this->director;
    }
}
