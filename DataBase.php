<?php
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "yourdbname";

// 创建连接
$conn = mysqli_connect($host, $username, $password, $dbname);

// 检查连接是否成功
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//输入查询操作
$sql = "";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rank</title>
    <style>
        table {
            width: 50%; /* 表格宽度 */
            margin: 20px auto; /* 居中 */
            border-collapse: collapse; /* 合并边框 */
        }
        th, td {
            border: 1px solid #ddd; /* 边框样式 */
            padding: 8px; /* 单元格内边距 */
            text-align: center; /* 居中对齐 */
        }
        th {
            background-color: #f2f2f2; /* 表头背景颜色 */
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Rank</h2>

<table>
    <!-- 举例显示ID和UserName -->
    <tr>
        <th>ID</th>
        <th>username</th>
    </tr>
    <?php
    // 输出数据
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td></tr>";
    }
    ?>
</table>

<?php
// 关闭连接
mysqli_close($conn);
?>

</body>
</html>
