<?php
  // 禁用錯誤報告
  error_reporting(0);
  // 建立到資料庫的連接
  $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
  // 執行 SQL 查詢，獲取佈告資料
  $result = mysqli_query($conn, "select * from bulletin");
  // 輸出佈告資料到表格
  echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
  // 遍歷每一行佈告資料
  while ($row = mysqli_fetch_array($result)){
      echo "<tr><td>";
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
?>
