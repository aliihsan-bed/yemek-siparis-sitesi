<?php


try{
    $db=new PDO("mysql:hostname=localhost;dbname=kayit;charset=utf8","root","");
}
catch(PDOException $e)
{
    echo $e->getMessage();
};

?>