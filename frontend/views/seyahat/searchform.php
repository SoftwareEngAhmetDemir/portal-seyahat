<style>
    .A
    {
        display: block;
        width: 100%;
    }
    .B
    {
        width: 400px;
        height: 400px;
        background-color: whitesmoke;
        display: flex;
        position: relative;
        left: 200px;
        top: 80px;
        align-content: center;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="B">
<form action="" method="get">

    <input type="text" class="form-control A" placeholder="adsoyad" name="ad"/>
    <br>

    <input type="text" class="form-control A" placeholder="Şehir" name="sehir">
    <br>
    <input type="submit" class="btn btn-primary" value="gönder" name="sub">

</form>

</div>

<?php
if(isset($_GET['ad'])) {
    if (!empty($_GET['sub'])) {

        $myconn = mysqli_connect('localhost', 'root', '');
        $db = mysqli_select_db($myconn, 'seyahat');
        $ad = $_GET['ad'];
        $sehir = $_GET['sehir'];
        $query = mysqli_query($myconn, "select * from seyahat where adsoyad='$ad' and sehir='$sehir'");

        $rows = mysqli_fetch_array($query);
        $id = $rows['sid'];

        if (isset($rows)) {
            header("refresh:0;http://portal.kouosl/seyahat/view?id=$id");

        } else
            if (!empty($_GET['ad']) && !empty($_GET['sehir']))
                echo '<h5 style=" position: absolute; left: 400px;top: 500px;color: red">Sonuç bulunmadı</h5>';
            else
                if (empty($_GET['ad']) || $_GET['sehir']) {
                    echo '<h5 style="color:red;position: relative;left:200px">AdSoyad veya Şehir boş bırakamazsınız</h5>';
                }


    }
}

