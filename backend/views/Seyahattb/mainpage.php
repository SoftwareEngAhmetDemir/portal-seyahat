<style>

    *{
        perspective: 700px;
    }
    .A
    {
        width: 200px;
        height: 70px;
        color: whitesmoke;
        background-color: red;
        border-radius: 30%;
        display: inline-flex;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        font-weight: bolder;
        font-size: 40px;
        opacity: 0.8;
        margin:5px;

    }
    .A:hover
    {
        opacity: 1;
        background-color: green;
        transform: translateZ(-20px);

    }
    .b
    {
        display: inline-block;
        height: 200px;
        width: 200px;
        cursor: pointer;

    }


    .B:before
    {
        display: inline;
        position: relative;
        top: 0px;
        left: 200px;
        width: 100px;
        height: 100px;
        content: 'hello';
        animation-name: write;
        animation-duration: 2s;
        transition: ease-in-out;
        animation-iteration-count: infinite;
        font-weight: bolder;
        font-size: 90px;

    }
    @keyframes write {


        0%
        {
            content: 'seyahat';
            color: red;
            font-size: 30px;
            transform: translateZ(10px);
        }
        25%
        {
            content: 'seyahat';
            color: blue;
            font-size: 60px;
            transform: translateZ(25px);
        }
        50%
        {
            content: 'seyahat';
            color: green;
            font-size: 80px;
            transform: translateZ(40px);
        }
        75%
        {
            content: 'seyahat';
            color: #6f5499;
            font-size: 100px;
            transform: translateZ(65px);
        }
        100%
        {
            content: 'seyahat';
            color: yellow;
            font-size: 120px;
            transform: translateZ(85px);
        }

    }




</style>

<?php

$myconn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($myconn,'seyahat');

$query=mysqli_query($myconn,"select * from background where id='2'");
$rows=mysqli_fetch_array($query);

echo '<body  background="data:image/jpeg;base64,'.base64_encode($rows['pic']).'
"  style="background-repeat: no-repeat; background-size: cover;"></body>';




?>





<div class="B" style="display: flex;margin-left: 400px"></div>
<br>
<input  class="b btn btn-success" type="submit"  value='başvuru yap' style="position: absolute;right: 50px;bottom: 70px;

height: 100px;width: 250px;border-radius: 20%;font-weight:

bolder;font-size: 35px;transform: translateZ(50px);" onclick="f()"/>

<script>
    alert('Hoş geldiniz=>en sağdaki basvuru duğmeye tiklayiniz model açılacaktır');

    function f() {

        'use strict';
        window.open('http://portal.kouosl/seyahat/create/',
           '_blank', 'width=600,height=600,resizable=yes,top=100,left=200,opacity=0.7', '');

    }

</script>
<div style="border-radius: 20%">

</div>
</body>
<br>



<?php




$myconn=mysqli_connect('localhost','root','');

$db=mysqli_select_db($myconn,'seyahat');

$query=mysqli_query($myconn,'select * from seyahattb');
$i=0;


while($rows=mysqli_fetch_array($query))
{

    if($i===2)
    {
        $i=0;
        echo '<br>';
    }

    echo "
    <a href='model2?id=$rows[id] 'class='A' style='margin: 60px' >".$rows['yolculugunadi'].'</a>';

    $i++;

}



?>

<iframe src="yanni.mp3" style="display:inline; visibility: hidden"  width="0" height="0" >

</iframe>