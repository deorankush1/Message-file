<?php
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
 	$this -> price =0;
 	$this -> topic = null;
 	$this -> tp_sector = null;
 	$this -> tp_nsc_cp = 0;                             
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

  public function get_tp_nsc_cpd()
 {
 	return $this-> tp_nsc_cpd;
 }
 public function set_tp_nsc_cpd($tp_nsc_cpd)
 {
 	$this -> tp_nsc_cpd = $tp_nsc_cpd;
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
}
$message1 = new Message();
$message1 -> set_msg_id(3);
echo $message1 -> get_msg_id();

$message1 -> set_full_message('ankush you can');
echo $message1 -> get_full_message();

$message1 -> set_price(1500);
echo $message1 -> get_price();

$message1 -> set_topic('  java');
echo $message1 -> get_topic();

$message1 -> set_tp_nsc_cpd(  1200);
echo $message1 -> get_tp_nsc_cpd();

$message1 -> set_tp_sector('Example');
echo $message1 -> get_tp_sector();

$message1 -> set_msg_url('http:// www.google.com');
echo $message1 -> get_msg_url();

$message1 -> set_ent_date('12-12-1221');
echo $message1 -> get_ent_date();



?>