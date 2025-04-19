<?php
$company = htmlspecialchars($_POST["company"], ENT_QUOTES);
$si= htmlspecialchars($_POST["si"], ENT_QUOTES);
$zj = htmlspecialchars($_POST["zj"], ENT_QUOTES);
print "私の名前は、" . "$company" . "<br />";
print "ご希望の商品は、" . "$si" . "<br />";
print "注文数は、" . "$zj" . "<br />";