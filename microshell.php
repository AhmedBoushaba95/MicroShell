<?php
// microshell.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:20:40 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 11:34:44 2017 BOUSHABA Ahmed
//
include 'exit.php';
include 'echo.php';
include 'pwd.php';
include 'cd.php';
include 'ls.php';
include 'cat.php';
include 'env.php';
include 'setenv.php';
include 'unsetenv.php';
$current_path = dirname(dirname(__FILE__));
while (true)
  {
    $propt = "$>";
    echo $propt;
    $handle = fopen("php://stdin", "r");
    $cmd_line = trim(fgets($handle));
    $cmd_array = preg_split("/[\s]+/", $cmd_line);
    $cmd = $cmd_array[0];
    array_shift($cmd_array);
    $cmd_args = join(' ', $cmd_array);
    if ($cmd == "exit")
      {
	do_exit();
      }
    if ($cmd == "echo")
      {
	do_echo($cmd_args);
      }
    else if ($cmd == "pwd")
      {
	do_pwd($cmd,$cmd_args);
      }
    else if ($cmd == "cd")
      {
	do_cd($cmd,$cmd_args);
      }
    else if ($cmd == "ls")
      {
	do_ls($cmd,$cmd_args);
      }
    else if ($cmd == "cat")
      {
	do_cat($cmd,$cmd_args);
      }
    else if ($cmd == "env")
      {
	do_env();
      }
    else if ($cmd == "setenv")
      {
	do_setenv($cmd,$cmd_args);
      }
    else if ($cmd == "unsetenv")
      {
	do_unsetenv($cmd,$cmd_args);
      }
    else
      {
	echo "{$cmd}: Command not found\n";
      }
  }
?>