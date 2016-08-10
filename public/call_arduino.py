import serial
import sys

arduino = serial.Serial('/dev/ttyS2', 9600)
arduino.write(sys.argv[1])
print(arduino.readline())
