<?php
// Value bigger then this will be logged, if downtime is this value or more then save in log file
$minutes = 1;

// How much seconds to tolerate
$tolerate_time = 2;

// Where to log time of last check
$check_file = '../used/uptime_check.dat';

// Where to log downtime
$check_log = '../used/downtime_log.dat';