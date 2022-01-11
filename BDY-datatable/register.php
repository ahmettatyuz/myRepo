<?php require("_header.php") ?>
<?php require("connection.php") ?>

<?php
error_reporting(0);
session_start();
if ($_POST['gonder']) {
    if ($_POST['captchainput'] == $_SESSION['guvenlik_kodu']) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $query = "INSERT INTO `kullanicilar_tablo`(`name`, `city`, `age`, `gender`) VALUES ('$_POST[name]','$_POST[city]','$_POST[age]','$_POST[gender]')";
            $insert = mysqli_query($connection, $query);
            echo '<div class="alert alert-success mt-2 text-center">Kayıt Başarılı</div>';
        }
    } else {
        echo '<div class="alert alert-danger mt-2 text-center">Kayıt Başarısız</div>';
    }
}
?>

<div class="container my-5">
    <form action="" method="post">
        <div class="form-group">
            <label for="name">İsim Soyisim: </label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="city">Memleket: </label>
            <input type="text" name="city" id="city" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="age">Yaş: </label>
            <input type="text" name="age" id="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Cinsiyet: </label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="0" disabled selected>Bir cinsiyet seçiniz</option>
                <option value="1">Erkek</option>
                <option value="2">Kadın</option>
            </select>
        </div>
        <div class="form-group mt-5"">
            <label class="rounded w-25 float-left" for="captchabox"><img class="rounded w-100" src="captcha.php" alt="" height="38"></label>
            <input class="form-control w-75 float-right" type="text" name="captchainput" id="captchabox" placeholder="Doğrulama Kodunu Giriniz:" required>
        </div>
        <br><br>
        <div class="row mt-5">
            <button class="btn btn-danger w-50" type="reset">Temizle</button>
            <input class="btn btn-success w-50" type="submit" value="Kayıt Et" name="gonder">
        </div>
    </form>
</div>


<?php require("_footer.php") ?>