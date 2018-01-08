<?php
class File_Manager
{
	private $msg_id;
	private $full_msg;

	public function __construct()
	{
	$this -> msg_id =0;
	$this -> full_msg = null;
	}

	public function get_msg_id()
	{
	return $this -> msg_id;
	}
	public function set_msg_id($msg_id)
	{
	$this -> msg_id = $msg_id;
	}


	public function get_full_msg()
	{
	return $this -> full_msg;
	}

	public function set_full_msg()
	{
	$this -> full_msg =$full_msg;
	}

}
	$full_msg = $_POST['full_msg'];
	$msg_id = $_POST['msg_id'];
	$fp = fopen(”formdata.txt”, “a”);
	$savestring = $full_msg . ",".$email."n";
	fwrite($fp,$savestring);
	fclose($fp);
	echo "<h1>you data has been saved in a text file </h1>";
?>		