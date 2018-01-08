<?php
// DB.class.php
//require "Curl1.php";
//require "FileManager.php";
require "Message.php";
class Message_Manager
{
	private $fields_to_extract=array("ent_date", "full_msg", "msg_id", "price", "topic", "tp_sector", "tp_nsc_cp", "msg_url");
	   function __construct()
     {
     }
	
	public function set_fields_to_extract($fields_to_extract)

	{
		
		$this -> fields_to_extract = $fields_to_extract;
		
	}
	public function get_fields_to_extract()
	{
		return $this -> fields_to_extract;
	}

	function call1()
	{   
		$Message1 = new Message();
		$Message1 -> call();
		//$file =new FileManager();
		//$file->calling();
		

  } 
}
  
  $help = new Message_Manager();
  $help ->call1(); 



    
?>