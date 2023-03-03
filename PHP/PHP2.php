<html>
<body>
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

<?php
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."\n";
echo test(3, 2)."\n";
echo test(2, 2)."\n";   

?>

</body>
</html