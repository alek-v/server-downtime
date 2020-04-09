<?php
// (c) Aleksandar Vranešević - vavok.net

// start of #Configuration

// how often we are checking
// value bigger then this will be logged
$minutes = 1;

// how much seconds to tolerate
$tolerate_time = 2;

// where to log time of last check
$check_file = '../used/uptime_check.dat';

// where to log downtime
$check_log = '../used/downtime_log.dat';

// end of #Configuration


// get last update
$last_time = file_get_contents($check_file);

// log downtime with time difference
if (time() - $tolerate_time > $last_time + ($minutes * 60)) {
	// load log file
	$log = file_get_contents($check_log);

	// time difference in minutes
	$time_diff = round((time() - $last_time) / 60, 2);

	// time difference in hours
	$time_diff_hours = gmdate("H:i:s", time() - $last_time);


	// update log file

	// add new line
	$log = 'Server downtime: ' . gmdate("H:i:s", time() - $last_time) . ' // Log date: ' . date('d/m/Y h:i:s', time()) . "\r\n" . $log;
	file_put_contents($check_log, $log);
}

// update time of last checking
file_put_contents($check_file, time());


// how many errors to keep logged in database
// save up to 1000 logs
$lines = file($check_log);

if (sizeof($lines) > 1000) {
	$last = sizeof($lines) - 1; 
	unset($lines[$last]); 
}

// we can show current time, last logged time and time difference
echo '<div style="text-align:center;margin-top:50px;">' . time() . ' - ' . $last_time . ' - time diff: ' . round((time() - $last_time) / 60, 2) . '</div>';

?>