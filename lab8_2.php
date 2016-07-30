<?php
if ($_POST)
{
$str = $_POST["content"];
$keyword = $_POST["keyword"];

echo "The original version :<br><b>" . $str . "</b>";
echo"<p>The reveresed version : <br>" . strrev("$str") . "<br>";
echo "<p>The wrapepd version: <br>" . wordwrap($str, 80, "<br>");

echo "<hr size='2'>";

echo "<p>There are " . str_word_count($str, 0) . " words, ";
echo strlen($str) . " characters.<br>";
echo"<b>$keyword</b> appears " . substr_count($str, $keyword) . " time(s). <br>";

$x = count_chars($str, 1);

$k = array_keys($x);

$v = array_values($x);
echo "Char : Frequency<br>";

for ($i=0; $i<count($x); $i++)
{
echo chr($k[$i]) , " : $v[$i]<br>";
}
}

else
{
?>

<p> Enter a long message (at least 500 chracters), then click the button</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
Keyword: <input type='text' name='keyword'><br>
<textarea rows ='5' cols='90' name="content"></textarea><br>
<input type="submit" value="Submit" />
</p> 
</form>

<?php
}
?>