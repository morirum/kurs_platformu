<?php

const title="Popüler Kurslar";

$kategoriler = array("Programlama","Web Gelliştirme","Veri Analizi");

sort($kategoriler);

$kurslar= array(
    "1"=> array(
        "baslik" => "Php Kursu",
        "altBaslik" =>"Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" =>"php.png",
        "yayinTarihi"=>"01.01.2023",
        "yorumSayisi" => "100",
        "begeniSayisi" => "300"
    ),
    "2" => array(
    "baslik" => "Pthton Kursu",
    "altBaslik" =>"Sıfırdan ileri seviye Pyhton geliştirme",
    "resim" =>"pyhton.jpg",
    "yayinTarihi"=>"03.03.2023",
    "yorumSayisi" => "200",
    "begeniSayisi" => "400"
    ),
    "3" => array(
    "baslik" => "Node.js Kursu",
    "altBaslik" =>"Sıfırdan ileri seviye Node.js ile web geliştirme",
    "resim" =>"nodejs.jpg",
    "yayinTarihi"=>"05.05.2023",
    "yorumSayisi" => "300",
    "begeniSayisi" => "500"
    ),
);

$yeni_kurs = array(
    "baslik" => "Django Kursu",
    "altBaslik" =>"Sıfırdan ileri seviye Django programlama",
    "resim" =>"nodejs.jpg",
    "yayinTarihi"=>"05.05.2023",
    "yorumSayisi" => "300",
    "begeniSayisi" => "500"
);

$kurslar["4"]= $yeni_kurs;


$kurs1_baslik="Php Kursu";
$kurs1_altBaslik="Sıfırdan ileri seviye Php ile web geliştirme";
$kurs1_resim ="php.png";
$kurs1_yayinTarihi = "01.01.2023";
$kurs1_yorumSayisi = "100";
$kurs1_begeniSayisi = "300";

$kurs2_baslik="Pyhton Kursu";
$kurs2_altBaslik="Sıfırdan ileri seviye Pyhton geliştirme";
$kurs2_resim ="pyhton.jpg";
$kurs2_yayinTarihi = "03.03.2023";
$kurs2_yorumSayisi = "200";
$kurs2_begeniSayisi = "400";

$kurs3_baslik="Node.js Kursu";
$kurs3_altBaslik="Sıfırdan ileri seviye node.js kursu";
$kurs3_resim ="nodejs.jpg";
$kurs3_yayinTarihi = "05.05.2023";
$kurs3_yorumSayisi = "300";
$kurs3_begeniSayisi = "500";

$kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));
$kurs2_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));
$kurs3_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));

$kurs1_altBaslik = substr($kurs1_altBaslik,0,50)."...";
$kurs2_altBaslik = substr($kurs2_altBaslik,0,50)."...";
$kurs3_altBaslik = substr($kurs3_altBaslik,0,50)."...";


$kurs1_url = str_replace([" ","I"],["-","i"],strtolower($kurslar["1"]["baslik"]));
$kurs2_url = str_replace([" ","ç"],["-","c"],strtolower($kurslar["2"]["baslik"]));
$kurs2_url = str_replace([" ","ö"],["-","o"],strtolower($kurslar["3"]["baslik"]));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.rtl.min.css"/>
    <title>Document</title>
</head>
<body>
   <div class="container my-3">
    <div class="row">
        <div class="col-3">
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[0];?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1];?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2];?></a>



        </div>
        <div class="col-9">
            <h1 class="mb-3"><?php echo title; ?></h1>
            <p class="lead">
                <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs listelenmiştir.
            </p>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurslar["1"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>"> 
                            <?php echo $kurslar["1"]["baslik"]; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo ucfirst(strtolower($kurslar["1"]["altBaslik"])); ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurslar["1"]["begeniSayisi"]; ?>
                            </span>
                        </p>

                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum Sayısı: <?php echo $kurslar["1"]["yorumSayisi"]; ?>
                            </span>
                        </p>                    
                    </div>
                </div>
            </div>

        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurslar["2"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>"> 
                            <?php echo $kurslar["2"]["baslik"]; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo ucfirst(strtolower($kurslar["2"]["altBaslik"])); ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurslar["2"]["begeniSayisi"]; ?>
                            </span>
                        </p>

                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum Sayısı: <?php echo $kurslar["2"]["yorumSayisi"]; ?>
                            </span>
                        </p>                    
                    </div>
                </div>
            </div>

        </div>        
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurslar["3"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>"> 
                            <?php echo $kurslar["3"]["baslik"]; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo ucfirst(strtolower($kurslar["3"]["altBaslik"])); ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurslar["3"]["begeniSayisi"]; ?>
                            </span>
                        </p>

                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum Sayısı: <?php echo $kurslar["3"]["yorumSayisi"]; ?>
                            </span>
                        </p>                    
                    </div>
                </div>
            </div>

        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurslar["4"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>"> 
                            <?php echo $kurslar["4"]["baslik"]; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo ucfirst(strtolower($kurslar["4"]["altBaslik"])); ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurslar["4"]["begeniSayisi"]; ?>
                            </span>
                        </p>

                            <p>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum Sayısı: <?php echo $kurslar["4"]["yorumSayisi"]; ?>
                            </span>
                        </p>                    
                    </div>
                </div>
            </div>

        </div>

            
    </div>
        
   </div>
</body>
</html>