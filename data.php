<?php

$banner= "\033[1;31m╔════════════════════════════════════════════════╗\033[1;31m
║████████╗███████╗ █████╗ ███╗   ███╗     █████╗ ║
║╚══██╔══╝██╔════╝██╔══██╗████╗ ████║    ██╔══██╗║
║\033[1;33m   ██║   █████╗  ███████║██╔████╔██║    ╚█████╔╝║
║   ██║   ██╔══╝  ██╔══██║██║╚██╔╝██║    ██╔══██╗║
║\033[1;32m   ██║   ███████╗██║  ██║██║ ╚═╝ ██║    ╚█████╔╝║
║   ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝     ╚════╝ ║
╚════════════════════════════════════════════════╝
                                 \033[0;38m『BOT.PREMIUM』
";

$bot_poker="JCX-@JzYW5kaSI6ImhNGTdHBzO+%wvXC9wYXNNGTZWJpbi5jb21cL3Jhd1wvUHFZ&ZU5KRGkiLCJ1cGRhdGVfc2FuZGkiOiJodHRwczpcL1wvb2NrbGVzLmNvbVwvRE5aQWN6NU1KdkhDc2tqTEVHU2wifQFV8FV8";


function get_reff($data,$asu){
  if ($data == 10){
    $a = array(43228,43229,43230);
    $hasil = $a[$asu];
  }elseif ($data == 20){
    $a = array(86458,86459,86460);
    $hasil = $a[$asu];
    }else{
    echo "error data";
    exit();
  }
  return $hasil;
}

$hapus = "of";
$po=rand(1,2)*10;
$pi=get_reff($po,0);
$a = $po;
$b = $pi;

$ping = "10";
$pong = "43231";
