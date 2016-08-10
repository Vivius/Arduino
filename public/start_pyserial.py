#!/usr/bin/python

import serial
s = serial.Serial('/dev/ttyS2', 9600)
raw_input("Pressez une touche pour stopper la connexion ...")
s.close()

