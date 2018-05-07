#!/usr/bin/python

import sys
import datetime
import requests
import json
from requests.auth import HTTPBasicAuth
from pymongo import MongoClient

conn = MongoClient('localhost', 27017)
db = conn.data_from_tweeter
firset = db.fir
secset = db.sec
firset.remove({})
secset.remove({})

# Request thru GNIP API
hashtag1 = sys.argv[1]
hashtag2 = sys.argv[2]
maxResults = '500'
#print hashtag1
#print hashtag2
now = datetime.date.today()
HH = '00'
MM = '00'
toMM = '09'
limit = 7
count = 0

for x in range(0, 7):
    temp_date = datetime.date.today() - datetime.timedelta(days=limit)
    limit = limit - 1
    if (temp_date.month < 10 and temp_date.day < 10):
        request_Date = str(temp_date.year) + '0' + \
            str(temp_date.month) + '0' + str(temp_date.day)
    elif (temp_date.month < 10):
        request_Date = str(temp_date.year) + '0' +  \
            str(temp_date.month) + str(temp_date.day)
    elif (temp_date.day < 10):
        request_Date = str(temp_date.year) + \
            str(temp_date.month) + '0' + str(temp_date.day)
    else :
        request_Date = str(temp_date.year) + \
            str(temp_date.month) + str(temp_date.day)

    for y in range(0, 24):
        for z in range(0, 6):
            Fir_url = ('https://gnip-api.twitter.com/search/fullarchive/accounts/greg-students/prod.json?query=' + hashtag1 +
                       '&maxResults=' + maxResults + '&fromDate=' + request_Date + HH + MM + '&toDate=' + request_Date + HH + toMM)
            Sec_url = ('https://gnip-api.twitter.com/search/fullarchive/accounts/greg-students/prod.json?query=' + hashtag2 +
                       '&maxResults=' + maxResults + '&fromDate=' + request_Date + HH + MM + '&toDate=' + request_Date + HH + toMM)
            # Getting info
            request_Result1 = requests.get(Fir_url, auth=HTTPBasicAuth('yadu3240@colorado.edu', '!gty19970721'))
            count = count + 1
            request_Result2 = requests.get(Sec_url, auth=HTTPBasicAuth('yadu3240@colorado.edu', '!gty19970721'))
            count = count + 1

            if(request_Result1.json().has_key('results')):
                for record in request_Result1.json()['results']:
                    firset.insert_one(record)
            if(request_Result2.json().has_key('results')):
                for record in request_Result2.json()['results']:
                    secset.insert_one(record)

            print(count)
            mm = int(MM) + 10
            tomm = int(toMM) + 10
            MM = str(mm)
            toMM = str(tomm)
        hh = int(HH) + 1
        if (hh < 10):
            HH = '0' + str(hh)
        else:
            HH = str(hh)
        MM = '00'
        toMM = '09'
    HH = '00'
    
