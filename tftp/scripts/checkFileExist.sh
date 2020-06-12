#!/bin/bash
if [[ "$#" -ne 1 ]];then
  exit 1
fi

file=$1

exist=$(ls /var/www/html/tftp/conf-Files/$file)

if [ ! -z $exist ];then
  echo -n "1"
else
  echo -n "0"
fi
