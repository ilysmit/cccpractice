<?php 
class Mage
{
    public static function init()
    {
        // $requestModel= new Core_Model_Request();
        // echo $requestModel->getRequsturi();
       $requestObject = Mage::getModel("core/request");
        echo get_class($requestObject);
    }
    public static function getModel($modalname)
    {
        $arr=explode("/", $modalname);
        $classname=(ucfirst($arr[0])."_"."Model"."_".ucfirst($arr[1]));
     
        return new $classname;

    }

    public static function getSingleton($className)
    {


    }


    public static function register($key, $value)
    {


    }

    public static function registry($key)
    {


    }

    public static function getBaseDir($subDir = null)
    {


    }


}

?>