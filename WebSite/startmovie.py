#!/usr/bin/env python

from socket import *

HOST = '192.168.1.121'
PORT = 12345
BUFSIZE = 1024
ADDR = (HOST, PORT)
udpCliSock = socket(AF_INET, SOCK_DGRAM)
data = 'recommend'
udpCliSock.sendto(data, ADDR)
udpCliSock.close()