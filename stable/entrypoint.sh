#!/bin/sh

cp /usr/share/zoneinfo/$TZ /etc/localtime
echo $TZ > /etc/timezone
if [ "$MANUEL_SETUP" != "true" ]; then
  initpop /etc/initpop.yml
  rm -r /var/www/html/config
  mv /var/www/html/_config /var/www/html/config
  envstamp /var/www/html/config
fi
exec /usr/bin/supervisord -c /etc/supervisord.conf
