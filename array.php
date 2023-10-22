<form action="array.php" method="GET">

<input type ="text" name ="name">
<input type ="submit">
</form>

<?php
$name = $_GET["name"];
//$family = array("Father", "Mother", "Brother");
//$family[1] = "Love";
//$family[3] = "Sister";
//echo $family[1];
//echo $family[3];
//echo count($family);
//$family = array("Nour", "Majed", "Anas");

//$family = [
  //  "Desinger" => "Nour",
    //"Programmer" => "Majed",
    //"Gamer" => "Anas"
//];
$score = [
    "Nour" => [
        "Score" => "90",
        "Grade" => "A"
    ],
    "Majed" => [
        "Score" => "80",
        "Grade" => "B"
    ],
    "Anas" => [
        "Score" => "20",
        "Grade" => "F"
    ],
];



echo "Grade: " . $score[$name]["Score"];
echo "<br>";
echo "Grade: " . $score[$name]["Grade"];

?>