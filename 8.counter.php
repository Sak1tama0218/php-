<?php
     // 啟動會話
     session_start();
    
     // 如果 $_SESSION["counter"] 變數未設置，則將其設置為 1
     if (!isset($_SESSION["counter"]))
         $_SESSION["counter"] = 1;
     // 否則，將 $_SESSION["counter"] 變數的值增加 1
     else
         $_SESSION["counter"]++;
 
     // 輸出 $_SESSION["counter"] 變數的值到瀏覽器
     echo "counter=" . $_SESSION["counter"];
     
     // 輸出一個鏈接以重置計數器，鏈接指向 9.reset_counter.php 文件
     echo "<br><a href=9.reset_counter.php>重置counter</a>"; 
?>
