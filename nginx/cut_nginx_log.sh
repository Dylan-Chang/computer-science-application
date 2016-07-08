#!/bin/bash
# 这个脚本须在每天的 00:00 运行

logs_path = "/data/logs/"

mkdir -p ${logs_path}${date -d "yesterday" + "%Y"} /${data -d "yesterday" + "%m"}/
mv ${logs_path}access.log ${logs_path}${date -d "yesterday" + "%Y"}/${data -d 
"yesterday" + "%m"}/access_${date -d "yesterday" + "%Y%m%d"}.log
kill -USR1 `cat /usr/local/webserver/nginx/nginx.pid`



