
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title><?= "List Produk" ?></title>

     <!--css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&family=Space+Grotesk&family=Yeseva+One&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="style.css">

     <!-- js -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </head>
 <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow d-flex px-2">
        <div class="container-fluid">
            <a class="navbar-brand text-blue fs-4 fw-bold" href="home.php">BooksStorm</a>
            <span class="text-muted"><small>Kategori</small></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarSupportedContent">
                <form class="flex-grow-1 mx-2s">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari Majalah / Buku / koran" aria-label="search" aria-describedby="search-btn" name="searc">
                        <button class="btn btn-secondary" type="button" id="search-btn"><i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
                <div class="mx-2">
                    <span><i class="fa fa-shopping-cart text-muted px-2" aria-hidden="true"></i></span>
                    <span class="text-muted">|</span>
                </div>
                <div class="mx-3">
                    <a href="#" class="btn btn-outline-blue text-white me-2">Daftar</a>
                    <a href="#" class="btn btn-blue text-white ms-2 ">Daftar</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- text -->
    <div class="container-fluid justify-content-center">
        <h1 class="fs-3 fw-bold text-center mt-4 text-uppercase">Super Deal</h1>
        <p class="fs-4 fw-bold text-center mt-2 text-uppercase">Promo hari Ini</p>
    </div>

    <!-- cotent -->
    <div class="container-fluid row justify-content-center gap-5 mt-5">
        <div class="col-lg-3 col-sm-6 card shadow rounded">
            <a href="detail.php?product=1" class="text-blue no-style">
                <img src="https://upload.wikimedia.org/wikipedia/id/c/c8/Doraemon_volume_1_cover.jpg" class="card-img-top" height="256">
                <div class="card-body">
                    <h3 class="card-title">Doraemon</h3>
                    <p class="darker fs-5 fw-bold">Rp 25.000</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 card shadow rounded">
            <a href="detail.php?product=2" class="text-blue no-style">
                <img src="https://ebooks.gramedia.com/ebook-covers/625/image_highres/ID_TRPNT2020MTH03DT16.jpg" class="card-img-top" height="256">
                <div class="card-body">
                    <h3 class="card-title">Tribun Pontianak</h3>
                    <p class="darker fs-5 fw-bold">Rp 2000</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 card shadow rounded no-style">
            <a href="detail.php?product=3" class="text-blue no-style">
                <img src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/bobofoto/original/21211_majalah-bobo-edisi-50-terbit-22-maret-2018.jpg" class="card-img-top" height="256">
                <div class="card-body">
                    <h3 class="card-title">Majalah Bobo</h3>
                    <p class="darker fs-5 fw-bold">Rp 47.000</p>
                </div>
            </a>
        </div>
    </div>

 </body>
 </html>