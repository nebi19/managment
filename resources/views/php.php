<?php
$array=array("nebu"=>"nebiat","sari"=>"sara");
foreach ($array as $key => $value) {
	echo "$key => $value<br>";
	# code...
}
foreach ($array as $key) {
	echo "$key<br>";
	# code...
}
print_r($key);
$number=array(1,2,3,4,5);
foreach($number as $num)
	echo "$num<br>";
?>
 	
<?php
 
class Person
{
    public $firstName;
    public $lastName;
    public $middleName;
 
    public function __construct($firstName, $lastName, $middleName)
    {
        $this->firstName  = $firstName;
        $this->lastName   = $lastName;
        $this->middleName = $middleName;
    }
}
 
$john = new Person('John', 'Doe', 'Bray');
 
foreach ($john as $propName => $propValue) {
    echo $propName . ': ' . $propValue . '<br>';
}
?>


 <?php
 class Per {
    // hardcode values for demonstration
    public $fir = 'Rasmus';
    public $las  = 'Lerdorf';
}

$person = new Per;
foreach ($person as $property => $value) {
    print "$property: $value\n";
}?>