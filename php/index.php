<?php
 echo "<h1> Hello from DOCKER PHP formation 2021</h1>";
 echo "<h1>Hello World from PHP7-FPM</h1>";
 echo 'Version PHP courante : ' . phpversion();
 $bdd = getenv ("BDD_HOST");
 $user = getenv ("BDD_USER");
 $pass = getenv ("BDD_PASS");
 /* echo '<pre>';
 try{
   $conn = new \PDO("mysql:host=$bdd", "$user", "$pass");
   $sth = $conn->prepare('SHOW DATABASES');
   $sth->execute();
   $checks = $sth->fetchAll(PDO::FETCH_ASSOC);
   foreach ($checks as $check) {
 
   print_r($check);
   }
 }
 catch(\Exception $e){
     print_r($e);
 }
 echo '</pre>';
 */
?>
