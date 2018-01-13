FROM php:5.6.33-fpm-alpine3.4

ARG tao_version=3.2.0-RC2

LABEL image=jamrizzi/tao:stable \
      maintainer="Jam Risser <jam@jamrizzi.com> (https://jam.jamrizzi.com)" \
      tao_version=$tao_version \
      base=alpine:3.4

RUN apk add --no-cache \
      libpng-dev \
      nginx \
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

WORKDIR /var/www/html

COPY stable /tmp

RUN cd /tmp && \
    curl -L -o tao_build.zip http://releases.taotesting.com/TAO_${tao_version}_build.zip && \
    unzip tao_build.zip && \
    rsync -r TAO_${tao_version}_build/ /var/www/html
RUN curl -L https://hub.taocloud.org/resources/taohub-articles/articles/third-party/MathJax_Install_TAO_3x.sh | sh
RUN chown -R nobody:nobody /var/www/html && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    find /var/www/html -type d -exec chmod 777 {} \;

RUN mv /tmp/entrypoint.sh /usr/local/sbin/entrypoint.sh && \
    mv /tmp/supervisord.conf /etc/supervisord.conf && \
    mv /tmp/nginx.conf /etc/nginx/conf.d/default.conf && \
    rm -rf /tmp/* /tmp/.* &>/dev/null || true

EXPOSE 8080

ENV TZ=UTC

ENTRYPOINT ["/bin/sh", "/usr/local/sbin/entrypoint.sh"]
