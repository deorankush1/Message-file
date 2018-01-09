<?php
class FileManager
{
/*Public $result1;
public function __construct()
{
	$this -> result1 = null;
}

public function set_result($result)
{
 $this ->result = $result;
}
public function get_result()
{
	return $this ->result;
}*/
function calling($opt_data)
{

 $myfile = fopen("newfile.txt","w") or die("Unable to open file!");
 
 fwrite($myfile, print_r($opt_data,true));
fclose($myfile);
 //print_r ($opt_data);
}
}



?> 
