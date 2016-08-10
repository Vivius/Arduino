#!/bin/bash

chmod 777 /dev/ttyS2

cat << EOF > start_pyserial.py
#!/usr/bin/python

import serial
s = serial.Serial('/dev/ttyS2', 9600)
raw_input("Pressez une touche pour stopper la connexion ...")
s.close()

EOF

chmod 755 start_pyserial.py

./start_pyserial.py

