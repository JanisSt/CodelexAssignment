<?php

namespace App;

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {

        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth(): string
    {
        return $this->month;
    }


    public function getDay(): string
    {
        return $this->day;
    }


    public function getYear(): string
    {
        return $this->year;
    }

    public function DateTest(): bool
    {
        if (checkdate($this->month, $this->day, $this->year) == true) {
            return true;
        } else return false;
    }


    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function setMonth(int $month): void
    {
        $this->month = $month;
    }


    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function DisplayDate()
    {
        return $this->month . '/' . $this->day . '/' . $this->year;

    }


}

