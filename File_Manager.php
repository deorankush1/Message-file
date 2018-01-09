<?php
class FileManager
{
	
Public $result;
public function __construct()
{
	$this -> result = null;
}
/*
public function set_result($result)
{
 $this ->result = $result;
}
public function get_result()
{
	return $this ->result;
}*/
function calling()
{

 $myfile = fopen("newfile.txt","w") or die("Unable to open file!");
 
 fwrite($myfile, $result);
fclose($myfile);
 
}
}



?> 
	
