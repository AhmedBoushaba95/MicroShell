<?php
// setenv.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:29:53 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 11:35:11 2017 BOUSHABA Ahmed
//
function do_setenv($cmd,$cmd_args){
  if ($cmd_args == "")
    {
      echo "$cmd : invalid argument\n";
    }
  else
    {
      $arr_exploded = preg_split("/[\s]+/", $cmd_args);
      if (count($arr_exploded) != 2)
	{
	  echo "$cmd: Invalid arguments\n";
	}
      else
	{
	  $id = arr_exploded[0];
	  $id_val = arr_exploded[1];
	  putenv("$id=$id_val");
	}
    }
   }
?>