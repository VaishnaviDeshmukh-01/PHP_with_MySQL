<?php
           //Control Structures
           $name = "Riya";
           if($name == "Raj"){
            echo $name." Name is Correct";
           }
           else{
            echo $name." Name is not Correct";
           }
?>
<?php
//Conditional Statement if and if----else 
$marks = 35;
if($marks >= 80){
 echo "<br>You Got Grade A";
}
elseif($marks >= 60){
 echo "<br>You Got Grade B";
}
elseif($marks >= 40){
 echo "<br>You Got Grade C";
}
else{
 echo "<br>You Got Grade D";
}?>

<?php
//Switch Statement
$day = 'Tuesday';
switch ($day) {
 case 'Monday':
     echo "<br>It's Monday !!! ";
     break;
 case 'Tuesday':
     echo "<br>It's Tuesday !!! ";
     break;
 case 'Wednesday':
     echo "<br>It's Wednesday !!! ";
     break;
 case 'Friday':
     echo "<br>It's Friday !!! ";
     break;
 case 'Thrusday':
     echo "<br>It's Thrusday !!! ";
     break;
 case 'Sunday':
    echo "<br>It's Sunday !!! ";
     break;
default:
     echo "<br>This is not a day";
     break;
        }


<?php
//Iterative Control Structure while loop
$count = 1;
while ($count <= 5) {
 echo "<br> Count is ". $count;
 $count++;
}
//Iterative Control Structure do while loop
echo "<br>";
$num = 1;
do{
 echo "<br>Do While Number is" . $num;
 $num++;
}
while ($num <= 3);
//Iterative Control Structure For loop
echo "<br>";
for($i=1; $i<=5; $i++){
 echo "<br>For Loop Number :" . $i;
}
//Iterative Control Structure For Each loop
echo "<br>";
$array = ["Red", "Green", "Blue", "Yellow", "Pink"];
foreach($array as $color){
    echo "<br>Color :" . $color;
}
?>