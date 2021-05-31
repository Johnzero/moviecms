#! /bin/bash

#yum -y update
#yum --exclude=kernel* -y update

#安装源
yum install -y http://opensource.wandisco.com/centos/7/git/x86_64/wandisco-git-release-7-2.noarch.rpm
#更新gits
yum update -y git

# 安装vue 环境
# 安装 npm
if ! [ -x "$(command -v npm)" ]; then
    yum remove nodejs npm -y
    yum install -y npm
    npm -v
    #更换 npm 淘宝源
    npm config set registry https://mirrors.huaweicloud.com/repository/npm/
    echo "=====更换npm源====="
#    npm install -g cnpm --registry=https://registry.npm.taobao.org;
    #    sudo npm config get registry
    #/usr/bin/npm -> /usr/lib/node_modules/npm/bin/npm-cli.js
    #/usr/bin/npx -> /usr/lib/node_modules/npm/bin/npx-cli.js
    #安装vue vue-cli
    #    sudo npm install --global vue
fi

if ! [ -x "$(command -v yarn)" ]; then
    npm install yarn -g
    echo "=====npm yarn安装完成====="
fi

if ! [ -x "$(command -v composer)" ]; then
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php composer-setup.php
    mv composer.phar /usr/bin/composer
    php -r "unlink('composer-setup.php');"
    composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
    echo "=====composer安装完成====="
fi
composer update --no-dev -o
echo "=====composer update完成====="

if ! [ -x "$(command -v gitlab-runner)" ]; then
    curl -L --output /usr/local/bin/gitlab-runner "https://gitlab-runner-downloads.s3.amazonaws.com/latest/binaries/gitlab-runner-linux-amd64"
    chmod +x /usr/local/bin/gitlab-runner
    rm -rf /usr/bin/gitlab-runner
    rm -rf /etc/systemd/system/gitlab-runner.service
    ln -s /usr/local/bin/gitlab-runner /usr/bin/gitlab-runner
    gitlab-runner install --user=xmt_root --working-directory=/home/gitlab-runner
    gitlab-runner register --url="http://192.168.6.36:8099/" --executor="shell" --token="JHMspdTF6y_yS6H4jAxU"
    gitlab-runner start
    echo "=====composer update完成====="
fi

if ! [ -x "$(command -v docker)" ]; then
    yum install -y docker
    echo "=====docker update完成====="
fi

if ! [ -x "$(command -v docker-compose)" ]; then
    curl -L https://github.com/docker/compose/releases/download/1.29.2/docker-compose-Linux-x86_64 -o /usr/local/bin/docker-compose
    chmod +x /usr/local/bin/docker-compose
    rm -rf /usr/bin/docker-compose
    ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
    docker-compose -v
    echo "=====docker-compose update完成====="
fi

exit;
