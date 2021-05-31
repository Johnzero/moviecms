#! /bin/bash

#basepath=$(cd `dirname $0`; pwd)
#cd $basepath
#echo $basepath

#cd /www/wwwroot/activity.ahxmgk
#composer update
#git pull origin master

#/usr/bin/php ./bin/swoft http:restart

PROCESS=`ps -ef|grep 'skeleton\|activity'|grep -v grep|grep -v handleProcess.sh|awk '{print $2}'`
if [ "$PROCESS" != "" ]
then
    for i in $PROCESS
        do
            kill -9 $i
            if [ $? -eq 0 ];then
                echo -e "已成功杀死 $1 进程,[$i]"
            else
                echo -e "杀死进程 $1 失败！请确认执行权限！"
            fi
        done
fi

nohup php bin/hyperf.php start &
exit
#if [ -f "../runtime/swoft.pid" ];then
#    str=$(cat ../runtime/swoft.pid)
#    arr=(${str//,/ })
#    for i in ${arr[@]}
#        do
#            kill -9 $i
#        done
#        #  cat ../runtime/swoft.pid | awk '{print $1}' | xargs kill &&
#        rm -rf ../runtime/swoft.pid && rm -rf ../runtime/Consolelog.log
#fi

#if [ -f "../runtime/logs/console.log" ];then
#    rm -rf ../runtime/logs/console.log
#fi



#handleProcess()
#{
# if [ $# -lt 1 ]
# then
#     echo "缺少参数，请输入项目名称"
#     exit
# fi
#
# PROCESS=`ps -ef|grep $1|grep -v grep|grep -v handleProcess.sh|awk '{print $2}'`
# if [ "$PROCESS" != "" ]
# then
#     for i in $PROCESS
#       do
#           kill -9 $i
#             if [ $? -eq 0 ];then
#                 echo -e "已成功杀死 \033[33m$1\033[0m 进程,[$i]"
#             else
#                 echo -e "杀死进程 \033[33m$1\033[0m 失败！请确认执行权限！"
#                 exit
#             fi
#      done
#      sudo -u nginx php7.1 /data/www/$1/bin/swoft start -d
#      echo -e "已重新启动 \033[33m$1\033[0m 进程"
# else
#     echo -e "没有已启动的 \033[33m$1\033[0m 进程"
#     exit
# fi
#}

#handleProcess $*
