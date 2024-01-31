<?php


function insert($tablename,$data)
{
    $column = $value = [];
    foreach($data as $fields => $values)
    {
        $column[] = "`{$fields}`";
        $value[] = "'". addslashes($values) ."'";
    }
    $column = implode(",",$column);
    $value = implode(",",$value);
    return "INSERT INTO {$tablename} ({$column}) VALUES ({$value})";
}

function select($tablename,$where=null)
{
    if($where == null)
    {
        return "SELECT * FROM {$tablename}";
    }
    else{
    $column = [];
    foreach($where as $fields => $values)
    {
        $column[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $column = implode("AND",$column);
    return "SELECT * FROM {$tablename} WHERE {$column}";

    }
}
function update($tablename,$data,$where)
{
    $column = $wherec = [];
    foreach($data as $fields => $values)
    {
        $column[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $column = implode(",",$column);


    foreach($where as $fields => $values)
    {
        $wherec[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $where = implode(" AND ",$wherec);
    return "UPDATE {$tablename} SET {$column} WHERE {$where}";
}
function delete($tablename,$where)
{
    $column = [];
    foreach($where as $fields => $values)
    {
        $column[] = "`{$fields}` =" . "'". addslashes($values) ."'"; 
    }
    $column = implode("AND",$column);
    return "DELETE FROM {$tablename} WHERE  {$column}";
}
?>