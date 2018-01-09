<?php
Class Curl 
{   
  private $url_to_fetch;
 
  
  public function __construct()
  {
    $this -> url_to_fetch = 'sachin';
    
    
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
   $array = json_decode($result, true);
   
 // echo '<pre>',print_r($array),'</pre>';
  $return_array = array();
  if($return_array ===null)
    { }
  foreach($array as $row)
 { 

  
  print_r($return_array[]= [['ent_date' => $row["ent_date"]] , ['msg_id' => $row["msg_id"]] ,['full_message' => $row["full_message"]] ,['price' => $row["price"]] ,['topic' => $row["topic"]] ,['tp_sector' => $row["tp_sector"]] ,['tp_nsc_cp' => $row["tp_nsc_cp"]] ,['msg_url' => $row["msg_url"]]]);
 

 
 }

return $return_array;
   
 }
}





?>
