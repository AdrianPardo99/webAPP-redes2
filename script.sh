#!/bin/bash
if [[ "$#" -ne 1 ]];then
  exit 1
fi

var=$(ls $1)
arr=($(echo $var | tr "\ " "\n"))
strF=""
for i in "${arr[@]}";do
  case $i in
    css|js|font|iconfont|phpGral|img )
      continue
      ;;
    * )
      typeD=$(file $1$i | grep "directory")
      if [[ ! -z $typeD  ]];then
        strF+="<li><a href=\"/$i\">$i</a></li>"
      fi
    ;;
  esac
done
strF+="<li><a href=\"/\">Principal</a></li>"
echo $strF
