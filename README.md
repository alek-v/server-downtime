# How to install

Add cron job:  
```bash
curl https://(your_website_address)/cronjob/server_uptime.php >/dev/null 2>&1  
```  
Set cron job to be once per minute.  

Make sure used directory is writable.

Downtime log will be in used/downtime_log.dat file, open file with any text editor to see logged data.