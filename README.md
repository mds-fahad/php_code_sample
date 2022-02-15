# php_code_sample
helpful php function, code sample 

date_sub — Subtracts an amount of days, months, years from a DateTime object

Description
void date_sub ( DateTime $object , DateInterval $interval )
Subtracts the specified DateInterval object from the specified DateTime object.

object
A date as returned by DateTime.

interval
The amount to be subtracted. For the date use "P3D", "P3M", "P3Y" or a combination of the three e.g. "P2M5D" (Y = Years, M = Months, D = Days.) MUST BE YEAR MONTH DAY FORMAT "P5Y", "P5M2D", "P5Y4D". 

Exemple #1 date_sub() example

    <?php

    $date = new DateTime("18-July-2008 16:30:30");
    echo $date->format("d-m-Y H:i:s").'<br />';

    date_sub($date, new DateInterval("P5D"));
    echo '<br />'.$date->format("d-m-Y").' : 5 Days';

    date_sub($date, new DateInterval("P5M"));
    echo '<br />'.$date->format("d-m-Y").' : 5 Months';

    date_sub($date, new DateInterval("P5Y"));
    echo '<br />'.$date->format("d-m-Y").' : 5 Years';

    date_sub($date, new DateInterval("P5Y5M5D"));
    echo '<br />'.$date->format("d-m-Y").' : 5 Days, 5 Months, 5 Years';

    ?>
    Result : 
    18-07-2008 16:30:30
    13-07-2008 : 5 Days
    13-02-2008 : 5 Months
    13-02-2003 : 5 Years
    08-09-1997 : 5 Days, 5 Months, 5 Years

