<!DOCTYPE html>
<html>
<body>

<?php
$fruit1 = "Apple";
$fruit2 = "Orange";

// Indexed array
$fruits = array(
				0 => "Apple",
                1 => "Orange",
                6 => "Cherry"
          );
          
// Associative
$student = array(
				"name" => "Raja",
                "age" => 25,
                "dept" => "CSE"
                );
                
// Multi
$student = array(
				"name" => "Raja",
                "age" => 25,
                "dept" => "CSE",
                "marks" => array(
                			"eng" => 50,
                            "tam" => 45,
                            "mat" => 46,
                			),
                );


// echo $student[dept];
echo "<pre>";

print_r($student);

echo "<br>";

echo $student[marks][tam];


?>  

</body>
</html>
