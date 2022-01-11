<?php
$website = file_get_contents('https://m.haberturk.com/havadurumu/Turkiye-TR/Istanbul/LTSI');

preg_match_all('@<div class="degree">(.*?)</div>@si', $website, $weather); //hava durumu değerlerini aldım

preg_match_all('@<div class="day">(.*?)</div>@si', $website, $days); //günleri aldım

for ($i = 0; $i < count($weather[0]) - 1; $i++) { 
    $weather[0][$i] = substr($weather[0][$i], 20); //aldığım html kodlarını parçalayarak daha düzgün veriler elde ettim
}
for ($i = 0; $i < count($days[0]) - 1; $i++) {
    $days[0][$i] = substr($days[0][$i], 17);
}
?>

<link rel="stylesheet" href="style.css">
<footer class="bg-light">
    <h4>1 Haftalık Hava Durumu (İstanbul)</h4>
    <?php for ($i = 0; $i < 8; $i++) : ?>
        <span style="margin-right: 10px;">
            <?= $days[0][$i] . ':' . $weather[0][$i] ?>
        </span>
    <?php endfor; ?>

</footer>

</body>

</html>