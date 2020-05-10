<?php
//function receiveTextFromPython($base64)
//{
//    $texts=[];
//    $n=0;
//    for ($i=0 ; $i<100 ;$i++)
//        {
//            if ($base64[$i] != '*')
//             $texts[$n]=$texts[$n]+base64_decode($base64[$i]);
//            else
//                $n++;
//        }
//    return $texts;
//}
$var = exec("python C:\\Users\\Yassine\\PhpstormProjects\\Firstgit1\\resources\\views\py\\facebookScrap.py");
$text=base64_decode($var);
$text=strval($text);
echo $text;
?>
