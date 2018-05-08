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
    places = ctx.sql("SELECT place.name as place,count(1) as fir FROM temp WHERE place is not NULL and place.country_code ='US'  group by place.name")


    df2 = ctx.read.format("com.mongodb.spark.sql").options(uri=uri, database= database, collection= collection2).load()
    df2.registerTempTable("temp2")
    places2 = ctx.sql("SELECT place.name as place,count(1) as sec FROM temp2 WHERE place is not NULL and place.country_code ='US'  group by place.name")

    places3 = places.join(places2, 'place', "outer")

    places3.write.format("com.mongodb.spark.sql.DefaultSource").options(uri=uri, database= database, collection= collection3).mode("overwrite").save()
