<!Doctype html>
<html>
<body>

<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p> Enter a paragraph:<br>
<textarea name= "content" rows="5" cols="70"></textarea>
<input type="submit" value="Submit">
</p>
</form>

<?php
if ($_POST)
{
$str= $_POST["content"];
$str= preg_replace('#[^a-zA-Z0-9]+#', ' ', $str);
$s= explode(' ', $str);

sort($s);

//print_r($s);

$length= count($s);

$wd;
$wc;
$k =0;
$p= 0;
$wd[0] = $s[0];

for($i= 1; $i<$length; $i++)
{
if ($s[$i] == $s[$i-1]) { continue; }
else
{
$wc[$k] = $i - $p;
$p = $i;

$k++;
$wd[$k] = $s[$i];
}
}

$wc[$k] = $length-$p;

echo "<table border='0'>";
echo "<tr><th>Word</th><th>Frequenscy</th></tr>";

for ($i=0; $i < count($wd); $i++)
{
echo "<tr><td>$wd[$i] </td><td> $wc[$i]</td></tr>";
}

echo "<table>";

}
?>

</body>
</html>