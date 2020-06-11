#!/bin/bash
if [[ "$#" -ne 1 ]];then
  exit 1
fi

var=$(ls $1)
arr=($(echo $var | tr "\ " "\n"))
strF=""
for i in "${arr[@]}";do
  if [[ "$i" != "js" ]];then
    if [[ "$i" != "css" ]];then
      if [[ "$i" != "font" ]];then
        if [[ "$i" != "iconfont" ]];then
          if [[ "$i" != "img" ]];then
            if [[ "$i" != "phpGral" ]];then
              tipo=$(file $1$i)
              arr2=($(echo $tipo | tr " " "\n"))
              if [[ "${arr2[2]}" == "directory" ]];then
                strF+="<li><a href=\"/$i\">$i</a></li>"
              fi
            fi
          fi
        fi
      fi
    fi
  fi
done
strF+="<li><a href=\"/\">Principal</a></li>"
echo $strF
