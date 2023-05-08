<?php
$a = 0;
$b = 0;
for($i =0;$i<5;$i++){
    $a += 10;
    $b += 5;

}
echo ("At the end of the loop a = $a and b = $b");
?>

<?php
$i = 0;
$num = 50;
while($i < 10){
    $num--;
    $i++;
}
echo ("Loop stopped at i = $i and num = $num");
?>

<?php
$i = 0;
$num = 0;
do{
    $i++;
}
while($i < 10);
echo("Loop stopped at i= $i");
?>