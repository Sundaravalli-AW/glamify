<?php  
      
    define (DB_USER, "root");  
    define (DB_PASSWORD, "");  
    define (DB_DATABASE, "refresha");  
    define (DB_HOST, "localhost");  
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);  
  
    $sql = "SELECT postoffice,pincode FROM tbl_chennai_area   
            WHERE postoffice LIKE '%".$_GET['query']."%'  
            LIMIT 10";  
             
    $result = $mysqli->query($sql);  
      
    $json=[];

    while($row = $result->fetch_assoc()){  
         $json[] = $row['title'];  
    }  
  
    echo json_encode($json);  

    ?>