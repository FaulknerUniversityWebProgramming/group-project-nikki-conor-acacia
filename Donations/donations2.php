<?php
    $content = file_get_contents('http://data.fixer.io/api/latest?access_key=f0251fa25ebe163f77d76b95e1bfdf67&format=1');


if(document.getElementById('filterMoney').value == '0') {
    $selected = 'AED';
}
$pattern = $selected;

preg_match($pattern, $content, $match);
$price = $match[1];

preg_match('#<input type="hidden" name="quantity_on_hand" value="(.*?)">#', $content, $match);
$in_stock = $match[1];

echo "Price: $price - Availability: $in_stock\n";


//echo $content;


//$str = "Visit W3Schools";
//$pattern = "/w3schools/i";
//echo preg_match($pattern, $str);
?>