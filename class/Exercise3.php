<?php
class point
{
    public $x;
    public $y;

    public function cal_distence(point $othes)
    {
        // return $othes->x;
        return sqrt(pow($this->x-$othes->x,2)+pow($this->y-$othes->y,2));
    }
}

$point = new point();
$point-> x=1;
$point->y=2;

$point1 = new point();
$point1-> x=10;
$point1->y=2;

echo $point->cal_distence($point1);
?>