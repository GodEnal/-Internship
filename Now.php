<style type="text/css">
html {
background-image: url('b.jpg');
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-o-background-size: 100% 100%, auto;
-moz-background-size: 100% 100%, auto;
-webkit-background-size: 100% 100%, auto;
background-size: 100% 100%, auto;
}
</style>
<?php
    $Data = file_get_contents("http://data.tmd.go.th/api/WeatherForecastDaily/V1/");
    $arrData = json_decode($Data,true);
   /* echo "<pre>";
    print_r($arrData);
    echo "</pre>";*/
    print("พยากรณ์ประจำวันที่ : ");
    print_r($arrData["DailyForecast"]["Date"]);
    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["0"]["RegionName"]);   #ภาคเหนืออ
    print_r($arrData["DailyForecast"]["RegionsForecast"]["0"]["Description"]);
    echo "</pre>";

    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["1"]["RegionName"]);   #ภาคตะวันออกเฉียงเหนือ
    print_r($arrData["DailyForecast"]["RegionsForecast"]["1"]["Description"]);
    echo "</pre>";

    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["2"]["RegionName"]);   #ภาคกลาง
    print_r($arrData["DailyForecast"]["RegionsForecast"]["2"]["Description"]);
    echo "</pre>";

    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["3"]["RegionName"]);   #ภาคตะวันออก
    print_r($arrData["DailyForecast"]["RegionsForecast"]["3"]["Description"]);
    echo "</pre>";

    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["4"]["RegionName"]);   #ภาคใต้ (ฝั่งตะวันออก)
    print_r($arrData["DailyForecast"]["RegionsForecast"]["4"]["Description"]);
    echo "</pre>";

    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["5"]["RegionName"]);   #ภาคใต้ (ฝั่งตะวันตก)
    print_r($arrData["DailyForecast"]["RegionsForecast"]["5"]["Description"]);  
    echo "</pre>";

    echo "<pre>";
    print_r($arrData["DailyForecast"]["RegionsForecast"]["6"]["RegionName"]);   #กรุงเทพมหานครและปริมณฑ
    print_r($arrData["DailyForecast"]["RegionsForecast"]["6"]["Description"]);
    echo "</pre>";
    
    
    
?>
