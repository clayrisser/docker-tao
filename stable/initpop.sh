#!/bin/sh

if [ "$MANUEL_SETUP" == "true" ]; then
  rm -r /var/www/html/_config
else
  if [ "$(mysql -h${DATABASE_HOST} -u${DATABASE_USER} -p${DATABASE_PASSWORD} -e "use ${DATABASE_NAME}; show tables;" | grep statements)" = "" ]; then
    until $(curl --output /dev/null --silent --head --fail http://localhost:8080/tao/install); do
      sleep 5
    done
    initpop /etc/initpop.yml
  fi
  rm -r /var/www/html/config
  mv /var/www/html/_config /var/www/html/config
  envstamp /var/www/html/config
  echo "Tao is ready at $ROOT_URL"
fi
