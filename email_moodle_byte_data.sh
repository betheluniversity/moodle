#!/bin/bash

# This script is designed to get last month's input and output byte data,
# then send it as an email via cron.

(IFS='
'
LAST_MONTH=`date -d "$(date +%Y-%m-1) -1 month" +%Y%m`
for x in $(sudo ls /var/log/httpd/ | grep 'access_log.moodle.bethel.edu-.*\.gz' | grep $LAST_MONTH); do
  received=$(sudo /bin/zcat /var/log/httpd/$x | grep -oE '[0-9]*$' | awk '{s+=$1} END {print s}')
  total_received=$((received + total_received))
  sent=$(sudo /bin/zcat /var/log/httpd/$x | grep -oE "[0-9]* [0-9]*$" | cut -d ' ' -f 1 | awk '{s+=$1} END {print s}')
  total_sent=$((sent + total_sent))
done
echo "Here are the bytes received and sent that were collected from apache's access logs. This is last months data: $LAST_MONTH."
echo "================"
echo "Bytes Received"
echo $total_received | numfmt --to=iec
echo "Bytes Sent"
echo $total_sent | numfmt --to=iec )
