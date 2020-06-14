#!/bin/bash
if [[ "$#" -ne 1 ]];then
  exit 1
fi

in=$1
IFS=';' read -ra arr <<< "$in"

echo -e "\$TTL 86400\n@   IN  SOA   ${arr[0]}. root.${arr[0]}. (\n\t\t2011071001\n\t\t3600\n\t\t1800\n\t\t604800\n\t\t86400\n)\n@\tIN\tNS\t${arr[1]}.${arr[0]}.\n${arr[1]}.${arr[0]}.\tIN\tA\t192.168.1.10" > ../confFile/dnsRedes.local
echo -e "\$TTL 86400\n@   IN  SOA   ${arr[0]}. root.${arr[0]}. (\n\t\t2011071001\n\t\t3600\n\t\t1800\n\t\t604800\n\t\t86400\n)\n@\tIN\tNS\t${arr[1]}.${arr[0]}.\n192.168.1.10\tIN\tPTR\t${arr[1]}.${arr[0]}." > ../confFile/reverse.dnsRedes.local
sudo chown -R apache:apache /var/www/html/
sudo chmod -R g+s /var/www/html/
sudo chmod -R g+w /var/www/html/
sudo chgrp -R apache /var/www/html/
echo "Hecho"
