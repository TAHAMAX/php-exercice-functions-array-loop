<?php 
echo "\n","<<<<<<<<<<<<<<<<<<<<<php-exercises-loop>>>>>>>>>>>>>>>>>>>";
echo "\n","//////////////////////Exercice 1 >>///////////////////","\n";

for ($var = 0;$var < 10;++$var)
{
	echo $var," , ";
}
echo "\n";
echo "\n","//////////////////////Exercice 2 >>///////////////////","\n";
$x = 0 ;
$y = 2 ;
while ( $x < 20) 
{
$z = $x*$y;
echo $x," ", $z,"\n";
$x = $x + 1 ;
}
echo "\n";
echo "\n","//////////////////////Exercice 3 >>///////////////////","\n";
$x = 100 ;
$y = 2 ;
while ( $x > 10) 
{
$z = $x*$y;
echo $x," ", $z,"\n";
$x = $x - 1;
}
echo "\n";
echo "\n","//////////////////////Exercice 4 >>///////////////////","\n";
$x = 1;
while ( $x < 10) 
{
echo $x," ","\n";
$x = $x + 0.5;
}
echo "\n";
echo "\n","//////////////////////Exercice 5 >>///////////////////","\n";
for ($i=1; $i <=15 ; $i++)
{ 
echo "On y arrive presque \n";
}
echo "\n";
echo "\n","//////////////////////Exercice 6 >>///////////////////","\n";
for ($i=20; $i >=0 ; $i--)
{ 
echo "C'est presque bon \n";
}
echo "\n";
echo "\n","//////////////////////Exercice 7 >>///////////////////","\n";
for ($i=1; $i <=100 ; $i=$i+15)
{ 
echo "On tient le bon bout \n";
}
echo "\n";
echo "\n","//////////////////////Exercice 8 >>///////////////////","\n";
for ($i=200; $i >=0 ; $i=$i-12)
{ 
echo "Enfin !!!! \n";
}

?>