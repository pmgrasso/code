#!/bin/bash

echo "ELIMINANDO REGLAS IPTABLES"

/sbin/iptables -P INPUT ACCEPT
/sbin/iptables -P FORWARD ACCEPT
/sbin/iptables -P OUTPUT ACCEPT
/sbin/iptables -t nat -F
/sbin/iptables -t mangle -F
/sbin/iptables -F
/sbin/iptables -X

echo "OK"



exit
