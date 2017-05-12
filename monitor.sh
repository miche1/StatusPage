#!/bin/bash

WATCH_IP_1="dbblgffno2hzk3ar.myfritz.net"
WATCH_IP_2="cloud.miche1.de"
WATCH_IP_3="status.miche1.de"
WATCH_IP_4="garmin.miche1.de"

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

  #node1
  if ! ping -c 1 -w 1 $WATCH_IP_3 > /dev/null; then
    echo $WATCH_IP_3 ";false" >> status-log.txt;
  else
    echo $WATCH_IP_3 ";true;" >> status-log.txt;
  fi;

  #node2
  if ! ping -c 1 -w 1 $WATCH_IP_4 > /dev/null; then
    echo $WATCH_IP_4 ";false" >> status-log.txt;
  else
    echo $WATCH_IP_4 ";true;" >> status-log.txt;
  fi;



  echo "checking status..."
  sleep $PAUSE;
done

