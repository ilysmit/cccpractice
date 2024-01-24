<?php

    function insert($tablename,$data)
    {
        $colums=$values=[];
        foreach($data as $_field =>$_value )
        {
            $colums[]="`{$_field}`";
            $values[]="'" . addslashes($_value)."'";
        }
        $colums=implode(",",$colums);
        $values=implode(",",$values);
        return "INSERT INTO {$tablename}({$colums}) VALUES ({$values})";
    }


    function select($tablename)
    {
        return "SELECT * FROM ($tablename)";
    }
    

?>

