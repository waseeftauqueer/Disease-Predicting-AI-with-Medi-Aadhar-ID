import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import tensorflow.keras as tf
from tensorflow.keras.layers import *
from tensorflow.keras.models import *
import seaborn as sns

import sklearn
from sklearn.ensemble import VotingClassifier
from sklearn.metrics import precision_score
from sklearn.metrics import recall_score
from sklearn.metrics import f1_score
from sklearn.metrics import cohen_kappa_score
from sklearn.metrics import confusion_matrix, accuracy_score
data = pd.read_csv("dataset.csv")

print(data.info())

data=data.dropna(how="any")

print(data)

data['DISEASES'] = data['DISEASES'].map({"Influenza":0,"asthma":1,"tuberculosis":2
                                         ,"malaria ":3,"typhoid":4,"pneumonia":5
                                         ,"appendicitius":6,"bird flu":7,"chikungunya":8
                                         ,"monkey pox":9,"diptheria":10,"polio":11
                                         ,"dengue":12,"jaundice":13,"covid-19":14
                                         ,"nipha virus":15,"rabies":16,"swine flu":17
                                         ,"cholera":18,"rhino virus":19})
print(data.info())

print(data)
print(data['DISEASES'].value_counts())


X = data.iloc[:,:-1].values
y = data.iloc[:, -1].values

from sklearn.model_selection import train_test_split

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.20, random_state = 121)#101

print("Xtrain value")
print(X_train)
print("ytrain value")
print(y_train)

from tensorflow.keras.utils import to_categorical
y_train = to_categorical(y_train)
ytest = to_categorical(y_test)

#### Create the model
model = tf.models.Sequential()
### Add the layers
model.add(tf.layers.Dense(64,input_dim=15,activation='relu'))     ## input and a hidden layer
model.add(tf.layers.Dense(128,activation='relu'))   ## hidden layer
model.add(tf.layers.Dense(256,activation='relu'))   ## hidden layer
model.add(tf.layers.Dense(20,activation='softmax')) ## output layer

### compile the model
model.compile(loss="categorical_crossentropy",optimizer='adam',metrics=['accuracy'])

model.fit(X_train,y_train,epochs=200)
model.save("train.h5")
ypred=model.predict(X_test)
ypred=np.argmax(ypred,axis=1)
print(ypred)
print(y_test)


dnn = accuracy_score(y_test, ypred)

#confusion matrix of DNN
from sklearn.metrics import confusion_matrix
cm = confusion_matrix(y_test,ypred)
print(cm)






print("accuracy score of DNN is ")
print(dnn)
print("")



