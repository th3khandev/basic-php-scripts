<?php

// set time zone
date_default_timezone_set('America/Caracas'); // View more: https://www.php.net/manual/es/timezones.php

// set format date time
$format_date_time = 'd/m/Y H:i:s'; // View more: https://www.php.net/manual/es/function.date.php

// create datetime
$current_date_time = date($format_date_time);

// show current date time
echo "La fecha y hora actual es: $current_date_time";
