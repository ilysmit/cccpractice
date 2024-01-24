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
    
    function delete($tablename,$where)
    {
        $colums = [];
        foreach($where as $_field=>$_value)
        {
            $colums="`{$_field}`="."'".addslashes($_value)."";
        }
        $colums=implode("AND",$colums);

        return "DELETE FROM ($tablename) WHERE ($colums)";

    }

?>

