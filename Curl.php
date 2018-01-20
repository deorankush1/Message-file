<?php



 Class Curl 
 {   
   private $url_to_fetch;
  
   public function __construct()
   {
     $this -> url_to_fetch = 'Error in fetch';
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
     $result=curl_exec($cSession);
     curl_close($cSession);

      // step4
     $array = json_decode($result, true);
     // echo '<pre>',print_r($array),'</pre>';
     $return_array = array();
     //echo $array;
     $return_message = array();
     if(!($return_array ===null))
     
     {
        //echo '<pre>'; 
        foreach($array as $row)
       { 
         //$return_array  = '<pre>',print_r($array  ="('ent_date =".$row["ent_date"]."', ' full_message =".$row["full_message"]." ','msg_id =".$row["msg_id"]." ',' price =".$row["price"]." ','topic =".$row["topic"]." ', 'tp_sector =".$row["tp_sector"]." ', 'tp_nsc_cp =".$row["tp_nsc_cp"]." ', 'msg_url =".$row["msg_url"]." ')"),'</pre>';
         
         ($return_array[]= [['ent_date' => $row["ent_date"]] , ['msg_id' => $row["msg_id"]] ,['full_message' => $row["full_message"]] ,['price' => $row["price"]] ,['topic' => $row["topic"]] ,['tp_sector' => $row["tp_sector"]] ,['tp_nsc_cp' => $row["tp_nsc_cp"]] ,['msg_url' => $row["msg_url"]]]);
        
       
         echo "\n",($return_message [] =  $row["full_message"]."\n");


          //print_r("")
        }
       
        $result = json_encode($return_array, JSON_PRETTY_PRINT  );
        // $result =json_parse($result);

        return $result;

        //  echo '</pre>'; 
       //  // echo'<pre>';
       //  // print_r($return_message);
       //  // echo'</pre>';
       //  echo $count= count($return_array),"\n";


       //  echo $return_message1 = json_encode($return_message),"\n";
       //  //parse_str($return_message);
       // // echo  $return_message1,"<br>\n";
      


  

        //echo (wordwrap($query ,"<br />\n",true));
        //$result = nl2br($query2."<br />"); 
      }
     //  echo json_encode($return_array);
    
     //  $obj = $query;
     // if (is_array($obj) || is_object($obj))
     // {
     //   foreach($obj as $obj1)
     //   {
     //     $obj1->ent_date . " and";
     //    }      
     //   return $obj;
     //
    }
    
  }
?>