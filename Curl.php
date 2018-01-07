<?php
Class Curl 
{   
  private $url_to_fetch;
  
  
  public function __construct()
  {
    $this -> url_to_fetch = null;
    
    
  }
public function get_url_to_fetch()
{
 return $this -> url_to_fetch;
}

public function set_url_to_fetch($url_to_fetch)
{
 $this -> url_to_fetch = $url_to_fetch;
}

   public function  jsdecode()
   {
  
  $this -> url_to_fetch;
  $cSession = curl_init(); 

   curl_setopt($cSession,CURLOPT_URL,$this -> url_to_fetch);
   curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
   curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
   $result=curl_exec($cSession);
    curl_close($cSession);
//step4
   $decode = json_decode($result);
   print_r($result);
  

}
}
$curl1 = new Curl();
$curl1 -> set_url_to_fetch('http://mmb.moneycontrol.com/index.php?q=boarder/ajax_call&section=get_messages&uid=valine&isp=0&gmt=my_post');
$curl1-> get_url_to_fetch();
$curl1 ->jsdecode();

?>