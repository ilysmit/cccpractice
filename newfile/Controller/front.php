<?php 
class Controller_front{
    public function init()
    {
    
        $requstModel=new Model_Request();
        $uri= $requstModel->getRequsturi();
        $layout="View_";
        $className=str_replace("/","_",$uri);
        $layout.=$className;
        echo $layout;
        $obj=new $layout();
        echo $obj->tohtml();
        


    


    }
    
}
?>