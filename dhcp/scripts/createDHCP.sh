#!/bin/bash
if [[ "$#" -ne 1 ]];then
  exit 1
fi

data=$1

echo -e $data > ../confFile/dhcpd.conf
sudo chown -R apache:apache /var/www/html/
sudo chmod -R g+s /var/www/html/
sudo chmod -R g+w /var/www/html/
sudo chgrp -R apache /var/www/html/
