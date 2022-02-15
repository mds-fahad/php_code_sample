<?php
/*

Md. Salman Fahad
mds.fahad@gmail.com
Date Interval sample
*/


$date = new DateTime("18-July-2008 16:30:30");
echo $date->format("d-m-Y H:i:s");

date_sub($date, new DateInterval("P5D"));
echo '<br />'.$date->format("d-m-Y").' : 5 Days';

date_sub($date, new DateInterval("P5M"));
echo '<br />'.$date->format("d-m-Y").' : 5 Months';

date_sub($date, new DateInterval("P5Y"));
echo '<br />'.$date->format("d-m-Y").' : 5 Years';

date_sub($date, new DateInterval("P5Y5M5D"));
echo '<br />'.$date->format("d-m-Y").' : 5 Days, 5 Months, 5 Years';

date_sub($date, new DateInterval("P5YT5H"));
echo '<br />'.$date->format("d-m-Y H:i:s").' : 5 Years, 5 Hours';

?>