<?php
// cd.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:26:38 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 11:23:13 2017 BOUSHABA Ahmed
//
function do_cd($cmd,$cmd_args){
     global $current_path;
  if ($cmd_args == "-")
    {
      echo $current_path;
    }
  if ($cmd_args == "..")
    {
      $current_path=dirname($current_path);
      chdir($current_path);
    }
  else
    {
      if (!(file_exists($cmd_args)))
	{
	  echo "{$cmd}: {$cmd_args}: No such file or directory\n";
	}
      else if (!(is_readable($cmd_args)))
	{
	  echo "{$cmd}: {$cmd_args}: Permission denied\n";
	}
      else if (!(is_dir($cmd_args)))
	{
	  echo "{$cmd}: {$cmd_args}: Not a directory\n";
	}
      else
	{
	  chdir($cmd_args);
	  $current_path=$cmd_args;
	}
    }
    }
?>