<?php
$a = 0;
while ($a <= 100) :
if ($a <= 20) 
{
echo "<br>" . "<i>" .$a. "</i>";
}
elseif($a >= 25 and $a <= 50 and $a != 42)
{
echo "<br>" . "<u>" .$a. "</u>";
}
elseif($a == 42)
{
    echo "<br>" . "La Plateforme_";
}
else{echo "<br>" .$a;}
$a++;
endwhile ;
?>