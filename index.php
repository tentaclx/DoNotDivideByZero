<?php
$img = "https://3.downloader.disk.yandex.ru/preview/e0d368fd57541e766bed1305b677674f8f9a9e168949726ba01aee2f09499c0b/inf/O2DwWR5JxPWs4_LhzWa_HAMjPLmseHcGuX95GtbsfLwGUkjnKdf-WArhlPQNfcXvL3TBXFhP8S2uAd9TJvTiKw%3D%3D?uid=678059045&filename=IMG_6150.CR2&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=678059045&tknv=v2&size=288x152";
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$result;
$operation = $_GET['operation'];
switch ($operation){
  case "+":
  $result = $number1 + $number2;
  break;
  case "*":
  $result = $number1 * $number2;
  break;
  case "-":
  $result = $number1 - $number2;
  break;
  case "/":
  if ($number2 == 0) {
      $img = "https://downloader.disk.yandex.ru/preview/116c3e65f4738b0c9cabd66a96b54489ab483ac1786160e28c7267e85caa33d2/5fdbe80b/tQO9GUM7-VyfzYNvjcH9RVyEBgjA18U9StELW3SZgHsrUspkc49RrTPLD5J4zus-W0AFMeK3VzeimIYD8y5AIA%3D%3D?uid=0&filename=Снимок%20экрана%202020-12-17%20в%2022.20.06.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=288x152";
  }
  $result = $number1 / $number2;
  break;

}

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>калькулятор</title>
  </head>
  <body>
<img src="<?=$img?>"/>
<form>
 <p><b>Калькулятор</b></p>
 <p><input required type="number" name="number1">
 <select name="operation">
<option value="+">Сложение</option>
<option value="*">Умножение</option>
<option value="-">Вычитание</option>
<option value="/">Деление</option>
</select>
<input required type="number" name="number2"></p>
 <p><input type="submit"></p>
</form>
<?php
if ($operation == '/' && $number2 == 0) {
    echo ' На ноль делишь? o_O';
} else if (isset($operation)){
    echo $number1 . ' ' . $operation . ' ' . $number2 . ' = ' . $result;
}
?>
  </body>
</html>
