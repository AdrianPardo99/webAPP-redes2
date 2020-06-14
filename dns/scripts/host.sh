#!/bin/bash
if [[ "$#" -ne 2 ]];then
  exit 1
fi

dir=$1
inv=$2
varD=$(../scripts/aplicacion $dir)
varI=$(../scripts/aplicacion $inv)
vD=$(../scripts/appendFile $varD ../confFile/dnsRedes.local)
vI=$(../scripts/appendFile $varI ../confFile/reverse.dnsRedes.local)
sudo chown -R apache:apache /var/www/html/
sudo chmod -R g+s /var/www/html/
sudo chmod -R g+w /var/www/html/
sudo chgrp -R apache /var/www/html/
echo "Heho"
