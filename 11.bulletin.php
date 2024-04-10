<?php
    // 禁用錯誤報告
    error_reporting(0);
    
    // 啟動會話
    session_start();
    
    // 如果未設置 $_SESSION["id"]，則提示用戶先登入
    if (!$_SESSION["id"]) {
        echo "請先登入";
        // 使用 meta 標籤在3秒後自動重新導向到 2.login.html 頁面
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    } else {
        // 如果 $_SESSION["id"] 設置了，表示用戶已經登入
        
        // 歡迎消息，顯示用戶名，並提供登出、管理使用者和新增佈告的鏈接
        echo "歡迎, " . $_SESSION["id"] . " [<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        
        // 建立到資料庫的連接
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // 執行 SQL 查詢，獲取佈告資料
        $result = mysqli_query($conn, "select * from bulletin");
        
        // 輸出佈告資料到表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        // 遍歷每一行佈告資料
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            // 輸出佈告編號
            echo $row["bid"];
            echo "</td><td>";
            // 輸出佈告類別
            echo $row["type"];
            echo "</td><td>"; 
            // 輸出標題
            echo $row["title"];
            echo "</td><td>";
            // 輸出佈告內容
            echo $row["content"]; 
            echo "</td><td>";
            // 輸出發佈時間
            echo $row["time"];
            echo "</td></tr>";
        }
        // 結束表格
        echo "</table>";
    }

?>
