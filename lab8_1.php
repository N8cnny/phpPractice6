<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>Enter a sentence here:<br>

<input type="text" name="message" size="50">
<input type="submit" value="submit">
</p>
</form>

<?php
if ($_POST)
{
$str = $_POST["message"];

echo"<p> All Uppercase: <br>" . strtolower($str) . "</p>";
echo"<p> All Lowercase: <br>" . strtoupper($str) . "</p>";
echo"<p>Capitalize the first chracter: <br>" . ucfirst($str) . "</p>";
echo"<p>Capitalize the 1st letter of every word: <br>" . ucwords($str) . "</p>";

$s= explode(' ', $str);
print_r($s);

$s = implode('-', $s);

echo "<p>$s</p>";

echo "<hr size='2'>";

$n = rand(2,9);
echo "<p>" . str_repeat("#str<br>", $n) . "</p>";
}
?>

</body>
</html>