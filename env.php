<?php
// env.php for  in /MicroShell
// 
// Made by BOUSHABA Ahmed
// Login   <bousha_a@etna-alternance.net>
// 
// Started on  Sat Oct 14 09:38:22 2017 BOUSHABA Ahmed
// Last update Sat Oct 14 10:18:50 2017 BOUSHABA Ahmed
//
function do_env(){
  while($entry = each($_ENV)){
    echo $entry[0] . " => " . $entry[1]."\n";
  }
}
?>