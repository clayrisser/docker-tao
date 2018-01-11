FROM php:7.2.1-fpm-alpine3.7

ARG tao_version=3.2.0-RC2

LABEL image=jamrizzi/tao:nginx \
      maintainer="Jam Risser <jam@jamrizzi.com>" \
      tao_version=$tao_version \
      base=alpine:3.7

EXPOSE 8080

RUN apk add --no-cache \
      libpng-dev \
      nginx \
      rsync \
      supervisor && \
    mkdir -p /run/nginx
RUN docker-php-ext-install \
      gd \
      pdo_mysql \
      mysqli \
      opcache \
      zip

RUN cd /tmp && \
    curl -L -o tao_build.zip http://releases.taotesting.com/TAO_${tao_version}_build.zip && \
    unzip tao_build.zip && \
    rsync -r TAO_${tao_version}_build/ /var/www/html

WORKDIR /var/www/html

RUN curl -L https://hub.taocloud.org/resources/taohub-articles/articles/third-party/MathJax_Install_TAO_3x.sh | sh && \
    chown -R nobody:nobody /var/www/html && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    find /var/www/html -type d -exec chmod 777 {} \;

COPY stable/supervisord.conf /etc/supervisord.conf
COPY stable/nginx.conf /etc/nginx/conf.d/default.conf

RUN rm -rf /tmp/* /tmp/.* &>/dev/null || true

ENTRYPOINT ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
