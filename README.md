# Monitor Server Downtime

This script will help to monitor, and log server downtime.

Using cron job we will try to access the page on the server, and check if server is responding.

If server is not responding more than a given time, script will log duration of the downtime.

## How to install

Add cron job:  
```bash
curl https://(your_website_address)/cronjob/server_uptime.php >/dev/null 2>&1  
```  
Set cron job to be once per minute.  

Make sure used directory is writable.

Downtime log will be in used/downtime_log.dat file, open file with any text editor to see logged data.

## Comments about this script

Every Web project needs to be monitored to confirm it responds well when the users access the site.

One way to monitor a site is to try to access one page and check if it is responding quickly.

This package provides a script that responds to accesses from a separate server.

The script can check an internal file that records the last time the site application responded well.

If it passed more than a given time, the script can record a down time moment and output a response that displays the current down time.

This way, a developer can implement a simple server status script cheaply.

Comment by Manuel Lemos