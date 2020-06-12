#!/bin/bash
if [[ "$#" -ne 4 ]];then
  exit 1
fi

ip=$1
port=$2
path=$3
file=$4
out1=$(sudo rm ${path}* 2>/dev/null)
pa=$(/var/www/html/tftp/scripts/script.sh $ip $port)
sleep 3
fileOr=$(ls $path)
if [ ! -z $fileOr ];then
  sudo cp ${path}${fileOr} /var/www/html/tftp/conf-Files/$file
  sudo rm ${path}${fileOr}
  sudo chown -R apache:apache /var/www/html/
  sudo chmod -R g+s /var/www/html/
  sudo chmod -R g+w /var/www/html/
  sudo chgrp -R apache /var/www/html/
  echo "1"
else
  echo "0"
fi
