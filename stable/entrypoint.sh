#!/bin/sh

cp /usr/share/zoneinfo/$TZ /etc/localtime
echo $TZ > /etc/timezone
envstamp /var/www/html/config
exec /usr/bin/supervisord -c /etc/supervisord.conf
