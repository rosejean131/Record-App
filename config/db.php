<?php
// require ('vendor/autoload.php');
// $faker = Faker\Factory::create();

$conn = mysqli_connect(DB_HOST, DB_PASS, DB_USER, DB_NAME);

if(mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL'. mysqli_connect_errno();
}
// echo $PersonID = $faker->PersonID()."\n"; 
// echo $LastName = $faker->LastNamed(). "\n";
// echo $FirstName = $faker->FirstName(). "\n"; 
// echo $Address = $faker->Address(). "\n";
// echo $City = $faker->City(); 
 
 

//  if(isset($_POST['insert'])){
//     $employee_id=$_POST['employee_id'];
//     $office_id=$_POST['office_id'];
//     $datelog= $_POST['datelog'];
//     $action=$_POST['action'];
//     $remarks=$_POST['remarks'];
//     $documentcode=$_POST['documentcode'];
  
 
  //   $sql = "INSERT INTO test.person(PersonID, LastName, FirstName, Address, City) 
  //   values('".$faker->PersonID."','".$faker->LastName."', '".$faker->FirstName."', '".$faker->Address. "', ' ".$City. "'' )";     
 
  //  mysqli_query($conn, $sql);
 //}


?>