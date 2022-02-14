import RPi.GPIO as GPIO
import time
import datetime
#import requests
import urllib3 as lib

count = 0

def coin_count(pin):
    global count
    count+=1
    print(count)
    
# db = sql.connect(host="sql6.freemysqlhosting.net",user="sql6451475", password="kBnuw4Re4N", database="sql6451475")

button = 12
# mycursor = db.cursor()

# SETUP 1
#GPIO.setmode(GPIO.BCM)
#GPIO.setup(button, GPIO.IN,pull_up_down=GPIO.PUD_DOWN)
#GPIO.add_event_detect(button, GPIO.RISING)
#GPIO.add_event_callback(button, coin_count)

#SETUP2
GPIO.setmode(GPIO.BOARD)
GPIO.setup(button, GPIO.IN, pull_up_down=GPIO.PUD_UP)

machine_id = "20220901"
password = "geekcoin"
url = "http://geekcoin.online/insert_data.php?input=1&machine_id="+machine_id+"&pass="+password
http = lib.PoolManager()
while True:
    #Input Method:
    #if GPIO.input(button) == 0:
        #print(response)
        #time.sleep(.1)
        #count+=1
        #print(count)
        #GPIO.input(button)
    
    GPIO.wait_for_edge(button, GPIO.RISING)
    count+=1
    #respnse = requests.get(url)
    response = http.request('GET',url)
    print(count)
