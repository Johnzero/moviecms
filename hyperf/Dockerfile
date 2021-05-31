# syntax=docker/dockerfile:experimental

FROM hyperf/hyperf:7.4-alpine-v3.11-swoole
LABEL maintainer="Hyperf Developers <group@hyperf.io>" version="1.0" license="MIT" app.name="activity.ahxmgk"

##
# ---------- env settings ----------
##
# --build-arg timezone=Asia/Shanghai
ARG timezone

ENV TIMEZONE=${timezone:-"Asia/Shanghai"} \
    APP_ENV=prod \
    SCAN_CACHEABLE=(true)

# update
RUN set -ex \
    # show php version and extensions
    && php -v \
    && php -m \
    && php --ri swoole \
    #  ---------- some config ----------
    && cd /etc/php7 \
    # - config PHP
    && { \
        echo "upload_max_filesize=1280M"; \
        echo "post_max_size=1280M"; \
        echo "memory_limit=-1"; \
        echo "date.timezone=${TIMEZONE}"; \
        echo "swoole.use_shortname = 'Off'"; \
    } | tee conf.d/99_overrides.ini \
    # - config timezone
    && ln -sf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime \
    && echo "${TIMEZONE}" > /etc/timezone \
    # ---------- clear works ----------
    && rm -rf /var/cache/apk/* /tmp/* /usr/share/man \
    && echo -e "\033[42;37m Build Completed :).\033[0m\n"

WORKDIR /data/activity.ahxmgk

# Composer Cache
# COPY ./composer.* /opt/www/
# RUN composer install --no-dev --no-scripts

COPY . /data/activity.ahxmgk
RUN composer install --no-dev -o && php /data/activity.ahxmgk/bin/hyperf.php

EXPOSE 9501

ENTRYPOINT ["php", "/data/activity.ahxmgk/bin/hyperf.php", "start"]
