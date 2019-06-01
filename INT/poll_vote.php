<?php
$vote = $_REQUEST['vote'];

//merret permbajta e textfile-it
$filename = "poll_result.txt";
$content = file($filename);

//vendos permbajtjen ne varg
$array = explode("||", $content[0]);
$rings = $array[0];
$earrings = $array[1];
$bracelets=$array[2];

if ($vote == 0) {
  $rings = $rings + 1;
}
if ($vote == 1) {
  $earrings = $earrings + 1;
}
if($vote==2){
    $bracelets=$bracelets +1;
}

//shtohen votat ne textfile
$insertvote = $rings."||".$earrings."||".$bracelets;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Rings:</td>
<td>
<img src="pictures/poll.png"
width='<?php echo(100*round($rings/($earrings+$bracelets+$rings),2)); ?>'
height='20'>
<?php echo(100*round($rings/($earrings+$bracelets+$rings),2)); ?>
</td>
</tr>
<tr>
<td>Earrings:</td>
<td>
<img src="pictures/poll.png"
width='<?php echo(100*round($earrings/($earrings+$rings+$bracelets),2)); ?>'
height='20'>
<?php echo(100*round($earrings/($earrings+$rings+$bracelets),2)); ?>
</td>
</tr>
<tr>
<td>Bracelets:</td>
<td>
<img src="pictures/poll.png"
width='<?php echo(100*round($bracelets/($rings+$earrings+$bracelets),2)); ?>'
height='20'>
<?php echo(100*round($bracelets/($rings+$earrings+$bracelets),2)); ?>
</td>
</tr>
</table>