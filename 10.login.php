<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   // 遍歷從資料庫中獲取的每一行資料
   while ($row = mysqli_fetch_array($result)) {
    // 檢查提交的表單中"id"和"pwd"字段值是否與資料庫中的相匹配
    if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       // 如果匹配成功，設置$login變量為TRUE
       $login = TRUE;
    }
 } 
 
 // 如果$login變量為TRUE，表示登入成功
 if ($login == TRUE) {
    // 啟動會話
    session_start();
    // 將"id"存儲到會話中
    $_SESSION["id"] = $_POST["id"];
    // 輸出登入成功消息到瀏覽器
    echo "登入成功";
    // 使用 meta 標籤在3秒後自動重新導向到 11.bulletin.php 頁面
    echo "<meta http-equiv=REFRESH content='3; url=11.bulletin.php'>";
 } else {
    // 如果$login變量為FALSE，表示登入失敗
    // 輸出帳號/密碼錯誤消息到瀏覽器
    echo "帳號/密碼 錯誤";
    // 使用 meta 標籤在3秒後自動重新導向到 2.login.html 頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; 
 }
?>
