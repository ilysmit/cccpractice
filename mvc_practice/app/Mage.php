<?php


class Mage
{
    public static $baseDir = 'C:/Training_Apps/mvc_practice';
    public static function init()
    {
        $frontObject = new Core_Controller_Front();
        $frontObject->init();
    }

    public static function getModel($modelName)
    {
        $uriArray = explode("/", $modelName);
        $className = ucfirst($uriArray[0])."_"."Model"."_".ucfirst($uriArray[1]);
        return new $className;
    }

    public static function getBlock($blockName)
    {
        $uriArray = explode("/", $blockName);
        $className = ucfirst($uriArray[0])."_"."Block"."_".ucfirst($uriArray[1]);
        return new $className;
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
        if($subDir)
        {
            return self::$baseDir . '/' . $subDir;
        }
        return self::$baseDir;
    }
}


?>