<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名資訊</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>報名資訊</h2>
    
    <table>
        <tr>
            <th>欄位</th>
            <th>內容</th>
        </tr>
        <tr>
            <td>姓名</td>
            <td><?php echo $_GET["name"]; ?></td>
        </tr>
        <tr>
            <td>學號</td>
            <td><?php echo $_GET["student_id"]; ?></td>
        </tr>
        <tr>
            <td>電子郵件</td>
            <td><?php echo $_GET["email"]; ?></td>
        </tr>
        <tr>
            <td>手機號碼</td>
            <td><?php echo $_GET["phone"]; ?></td>
        </tr>
        <tr>
            <td>備註</td>
            <td><?php echo nl2br($_GET["message"]); ?></td>
        </tr>
    </table>

</body>
</html>
