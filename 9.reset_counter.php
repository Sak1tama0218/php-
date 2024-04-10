<?php
 // 啟動會話
 session_start();
    
 // 清除 $_SESSION["counter"] 變數
 unset($_SESSION["counter"]);
 
 // 輸出重置成功消息到瀏覽器
 echo "counter重置成功....";
 
 // 使用 meta 標籤在 2 秒後重定向到 8.counter.php 文件
 echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
