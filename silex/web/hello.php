<?php
echo 'Hallo ' . htmlspecialchars($_GET["name"]) . '!';
?>
<hr/>

<?php
for ($i = 0; $i <= 4; $i++) {
    if ($i % 2 == 0){
        echo $i . " - " . "gerade";}
    else{
        echo $i . " - " . "ungerade";}

    echo "<br/>";
}
?>

<hr/>

<?php
$stop = 5;
if($_GET["stop"] != "") {
    $stop=$_GET["stop"];
}
for ($i = 1; $i <= $stop; $i++) {
    echo $i;
}
?>

<hr/>

The capital of Germany is Berlin. <br/>
The capital of France is Paris. <br/>
The capital of Italy is Rome. <br/>

<hr/>

<?php
echo "server identification: " . $_SERVER['SERVER_SOFTWARE'];
echo "<br/>";
echo "your ip: " . $_SERVER['REMOTE_ADDR'];
?>
