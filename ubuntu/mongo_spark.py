from pyspark import SparkConf, SparkContext
from pyspark.sql import SQLContext
from pyspark.sql.types import *
import sys
reload(sys)
sys.setdefaultencoding( "utf-8" )
uri  = "mongodb://127.0.0.1:27017"
database = "data_from_tweeter"
collection = "fir"
collection2 = "sec"
collection3 = "output"
if __name__ == "__main__":


    sc = SparkContext()
    ctx = SQLContext(sc)
    df = ctx.read.format("com.mongodb.spark.sql").options(uri=uri, database= database, collection= collection).load()
    # SQL
    df.registerTempTable("temp")
    places = ctx.sql("SELECT place.name as place,count(1) as fir FROM temp WHERE place is not NULL and place.country_code ='US' and (place.name ='Maryland' or place.name = 'California' or place.name = 'Kentucky' or place.name = 'Oregon' or place.name = 'Oklahoma' or place.name = 'Connecticut' or place.name = 'Iowa' or place.name = 'Mississippi' or place.name = 'Arkansas' or place.name = 'Kansas' or place.name = 'Utah' or place.name = 'Nevada' or place.name = 'New Mexico' or place.name =  'West Virginia' or place.name =  'Nebraska' or place.name =  'Idaho' or place.name =  'Hawaii' or place.name =  'Maine' or place.name =  'New Hampshire' or place.name =  'Rhode Island' or place.name =  'Montana' or place.name = 'California' or place.name = 'Texas' or place.name='New York' or place.name='Florida' or place.name='Illinois' or place.name='Pennsylvania' or place.name = 'Ohio' or place.name='Michigan' or place.name = 'Georgia' or place.name =  'North Carolina' or place.name =  'New Jersey' or place.name =  'Virginia' or place.name =  'Washington' or place.name =  'Massachusetts' or place.name =  'Indiana' or place.name =  'Arizona' or place.name =  'Tennessee' or place.name =  'Missouri' or place.name =  'Wisconsin' or place.name =  'Minnesota' or place.name =  'Colorado' or place.name =  'Alabama' or place.name =  'South Carolina' or place.name =  'Louisiana'  or place.name =  'Wyoming' or place.name =  'Washington, D.C.' or place.name =  'Vermont' or place.name =  'North Dakota' or place.name =  'Alaska' or place.name =  'South Dakota' or place.name =  'Delaware')  group by place.name")


    df2 = ctx.read.format("com.mongodb.spark.sql").options(uri=uri, database= database, collection= collection2).load()
    df2.registerTempTable("temp2")
    places2 = ctx.sql("SELECT place.name as place,count(1) as sec FROM temp2 WHERE place is not NULL and place.country_code ='US' and (place.name ='Maryland' or place.name = 'California' or place.name = 'Kentucky' or place.name = 'Oregon' or place.name = 'Oklahoma' or place.name = 'Connecticut' or place.name = 'Iowa' or place.name = 'Mississippi' or place.name = 'Arkansas' or place.name = 'Kansas' or place.name = 'Utah' or place.name = 'Nevada' or place.name =  'New Mexico' or place.name =  'West Virginia' or place.name =  'Nebraska' or place.name =  'Idaho' or place.name =  'Hawaii' or place.name =  'Maine' or place.name =  'New Hampshire' or place.name =  'Rhode Island' or place.name =  'Montana' or place.name = 'California' or place.name = 'Texas' or place.name='New York' or place.name='Florida' or place.name='Illinois' or place.name='Pennsylvania' or place.name='Ohio' or place.name='Michigan' or place.name = 'Georgia' or place.name =  'North Carolina' or place.name =  'New Jersey' or place.name =  'Virginia' or place.name =  'Washington' or place.name =  'Massachusetts' or place.name =  'Indiana' or place.name =  'Arizona' or place.name =  'Tennessee' or place.name =  'Missouri' or place.name =  'Wisconsin' or place.name =  'Minnesota' or place.name =  'Colorado' or place.name =  'Alabama' or place.name =  'South Carolina' or place.name =  'Louisiana'  or place.name =  'Wyoming' or place.name =  'Washington, D.C.' or place.name =  'Vermont' or place.name =  'North Dakota' or place.name =  'Alaska' or place.name =  'South Dakota' or place.name =  'Delaware')  group by place.name")

    places3 = places.join(places2, 'place', "outer")

    places3.write.format("com.mongodb.spark.sql.DefaultSource").options(uri=uri, database= database, collection= collection3).mode("overwrite").save()
