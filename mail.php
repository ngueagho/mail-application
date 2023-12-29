<?php

$to2 = "eugene.neussi@facsciences-uy1.cm, eugene.neussi@facsciences-uy1.cm";
$subject = "Depot";

$message = "
<html>
<head>
<title>HTML email</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #333333;
    }

    p {
        color: #666666;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        border: 1px solid #cccccc;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
</style>

</head>
<body>
<p>UBA BANK</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>neussi njietcheu</td>
<td>patrice eugene</td>
<td>DEPOT</td>
<td>50.000</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <eugene.neussi@facsciences-uy1.cm>' . "\r\n";
$headers .= 'Cc: eugene.neussi@facsciences-uy1.cm' . "\r\n";ss


mail($to2,$subject,$message,$headers);
?> 
