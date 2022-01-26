<?php

class Article{

    private int $id;
    private string $date;
    private string $accroche;


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