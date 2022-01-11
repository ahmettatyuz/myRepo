<?php require("_header.php") ?>

<?php
$website = file_get_contents("https://bigpara.hurriyet.com.tr/doviz/");
preg_match_all('@<span class="value">(.*?)</span>@si', $website, $doviz);
?>

<h1 class="text-center display-1 my-3">
    Hoşgeldiniz
</h1>

<div class="container w-100 my-5">
            <div>
                <table class="table table-hover table-bordered w-50 mx-auto">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Dolar</th>
                            <th>Euro</th>
                            <th>Sterlin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alış</td>
                            <td><?= $doviz[0][1] ?></td>
                            <td><?= $doviz[0][4] ?></td>
                            <td><?= $doviz[0][7] ?></td>
                        </tr>
                        <tr>
                            <td>Satış</td>
                            <td><?= $doviz[0][2] ?></td>
                            <td><?= $doviz[0][5] ?></td>
                            <td><?= $doviz[0][8] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div id="slider" class="carousel slide w-100 mx-auto" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="https://images.pexels.com/photos/2246476/pexels-photo-2246476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                            <div class="carousel-caption">
                                <h1>Başlık</h1>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt omnis veritatis expedita? Labore est neque dicta voluptates unde quae assumenda laboriosam ullam. Facilis aspernatur totam magnam at veritatis fugiat exercitationem.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="https://images.pexels.com/photos/3586966/pexels-photo-3586966.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                            <div class="carousel-caption">
                                <h1>Başlık</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae odit, velit quasi nam debitis perspiciatis molestias iusto, ad voluptas sint quaerat minus impedit a exercitationem numquam. Voluptatibus deserunt commodi repudiandae.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#slider" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a href="#slider" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
        </div>
    </div>



</div>


<?php require("_footer.php") ?>