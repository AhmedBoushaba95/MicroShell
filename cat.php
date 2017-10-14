<?php
// cat.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:25:46 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 09:59:42 2017 BOUSHABA Ahmed
//
function do_cat($cmd,$cmd_args){
  if ($cmd_args == "")
    {
      echo "cat : invalid argument\n";
    }
  else
    {
      if (!(file_exists($cmd_args)))
	{
	  echo "{$cmd}: {$cmd_args}: No such file or directory\n";
	}
      else
	if (!(is_readable($cmd_args)))
	  {
	    echo "{$cmd}: {$cmd_args}: Permission denied\n";
	  }
	else
	  if ((is_dir($cmd_args)))
	    {
	      echo "{$cmd}: {$cmd_args}: Is a directory\n";
	    }
	  else
	    {
	      echo file_get_contents($cmd_args);
	    }
    }
}
?>