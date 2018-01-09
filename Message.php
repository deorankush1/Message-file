<?php
require "Curl.php";
class Message
{
	private $msg_id;
	private $ent_date;
	private $full_message;
	private $price;
	private $topic;
	private $tp_sector;
	private $tp_nsc_cp;
	Private $msg_url;

 
 public function __construct()
 {
 	$this -> msg_id = 0;
 	$this -> ent_date =00-00-0000;
 	$this -> full_message = null;
 	$this -> price =null;
 	$this -> topic = null;
 	$this -> tp_sector = null;
 	$this -> tp_nsc_cp = null;                             
 }

 public function get_msg_id()
 {
 	return $this-> msg_id;
 }
 public function set_msg_id($msg_id)
 {
 	$this -> msg_id = $msg_id;
 }

  public function get_full_message()
 {
 	return $this-> full_message;
 }
 public function set_full_message($full_message)
 {
 	$this -> full_message = $full_message;
 }

  public function get_ent_date()
 {
 	return $this-> ent_date;
 }
 public function set_ent_date($ent_date)
 {
 	$this -> ent_date = $ent_date;
 }


  public function get_price()
 {
 	return $this-> price;
 }
 public function set_price($price)
 {
 	$this -> price = $price;
 }

  public function get_topic()
 {
 	return $this-> topic;
 }
 public function set_topic($topic)
 {
 	$this -> topic = $topic;
 }

  public function get_tp_nsc_cp()
 {
 	return $this-> tp_nsc_cp;
 }
 public function set_tp_nsc_cp($tp_nsc_cp)
 {
 	$this -> tp_nsc_cp = $tp_nsc_cp;
 }


 public function get_tp_sector()
 {
 	return $this-> tp_sector;
 }
 public function set_tp_sector($tp_sector)
 {
 	$this -> tp_sector = $tp_sector;
 }

 public function get_msg_url()
 {
 	return $this-> msg_url;
 }
 public function set_msg_url($msg_url)
 {
 	$this -> msg_url = $msg_url;
 }
 public function call()
	{   
		
        $curl = new Curl();
		$name = $curl ->set_url_to_fetch('http://mmb.moneycontrol.com/index.php?q=boarder/ajax_call&section=get_messages&uid=valine&isp=0&gmt=my_post');
		$name =$curl ->get_url_to_fetch(); 	
		return $curl ->jsdecode(); 
      	}


  
  
}
$message1 = new Message();
 

$message1 = new Message();
$message1 -> set_msg_id(56141097);
 echo $message1 -> get_msg_id();

$message1 -> set_full_message('I hope you are counting the gains, This is an unprecedented rally in Globus Spirits in just Six months, it went up 180%.');
 $message1 -> get_full_message();

$message1 -> set_price('Price when posted : BSE: Rs. 169.60 NSE: Rs. 170.35');
 $message1 -> get_price();

$message1 -> set_topic('Globus Spirits');
 $message1 -> get_topic();

$message1 -> set_tp_nsc_cp(171.95);
 $message1 -> get_tp_nsc_cp();

$message1 -> set_tp_sector('Breweries & Distilleries');
 $message1 -> get_tp_sector();

$message1 -> set_msg_url('/forum-topics/stocks/globus-spirits/thread-message-54341097-56141097.html');
 $message1 -> get_msg_url();

$message1 -> set_ent_date('2018-01-07 18:50:36');
 $message1 -> get_ent_date();

 



?>
