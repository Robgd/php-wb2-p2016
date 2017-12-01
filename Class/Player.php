<?php


class Player
{
    public $life;

    public $name;

    public function __construct($name,  $life)
    {
        $this->life = (int) $life;
        $this->name = (string) $name;
    }

    public function hit()
    {
        echo 'Hit';
    }

    public function setLife($life)
    {
        if (!is_int($life)) {
            return 'error';
        } else {
            $this->life = $life;
        }
    }
}
