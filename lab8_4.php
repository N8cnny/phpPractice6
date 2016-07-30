<!Doctype html>
<html>
<body>

<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p> Enter some message into the text box</p>
<p>Original:<br>
<textarea rows='5' cols='90%' name='original'></textarea>
<input type="submit" value="Submit">
</p>
</form>

<?php
if ($_POST)
{

$str = $_POST["original"];
$str = urlencode($str);
$str = strrev($str);
$str = base64_encode($str);

echo "<p>Cipher: <br> <textarea rows='5' cols='90%' name=\'cipher\'>";
echo $str;
echo "</textarea></p>";

$str = base64_decode($str);
$str= strrev($str);
$str= urldecode($str);

echo"<p>Decipher:<br><textarea rows= '5' cols='90%' name=\'decipher\'>";
echo $str;
echo "</textarea></p>";
}
?>
</body>
</html>