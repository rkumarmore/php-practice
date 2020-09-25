<?php 
$rev=0;
$num=123;
while($num>=1)
{
  $re=$num%10;
  $rev=$rev*10+$re;
  $num=$num/10;
}
echo "Reverse number of is " .$rev;