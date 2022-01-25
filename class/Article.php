<?php

class Article{

    public int $id;
    public string $date;
    public string $accroche;


    function __construct(int $id, string $date, string $accroche) {
        $this->id = $id;
        $this->date = $date;
        $this->accroche = $accroche;
    }



    public function id() {
        return $this->id;
    }
    

    public function accroche() {
        return $this->accroche;
    }

    public function date() {
        return $this->date;
    }

}