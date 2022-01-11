<?php require("_header.php") ?>
<?php require("connection.php") ?>
<?php require("datatable_script.php")?>
<?php
    $query = "SELECT * FROM `kullanicilar_tablo`";
    $kullanicilar = mysqli_query($connection, $query);
?>

<div class="container my-5">
    <table id="tablo" class="table table-bordered table-hover my-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Memleket</th>
                <th>Yaş</th>
                <th>Cinsiyet</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_row($kullanicilar)) : ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[3] ?></td>
                    <td>
                        <?php
                        if ($row[4] == "1")
                            echo "Erkek";
                        else if($row[4]=="2")
                            echo "Kadın";
                        ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
    $(function() {

        $("#tablo").DataTable({
            "dom": '<rlB<t>ip>',
            buttons: [
                'pdf', 'excel', 'print'
            ]
        });
    });
</script>


<?php require("_footer.php") ?>