FROM php:5.6.33-fpm-alpine3.4

ARG tao_version=3.2.0-RC2
ARG mathjax_version=2.2.0
ARG envstamp_version=0.2.0

ENV CHROME_BIN=/usr/bin/chromium-browser \
    PUPPETEER_SKIP_CHROMIUM_DOWNLOAD=true

LABEL image=jamrizzi/tao:stable \
      maintainer="Jam Risser <jam@jamrizzi.com> (https://jam.jamrizzi.com)" \
      tao_version=$tao_version \
      envtamp_version=$envstamp_version \
      mathjax_version=$mathjax_version \
      base=alpine:3.4

RUN apk add --no-cache \
      libpng-dev \
      mysql-client \
      nginx \
      nodejs \
      rsync \
      supervisor \
      tzdata
RUN docker-php-ext-install \
      gd \
      pdo_mysql \
      mysqli \
      opcache \
      zip && \
    mkdir -p /run/nginx
RUN echo @edge http://nl.alpinelinux.org/alpine/edge/community >> /etc/apk/repositories && \
    echo @edge http://nl.alpinelinux.org/alpine/edge/main >> /etc/apk/repositories && \
    apk add --no-cache \
      chromium@edge \
      nss@edge && \
    npm install -g initpop && \
    curl -L -o /usr/local/bin/envstamp \
      https://github.com/jamrizzi/envstamp/releases/download/${envstamp_version}/envstamp && \
    chmod +x /usr/local/bin/envstamp

WORKDIR /var/www/html

RUN cd /tmp && \
    curl -L -o tao_build.zip http://releases.taotesting.com/TAO_${tao_version}_build.zip && \
    unzip tao_build.zip && \
    rsync -r TAO_${tao_version}_build/ /var/www/html && \
    sed -i -e "s/return 'tao_' . helpers_Random::generateString(8);/return 'tao_12345678';/g" \
      /var/www/html/tao/install/class.Installator.php

COPY stable/mathjax-exclude.txt /tmp/mathjax-exclude.txt
COPY stable/config /tmp/config
COPY stable/locales /tmp/locales

RUN cd /tmp && \
    curl -L -o mathjax.tar.gz https://github.com/mathjax/MathJax/archive/${mathjax_version}.tar.gz && \
	  tar --strip-components=1 -xzvf mathjax.tar.gz \
      -C /var/www/html/taoQtiItem/views/js/mathjax \
      -X mathjax-exclude.txt && \
    mv /tmp/config /var/www/html/_config && \
    rm -r /var/www/html/tao/views/locales && \
    mv /tmp/locales /var/www/html/tao/views/locales && \
    chown -R nobody:nobody /var/www/html && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    find /var/www/html -type d -exec chmod 777 {} \;

COPY stable /tmp

RUN mv /tmp/entrypoint.sh /usr/local/sbin/entrypoint.sh && \
    mv /tmp/initpop.sh /usr/local/sbin/initpop.sh && \
    mv /tmp/supervisord.conf /etc/supervisord.conf && \
    mv /tmp/nginx.conf /etc/nginx/nginx.conf && \
    mv /tmp/initpop.yml /etc/initpop.yml && \
    chmod -R +x /usr/local/sbin && \
    rm -rf /tmp/* /tmp/.* &>/dev/null || true

EXPOSE 80

ENV DATABASE_HOST=database \
    DATABASE_NAME=tao \
    DATABASE_PASSWORD=hellodocker \
    DATABASE_USER=tao \
    INSTANCE_NAME=tao \
    OPERATED_BY_NAME="JamRizzi Technologies" \
    OPERATED_BY_EMAIL=email@example.com \
    ROOT_URL=http://localhost \
    SAMPLE_DATA=false \
    USER_FIRSTNAME=Jam \
    USER_LASTNAME=Risser \
    USER_EMAIL=email@example.com \
    USER_USERNAME=admin \
    USER_PASSWORD=hellodocker \
    MANUEL_SETUP=false \
    TZ=UTC

ENTRYPOINT ["/bin/sh", "/usr/local/sbin/entrypoint.sh"]
