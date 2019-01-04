<style>

    #A:target
    {
        visibility: hidden;
    }
    #A:target .B
    {
        visibility: hidden;
    }
    .B
    {
        visibility: visible;
    }

</style>

<style>
    #A
    {
        text-decoration: none;
        border-radius: 10%;
        display: flex;
        overflow: auto;
    }
    #A:target  div
    {
        visibility: hidden;

    }
    #B
    {
        visibility: hidden;
    }
    #A:hover
    {
       opacity: 0.8;
    }
</style>
<?php
$id1=$_GET['id'];
$id2=$_GET['id2'];
$myconn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($myconn,'seyahat');
$query=mysqli_query($myconn,"select * from yerlerin_bilgileri where id='$id1' and id2='$id2'");
while ($rows=mysqli_fetch_array($query))
{
    echo '<a href="#A" id="A" style="font-weight: bolder;height: 400px;width: 400px;margin-top: 100px">';
    echo '<div id="A" style="background-color: red;color:
 whitesmoke;display: flex;height: 400px;width: 400px;font-weight:
  bolder;position: absolute;padding-left: 20px;padding-top: 30px;
  justify-content: center ;align-content: center">'.$rows['bilgi'].'</div>'.'</a>';
}
mysqli_close($myconn);
$id1=$_GET['id'];
$id2=$_GET['id2'];
$myconn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($myconn,'seyahat');

$query=mysqli_query($myconn,"select * from tbimg where id='$id1' and id3='$id2'");
$rows=mysqli_fetch_array($query);

echo '<body  background="data:image/jpeg;base64,
'.base64_encode($rows['img']).'"  style="background-repeat: no-repeat; background-size: cover;"></body>';

echo '<div style="margin:550px"></div>';


?>

