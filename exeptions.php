<?php


class theType2
{
    public function whatType (int $input , string $type) : bool {
        if(gettype($input) == $type && $input >= 0 ){  
        return TRUE;
        } else {
            throw new Exception("Value must be ".$type." and > 0");
        } 
        //return FALSE;        
    }
}

//$input = 5;
$input = -1;
$type = 'integer';


try {
    $obj = new theType2();
    $obj->whatType($input,$type);
    echo 'OK';
} catch(Exception $e) {
    echo $e->getMessage();
}

unset($obj);
//var_dump($obj);

//echo "<br><br>done";

?>
