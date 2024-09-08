<?php
echo "Hello";
echo "<br>";
for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=10-$i;$j++)
    if($j>=10 && $j<=10-$i)
        echo "*";
    else
        echo " ";
        echo "<br>";
    
}

?>