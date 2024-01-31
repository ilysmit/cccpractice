<?php
class employee
{
    public $name;
    public $position;
    public $salary;

    public function yearlybonus(){
        return $this->salary*0.1;
    }
   
}

$employee = new employee();
$employee->name="smit";
$employee->position="hr";
$employee->salary=5000;

echo $employee->yearlybonus();
echo $employee->name,$employee->position,$employee->salary;

?>