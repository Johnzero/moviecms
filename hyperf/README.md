The various versions of Dockerfile have been prepared for you in the [hyperf\hyperf-docker](https://github.com/hyperf/hyperf-docker) project, or directly based on the already built [hyperf\hyperf](https://hub.docker.com/r/hyperf/hyperf) Image to run.

When you don't want to use Docker as the basis for your running environment, you need to make sure that your operating environment meets the following requirements:  

 - PHP >= 7.2
 - Swoole PHP extension >= 4.4，and Disabled `Short Name`
 - OpenSSL PHP extension
 - JSON PHP extension
 - PDO PHP extension （If you need to use MySQL Client）
 - Redis PHP extension （If you need to use Redis Client）
 - Protobuf PHP extension （If you need to use gRPC Server of Client）

# Installation using Composer

$ cd path/to/install
$ php bin/hyperf.php start

This will start the cli-server on port `9501`, and bind it to all network interfaces. You can then visit the site at `http://localhost:9501/`

which will bring up Hyperf default home page.

PHP >= 7.3
Swoole PHP 扩展 >= 4.5，并关闭了 Short Name
OpenSSL PHP 扩展
JSON PHP 扩展
PDO PHP 扩展 （如需要使用到 MySQL 客户端）
Redis PHP 扩展 （如需要使用到 Redis 客户端）
Protobuf PHP 扩展 （如需要使用到 gRPC 服务端或客户端）

composer create-project hyperf/hyperf-skeleton

docker run --name hyperf \
-v /workspace/skeleton:/data/project \
-p 9501:9501 -it \
--privileged -u root \
--entrypoint /bin/sh \
hyperf/hyperf:7.4-alpine-v3.11-swoole

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer
"repositories": {
    "packagist": {
      "type": "composer",
      "url": "https://mirrors.aliyun.com/composer/"
    }
}

[swoole]
extension = swoole.so
swoole.use_shortname = off

Swoole 内核参数调整
ulimit 设置
ulimit -n 要调整为 100000 甚至更大。 命令行下执行 ulimit -n 100000 即可修改。如果不能修改，需要设置 /etc/security/limits.conf，加入

* soft nofile 262140
* hard nofile 262140
root soft nofile 262140
root hard nofile 262140
* soft core unlimited
* hard core unlimited
root soft core unlimited
root hard core unlimited

注意，修改 limits.conf 文件后，需要重启系统生效

内核设置
Linux 操作系统修改内核参数有 3 种方式：

修改 /etc/sysctl.conf 文件，加入配置选项，格式为 key = value，修改保存后调用 sysctl -p 加载新配置
使用 sysctl 命令临时修改，如：sysctl -w net.ipv4.tcp_mem="379008 505344 758016"
直接修改 /proc/sys/ 目录中的文件，如：echo "379008 505344 758016" > /proc/sys/net/ipv4/tcp_mem
第一种方式在操作系统重启后会自动生效，第二和第三种方法重启后失效

net.unix.max_dgram_qlen = 100
swoole 使用 unix socket dgram 来做进程间通信，如果请求量很大，需要调整此参数。系统默认为 10，可以设置为 100 或者更大。或者增加 worker 进程的数量，减少单个 worker 进程分配的请求量。

net.core.wmem_max
修改此参数增加 socket 缓存区的内存大小

net.ipv4.tcp_tw_reuse
是否 socket reuse，此函数的作用是 Server 重启时可以快速重新使用监听的端口。如果没有设置此参数，会导致 server 重启时发生端口未及时释放而启动失败

net.ipv4.tcp_tw_recycle
使用 socket 快速回收，短连接 Server 需要开启此参数。此参数表示开启 TCP 连接中 TIME-WAIT sockets 的快速回收，Linux 系统中默认为 0，表示关闭。打开此参数可能会造成 NAT 用户连接不稳定，请谨慎测试后再开启。

net.unix.max_dgram_qlen = 100
net.ipv4.tcp_mem  = 379008 505344 758016
net.ipv4.tcp_wmem = 4096 16384 4194304
net.ipv4.tcp_rmem = 4096 87380 4194304
net.core.wmem_default = 8388608
net.core.rmem_default = 8388608
net.core.rmem_max = 16777216
net.core.wmem_max = 16777216
net.ipv4.tcp_syncookies=1
net.ipv4.tcp_max_syn_backlog=81920
net.ipv4.tcp_synack_retries=3
net.ipv4.tcp_syn_retries=3
net.ipv4.tcp_fin_timeout = 30
net.ipv4.tcp_keepalive_time = 300
net.ipv4.tcp_tw_reuse = 1
net.ipv4.tcp_tw_recycle = 1
net.ipv4.ip_local_port_range = 20000 65000
net.ipv4.tcp_max_tw_buckets = 200000
net.ipv4.route.max_size = 5242880

gitlab-runner

curl -L --output /usr/local/bin/gitlab-runner "https://gitlab-runner-downloads.s3.amazonaws.com/latest/binaries/gitlab-runner-linux-amd64"
chmod +x /usr/local/bin/gitlab-runner
mkdir /home/gitlab-runner
mkdir /var/lib/gitlab-runner
rm -rf /usr/bin/gitlab-runner
rm -rf /etc/systemd/system/gitlab-runner.service
ln -s /usr/local/bin/gitlab-runner /usr/bin/gitlab-runner
gitlab-runner install --user=xmt_root --working-directory=/home/gitlab-runner
gitlab-runner register --url="http://192.168.6.36:8099/" --executor="shell" --token="JHMspdTF6y_yS6H4jAxU"
gitlab-runner start
echo "=====composer update完成====="


切换用户
/usr/bin/gitlab-runner run --working-directory /home/gitlab-runner --config /etc/gitlab-runner/config.toml --service gitlab-runner --syslog --user root

Git
cd /data
git config --global credential.helper store
git clone http://192.168.6.36:8099/root/activity.ahxmgk.git

php73 swoole.so openssl
mkdir -p /usr/local/openssl/lib


find / -type f -size +200M


docker run --name activity.ahxmgk -v /data/activity.ahxmgk:/data/project -p 9501:9501 -it --privileged -u root --entrypoint /bin/sh hyperf/hyperf:7.4-alpine-v3.11-swoole

 docker run --name activity.ahxmgk1 -p 9501:9501 -v /data/activity.ahxmgk:/data/ac
tivity.ahxmgk activity.ahxmgk:1.0

docker run --name activity.ahxmgk2 -p 9501:9501 -v /data/activity.ahxmgk:/data/ac
tivity.ahxmgk activity.ahxmgk:1.0

docker run --name activity.ahxmgk1 -p 9501:9501 -v /data/test:/data/activity.ahxmgk activity.ahxmgk:1.0

curl -L https://github.com/docker/compose/releases/download/1.29.2/docker-compose -o /usr/local/bin/docker-compose
docker-compose -v
chmod +x /usr/local/bin/docker-compose
ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose

git fetch --all
git reset --hard origin/master
