import numpy as np


import pandas as pd
import pickle

import click

from tensorflow.keras.models import *
import numpy as np
import os
from time import sleep
from PIL import Image

import mysql.connector

model = load_model("train.h5")
model.summary()
print("success")

while True:
    
    db = mysql.connector.connect(
       host="localhost",
       user="root",
       password="",
       database="medi"
    )
    cursor = db.cursor()
    cursor.execute("SELECT * FROM result")
    results = cursor.fetchall()
    for row in results:
       disease = row[0]
       v1 = row[1]
    print(disease)
    print(v1)
    
    if(v1==1):
        cursor2 = db.cursor()
        cursor2.execute("SELECT * FROM prediction")
        results = cursor2.fetchall()
        for row in results:
           s1 = str(row[0])
           s2 = str(row[1])
           s3 = str(row[2])
           s4 = str(row[3])
           s5 = str(row[4])
           s6 = str(row[5])
           s7 = str(row[6])
           s8 = str(row[7])
           s9 = str(row[8])
           s10 = str(row[9])
           s11 = str(row[10])
           s12 = str(row[11])
           s13 = str(row[12])
           s14 = str(row[13])
           s15 = str(row[14])
        #db.close()
        print(s1)
        print(s2)
        print(s3)
        print(s4)
        print(s5)
        print(s6)
        print(s7)
        main = s1+" "+s2+" "+s3+" "+s4+" "+s5+" "+s6+" "+s7+" "+s8+" "+s9+" "+s10+" "+s11+" "+s12+" "+s13+" "+s14+" "+s15
        print(main)
        userList = main.split()
        print("user list is ", userList)

        list_of_floats = [float(item) for item in userList]

        print(list_of_floats)

        ynew=model.predict(np.array(list_of_floats).reshape(1, -1))
        ynew = ynew.argmax(axis=1)
        print("ynew: ")
        print(ynew)
        data = ynew[0]
        #db.close()
        sleep(2)
        
        cursor3 = db.cursor()
        value = f"UPDATE `result` SET `disease`={data} , `s1`=1 WHERE 1"
        print(value)
        cursor3.execute(value)
        db.commit()
        db.close()
        
    db.close()
    sleep(2)
