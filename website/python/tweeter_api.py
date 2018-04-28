#!/usr/bin/python

import sys
import requests
import json
from requests.auth import HTTPBasicAuth

## Request thru GNIP API
hashtag1 = sys.argv[1] #raw_input("1st keyword for hashtag: \n")
hashtag2 = sys.argv[2] #raw_input("2nd keyword for hashtag: \n")
maxResults = raw_input("maxResults: \n")
fromDate = raw_input("From the date (YYYYMMDDHHMM/201804100000) :\n")
toDate = raw_input("To the date (YYYYMMDDHHMM/201804150000) :\n")

Fir_url = 'https://gnip-api.twitter.com/search/fullarchive/accounts/greg-students/prod.json?query='+hashtag1+'&maxResults='+maxResults+'&fromDate='+fromDate+'&toDate='+toDate
Sec_url = 'https://gnip-api.twitter.com/search/fullarchive/accounts/greg-students/prod.json?query='+hashtag2+'&maxResults='+maxResults+'&fromDate='+fromDate+'&toDate='+toDate

## Getting info
request_Result1 = requests.get(Fir_url, auth=HTTPBasicAuth('yadu3240@colorado.edu', '!gty19970721'))
request_Result2 = requests.get(Sec_url, auth=HTTPBasicAuth('yadu3240@colorado.edu', '!gty19970721'))

## Testing output
print request_Result1.content
print ('==================')
print request_Result2.content

## Saving as JSON
with open('First_key.json', 'w') as outfile:
    	 json.dump(request_Result1.content, outfile)

with open('Second_key.json', 'w') as outfile:
    	 json.dump(request_Result2.content, outfile)
