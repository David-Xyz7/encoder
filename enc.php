<html>
<head>
<title>Base64 Encoder</title>
<style type="text/css">
<!--
body,td,th {
        font-family: Geneva, Arial, Helvetica, sans-serif;
        color: #00FF00;
        font-weight: bold;
}
body {
        background-color: #0048FF;
}
a:link {
        color: #FF0000;
        text-decoration: none;
}
a:visited {
        text-decoration: none;
        color: #00FF00;
}
a:hover {
        text-decoration: none;
        color: #99FFFF;
}
a:active {
        text-decoration: none;
        color: #9900FF;
}
.style3 {
        color: #00FF00
        }
a {
        font-weight: bold;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head>
<body>
<style type='text/css'>
body {
    background-color: #000000;
    color: green;
    font-family:courier new;
    font-size:12px;
}
text,input,table,tr,td,th {
    border-color: green;
    border-style: solid;
    border-width: 1px;
    color: green;
    background:#0f0f0f;
    font-family:courier new;
    font-size:12px;
}
</style>
  <center><br>
Base64 Encoder Coded by  David Host@Xcode7Team <br>
<br>
<h1>
<?php
$encrypt =$_POST['data'];
$data=base64_encode($encrypt);
echo "Result : ".$data;
?>
</h1>
</form>
</center>
</form>
</body>
</html>
