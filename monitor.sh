#!/bin/bash

WATCH_IP_1="dbblgffno2hzk3ar.myfritz.net"
WATCH_IP_2="cloud.miche1.de"
PAUSE=300

#init
rm status-log.txt;




while true; do
  echo "" > status-log.txt;  

  #vpn
  if ! ping -c 1 -w 1 $WATCH_IP_1 > /dev/null; then
    echo $WATCH_IP_1 ";false" >> status-log.txt;
  else
    echo $WATCH_IP_1 ";true;" >> status-log.txt;
  fi;

  #cloud
  if ! ping -c 1 -w 1 $WATCH_IP_2 > /dev/null; then
    echo $WATCH_IP_2 ";false" >> status-log.txt;
  else
    echo $WATCH_IP_2 ";true;" >> status-log.txt;
  fi;

  sleep $PAUSE;
done

