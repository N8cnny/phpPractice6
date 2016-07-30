<!Doctype html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<p>Keyword: <input type="text" name="keyword" size="20"><br>
<textarea rows= '10' cols='90' name="content"></textarea><bR>

<input type="submit" value="Search">
</p>
</form>

<hr size='2'>

<?php
if ($_POST)
{
$str= $_POST["content"];
$keyword = $_POST["keyword"];
$klc= strtolower($keyword);

$length = strlen($klc);
$s= explode (" ", $str);

foreach ($s as $word)
{
if (strpos (strtolower($word), $klc) !==false) 
 {
  $start = strpos(strtolower($word), $klc);
  if ($start >0)
   {
    $sub1 = substr($word, 0, $start);
}
    else
{
$sub1 = null;
}
$sub2 = substr($word, $start, $length);
$sub3 = substr($word, ($start + $length));

echo $sub1;
echo "<span style= 'background-color: yellow'>" . $sub2 . "</span>";
echo"$sub3&nbsp;";
}
else
{
echo $word, "&nbsp;";
}
}
}
?>

</body>
</html>
