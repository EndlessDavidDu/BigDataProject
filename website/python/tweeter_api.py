#!/usr/bin/python

import sys
import datetime
import requests
import json
from requests.auth import HTTPBasicAuth

## Request thru GNIP API
hashtag1 = sys.argv[1] #raw_input("1st keyword for hashtag: \n")
hashtag2 = sys.argv[2] #raw_input("2nd keyword for hashtag: \n")
maxResults = '500'

now = datetime.date.today()
HH = '00'
MM = '00'
limit = 7
count = 0
f1 = open('First_key.json', 'a+')
f2 = open('Second_key.json', 'a+')

for x in range(0, 7):
    temp_date = datetime.date.today() - datetime.timedelta(days = limit)
    limit = limit - 1;
    if (temp_date.month < 10):
        request_Date = str(temp_date.year) + '0' + str(temp_date.month) + str(temp_date.day)
    else:
        request_Date = str(temp_date.year) + str(temp_date.month) + str(temp_date.day)
        
    for y in range(0, 24):
        hh = int(HH) + 1
        if (hh < 10):
            HH = '0' + str(hh)
        else:
            HH = str(hh)
            
        for z in range(0, 6):
            Fir_url = ('https://gnip-api.twitter.com/search/fullarchive/accounts/greg-students/prod.json?query='+hashtag1+'&maxResults='+maxResults+'&fromDate='+request_Date+HH+MM+'&toDate='+request_Date+'2359')
            Sec_url = ('https://gnip-api.twitter.com/search/fullarchive/accounts/greg-students/prod.json?query='+hashtag2+'&maxResults='+maxResults+'&fromDate='+request_Date+HH+MM+'&toDate='+request_Date+'2359')
            ## Getting info
            request_Result1 = requests.get(Fir_url, auth=HTTPBasicAuth('yadu3240@colorado.edu', '!gty19970721')).text
            request_Result2 = requests.get(Sec_url, auth=HTTPBasicAuth('yadu3240@colorado.edu', '!gty19970721')).text
            ## Saving as JSON
            json.dump(request_Result1, f1)
            json.dump(request_Result2, f2)
            count = count + 2
            print(count)
            mm = int(MM) + 10
            MM = str(mm)
        MM = '00'      
    HH = '00'

f1.close()
f2.close()
## Testing output
#print request_Result1.content
#print ('==================')
#print request_Result2.content


