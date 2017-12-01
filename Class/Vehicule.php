<?php





class Vehicule
{
    public static $color = 'blue';

    public static function printColor()
    {
        self::$color = 'red';
        echo self::$color;
    }

    /**
     * @var int
     */
    protected $wheel;

    public function move()
    {
        echo 'I\'m a vehicule';
    }

//    /**
//     * @return int
//     */
//    public function getColor()
//    {
//        return $this->color;
//    }
//
//    /**
//     * @param int $color
//     *
//     * @return Vehicule
//     */
//    public function setColor($color)
//    {
//        $this->color = $color;
//
//        return $this;
//    }

    /**
     * @return int
     */
    public function getWheel()
    {
        return $this->wheel;
    }

    /**
     * @param int $wheel
     *
     * @return Vehicule
     */
    public function setWheel($wheel)
    {
        $this->wheel = $wheel;

        return $this;
    }
}
