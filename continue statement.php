<html>
<head>
<title>Continue statement</title>
</head>
<body>
<h1>Continue statement</h1>
<?php
for($i=1;$i<=10;$i++)
{
if($i%2==0)
{
continue; //terminates the current iteration and moves to next
}
echo "$i<br/>";
}
echo "Loop is Over!";
?>
</body>
</html>