<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   // 從資料庫結果集中遍歷每一行，並進行登入驗證
   while ($row = mysqli_fetch_array($result)) {
    // 檢查提交的表單中"id"和"pwd"字段值是否與資料庫中的相匹配
    if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       // 如果匹配成功，設置$login變量為TRUE
       $login = TRUE;
    }
 } 
 // 如果$login變量為TRUE，顯示登入成功消息；否則顯示帳號/密碼錯誤消息
 if ($login == TRUE)
    echo "登入成功";
 else
    echo "帳號/密碼錯誤"; 
?>
