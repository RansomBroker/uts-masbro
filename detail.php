<?php 

$products = [
	1 => [
		'name' => 'Doraemon',
		'img' => 'https://upload.wikimedia.org/wikipedia/id/c/c8/Doraemon_volume_1_cover.jpg',
		'price' => 'Rp 25.000',
		'category' => 'Manga',
		'about' => 'Doraemon dikirim kembali ke masa kehidupan Nobita oleh cicit Nobita, Sewashi. Ia dikirim untuk memperbaiki kehidupan Nobita agar keturunannya merasakan kehidupan yang lebih baik. Dalam kehidupan aslinya tanpa dibantu Doraemon, Nobita sering gagal dalam pelajaran sekolahnya, gagal dalam pekerjaan, dan mempunyai masalah keuangan.', 
		'related_product' => [
			['Detective Conan', 'https://awsimages.detik.net.id/community/media/visual/2020/08/25/manga-detective-conan-fist-of-blue-sapphire-terbit-25-september-di-jepang.jpeg?w=700&q=90', 'Rp 25.000'],
			['Bleach', 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1628065024/v50ndxudpo8cecljhos1.png', 'Rp 25.000'],
			['Crayon Shinchan', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1440122290l/26137633._SY475_.jpg', 'Rp 30.000'],
		]
	],
	2 => [
		'name' => 'Tribun Pontianak',
		'img' => 'https://ebooks.gramedia.com/ebook-covers/625/image_highres/ID_TRPNT2020MTH03DT16.jpg',
		'price' => 'Rp 2.000',
		'category' => 'Newspaper',
		'about' => 'Tribun Pontianak adalah sebuah surat kabar harian yang terbit di Kalimantan Barat, Indonesia. Surat kabar ini termasuk dalam grup Kompas Gramedia. Kantor pusatnya terletak di kota Pontianak. Koran ini pertama kali terbit tahun 2008.',
		'related_product' => [
			['Pontianak Post', 'https://image.isu.pub/121229050823-b6d9532450794ff98eccb2fdaddeb4ad/jpg/page_1.jpg', 'Rp 2.000'],
			['KOMPAS', 'https://ebooks.gramedia.com/ebook-covers/1498/image_highres/ID_KOMPAS2020MTH05DT09.jpg', 'Rp 2.500'],
			['Harian Pontianak', 'https://harianberkat.com/wp-content/uploads/2022/04/IMG-20220426-WA0005.jpg', 'Rp 3.000'],
		] 
	],
	3 => [
		'name' => 'Majalah Bobo',
		'img' => 'https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/bobofoto/original/21211_majalah-bobo-edisi-50-terbit-22-maret-2018.jpg',
		'price' => 'Rp 47.000',
		'category' => 'Magazine',
		'about' => 'Majalah Bobo adalah bacaan populer anak-anak Indonesia yang terbit sejak 14 April 1973. Majalah ini adalah versi Indonesia dari majalah serupa di Belanda dengan penyesuaian isi. Di Indonesia, terdapat 2 versi Majalah Bobo. ',
		'related_product' => [
			['TRUBUS', 'https://www.tokotrubus.co.id/wp-content/uploads/2020/05/large_20190613015423_1.jpg', 'Rp 32.000'],
			['Femina', 'https://www.femina.co.id/images/images/FEMINA-36.jpg', 'Rp 40.500'],
			['Tempo', 'https://majalah.tempo.co/assets/majalah/images/25.jpg', 'Rp 55.000'],
		] 
	]
];

function get_related_products() {
	global $products;
	$num = $_GET['product'];
	return $products[$num];
}

$product = get_related_products();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail of <?= $product['name']; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&family=Space+Grotesk&family=Yeseva+One&display=swap" rel="stylesheet">
	<style type="text/css">
		.yeseva {
			font-family: 'Yeseva One', cursive;
		}
		.space {
			font-family: 'Space Grotesk', sans-serif;
		}
		.darker {
			font-family: 'Darker Grotesque', sans-serif;
			letter-spacing: 2px;
		}
	</style>
</head>
<body class='container'>

	<a class="text-decoration-none fw-bold darker fs-4 px-3 py-2 bg-primary text-light rounded-bottom" href="home.php">Back to Home</a>

	<!-- PRODUCT DETAILS -->

	<div class="row g-4 border my-3 pb-3 rounded shadow-lg">
		<div class="col text-center">
			<img class="rounded shadow-lg" src="<?= $product['img']; ?>" width="600">
		</div>
		<div class="col">
			<h1 class="fs-1 fw-bold yeseva"><?= $product['name']; ?></h1>
			<p class="space fs-3"><?= $product['category']; ?></p>
			<p class="bg-primary text-light px-3 py-2 d-inline fw-bold rounded-pill fs-4 darker"><?= $product['price']; ?></p>
			<p class="card-text mt-3 fs-5 fw-normal space"><?= $product['about']; ?></p>
		</div>
	</div>

	<hr>

	<!-- RELATED PRODUCTS -->
    <div class="container-fluid row justify-content-center gap-5 mb-5">
        <?php foreach ( $product['related_product'] as $related ): ?>
            <div class="col-lg-3 col-sm-6 card shadow rounded">
                    <img src="<?= $related[1] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title fs-3 fw-bold yeseva"><?= $related[0] ?></h5>
                        <p class="card-text fs-5 fw-bold darker"><?= $related[2] ?></p>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>