<?php
// unsetenv.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:30:57 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 11:36:18 2017 BOUSHABA Ahmed
//
function do_unsetenv($cmd,$cmd_args){
  if ($cmd_args == "")
    {
      echo "$cmd : invalid argument\n";
    }
  else
    {
      $arr_exploded = preg_split("/[\s]+/", $cmd_args);
      if (count($arr_exploded) != 1)
	{
	  echo "$cmd: Invalid arguments\n";
	}
      else
	{
	  $id = arr_exploded[0];
	  putenv("$id");
	}
    }
   }
?>