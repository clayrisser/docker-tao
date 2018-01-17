#!/bin/sh

cp /usr/share/zoneinfo/$TZ /etc/localtime
echo $TZ > /etc/timezone
sh /usr/local/sbin/initpop.sh &
exec /usr/bin/supervisord -c /etc/supervisord.conf
