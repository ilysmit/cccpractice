<?php

class studant{   
    public $name;
    public $age;
    public $grade;

    public function displayinfo()  {
            echo "Name : $this->name , Age : $this->age , Grade : $this->grade";
    }
}
$studant = new studant();
$studant->name="smit";
$studant->age="21";
$studant->grade="A+";

echo $studant->displayinfo();
echo $studant->age;
echo "<br>";
echo "name of studant is ".$studant->name;
echo "<br>";
echo "name of age is ".$studant->age;

?>