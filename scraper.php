
<?php

$city=$_GET['city'];

// this line below makes sure that users can enter a two or more word city as it is without having to wory about eliminating spaces becasue website does not allow for it
$city=str_replace(" ", "", $city);

$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");


preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</', $contents, $matches);

echo $matches[1];



?>