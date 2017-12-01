<?php


class Car extends Vehicule
{
    private $seat;


    public function __construct($wheel, $seat)
    {
        $this->wheel = $wheel;
        $this->seat = $seat;
    }

    public function move()
    {
        echo 'I\'m a car';
    }

    /**
     * @return mixed
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param mixed $seat
     *
     * @return Car
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;

        return $this;
    }
}
