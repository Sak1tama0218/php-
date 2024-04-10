<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    // 從資料庫結果集中提取下一行作為關聯數組
    $row = mysqli_fetch_array($result);
    // 輸出$row陣列中的"id"和"pwd"元素到網頁，並換行
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 
    // 再次從資料庫結果集中提取下一行作為關聯數組
    $row = mysqli_fetch_array($result);
    // 再次輸出$row陣列中的"id"和"pwd"元素到網頁
    echo $row["id"] . " " . $row["pwd"]; 
?>
