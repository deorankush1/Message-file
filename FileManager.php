<?php


 Class FileManager
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

     function FM_call($opt_data)
      {
         $myfile = fopen("Fetch_Data.txt","w") or die("Unable to open file!");
         //echo filesize("Fetch_Data.txt");
         fwrite($myfile, print_r($opt_data,true));
         fclose($myfile);
         
        }
    }
?> 




