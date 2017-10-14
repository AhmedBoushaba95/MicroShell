<?php
// ls.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:24:33 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 11:29:23 2017 BOUSHABA Ahmed
//
function do_ls($cmd,$cmd_args){
  $enver = $_SERVER;
  global $current_path;
  $files = array();
  if ($cmd_args == "")
    {
      // quand je remplace $enver ... par getcwd() mo script arche bien, cd ls et tout ...
      // merci de testez avec la commande en commentaire ci dessus :)
      //$cuurent_path = getcwd();
      $current_path = $enver['PWD'];
      $files = scandir($current_path , 0);
    }
  else
    if ($cmd_args == "..")
      {
	$current_path = $enver['PWD'];
	$files = scandir(dirname($current_path) , 0);
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
	    $files = scandir($cmd_args, 0);
	  }
      }
  $j=0;
  while($j<count($files))
    {
      $file=$files[$j];
      $type = "";
      if (is_dir($file))
	{
	  $type = "/";
	}
      else if (is_executable($file))
	{
	  $type = "*";
	}
      else if (is_link($file))
	{
	  $type = "@";
	}
      echo $file . $type . "\n";
      $j++;
    }
   }
?>