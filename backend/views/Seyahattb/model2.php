<html>
<meta http-equiv="content-type" content="text/html" charset="UTF-8">
</html>
<?php
$id=$_GET['id'];
$myconn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($myconn,'seyahat');
$query=mysqli_query($myconn,"select * from seyahattb where id='$id'");

echo '<table border="2" width="600" style="font-size: 20px">';

while($rows=mysqli_fetch_array($query))
{

    //  echo $rows['yolculugun_adi'].' '.$rows['iletisim'].' '.$rows['gizecek_yerler'].' '.$rows['para'].' '.$rows['sure'];

    echo '<tr><th>yoluclugun adi</th>
<td>'.$rows['yolculugunadi'].'</td></tr>';
    echo '<tr>

<tr><th>iletisim</th>
<td>'.$rows['iletisim'].'</td></tr>';
    echo '<tr>

<tr><th>gizecek yerler</th>
<td>'.$rows['gizecekyerler'].'</td></tr>';
    echo '<tr>

<tr><th>odenecek para</th>
<td>'.$rows['para'].'</td></tr>';
    echo '<tr>

<tr><th>yolculugun suresi</th>
<td>'.$rows['sure'].'</td></tr>';

}

echo '</table>';

?>

<br><br><br><br>
<?php


$id=$_GET['id'];
$myconn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($myconn,'seyahat');
$query=mysqli_query($myconn,"select * from tbimg where id='$id'");

$i=0;
while($row=mysqli_fetch_array($query))
{$i++;

    echo "
 <a href='model3?id=$id&id2=$i'>".'<img src="data:image/jpeg;base64,
 
 '.base64_encode($row['img']).'" height="400" width="350" style=\'margin:10px\'>'."</a>";






}


