
<?php

    //กำหนดค่า Access-Control-Allow-Origin ให้ เครื่อง อื่น ๆ สามารถเรียกใช้งานหน้านี้ได้
    header("Access-Control-Allow-Origin: *");
    
    header("Content-Type: application/json; charset=UTF-8");
    
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    
    header("Access-Control-Max-Age: 3600");
    
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    //ตั้งค่าการเชื่อมต่อฐานข้อมูล
    $link = mysqli_connect('localhost', 'u07610608', 'PwdDBIs07610608', 'std_db07610608');
    
    mysqli_set_charset($link, 'utf8');
    
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    
    $check ;
    //ตรวจสอบหากใช้ Method GET
    if($requestMethod == 'GET'){
        $strcut = $_GET['id'];
        //echo $strcut;
        $Month = substr($strcut,6,1);
        $Day = substr($strcut, 8, 10);
        if($Month == 3){
            $Day += 28;
        }
   
        $sql = "SELECT * FROM krom WHERE id = $Day";
        $result = mysqli_query($link, $sql);
        
        //สร้างตัวแปร array สำหรับเก็บข้อมูลที่ได้
        $arr = array();
        
        while ($row = mysqli_fetch_assoc($result)) {
             
             $arr[] = $row;
        }
             
    }
    
    print("พยากรณ์ประจำวันที่ : ");
    print_r($arr[0]["Date"]);

    
    print("\n\nภูมิประเทศไทย : ");
    
    print_r($arr[0]["Thai"]);  
    

    print("\n\nภาคเหนือ : ");
    print_r($arr[0]["Northern"]);
    
    print("\n\nภาคตะวันออกเฉียงเหนือ : ");
    print_r($arr[0]["Northeastern"]);

    print("\n\nภาคกลาง : ");
    print_r($arr[0]["Central"]);

    print("\n\nภาคตะวันออก : ");
    print_r($arr[0]["Eastern"]);

    print("\n\nภาคใต้ (ฝั่งตะวันออก) : ");
    print_r($arr[0]["Etsout"]);

    print("\n\nภาคใต้ (ฝั่งตะวันตก) : ");
    print_r($arr[0]["Southern"]);

    print("\n\nกรุงเทพมหานครและปริมณฑล : ");
    print_r($arr[0]["Bangkok"]);
    //print_r($arr[$check-1]);
    //echo $check ;
  ?>