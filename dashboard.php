<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="dbstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>ini web Hotel</title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Agent Hotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#beranda">Branda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#room">Rooms</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#detail_kamar">Detail kamar</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pembayaran">Pembayaran</a>
              </li>
              </li>
            </ul>

          </div>
        </div>
      </nav>

      <section id="beranda">
        <div class="container-fluid px-lg-4 mt-4">
          <div class="swiper Swiper-container" >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="img/hote 1.png" class="w-100 d-block" >
              </div>
              <div class="swiper-slide">
                <img src="img/hotel 2.png" class="w-100 d-block">
              </div>
              <div class="swiper-slide">
                <img src="img/hotel 3.png" class="w-100 d-block">
              </div>
              <div class="swiper-slide">
                <img src="img/hotel 4.png" class="w-100 d-block">
              </div>
              <div class="swiper-slide">
                <img src="img/hotel 5.png" class="w-100 d-block">
              </div>
              <div class="swiper-slide">
                <img src="img/hotel 6.png" class="w-100 d-block">
              </div>
            </div>    
          </div>
        </div>
         
        <div class="section__container about__container">
        <div class="about__image p-4">
          <img src="img/about 2.jpg" alt="about" />
        </div>  
        <div class="about__content">
          <h2 class="section__title">About <span>Me</span></h2>
          <p class="section__subtitle fw-bold h-font">Mahasiswa Sistem Informasi</p>
          <p class="about__details">   
              Seorang agen hotel adalah individu atau perusahaan yang bertindak sebagai perantara antara 
              pelanggan dan hotel. Mereka membantu pelanggan dalam memesan kamar 
              hotel, memberikan informasi, menawarkan harga khusus, dan menyelesaikan masalah yang 
              mungkin timbul selama masa inap di hotel
          </p>
        </div>
      </div>
      </section>

      <section id="room">
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Room</h2>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
              <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="img/room 1.png" class="card-img-top">
                <div class="card-body">
                  <h5>VIP Room</h5>
                  <h6 class="mb-4">Rp200000 per malam</h6>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
              <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="img/room 2.png" class="card-img-top">
                <div class="card-body">
                  <h5>VVIP Room</h5>
                  <h6 class="mb-4">Rp400000 per malam</h6>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
              <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="img/room 3.png" class="card-img-top">
                <div class="card-body">
                  <h5>Ekonomi Room</h5>
                  <h6 class="mb-4">Rp100000 per malam</h6>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
              <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Room</a>
            </div>
          </div>
        </div>
      </section>

    <section id="detail_kamar">
      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Detail Kamar</h2>

    <div class="container">
      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
            <div class="profil d-flex align-items-center p-4">
                <img src="img/rating.svg" width="30px">
                <h6>VIP</h6>
            </div>
            <div class="fitur mb-4">
                      <h6 class="mb-1">Fiture</h6>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        1 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        2 Sofa  
                      </span>
            <div class="fasilitas mb-4 p-4">
                    <h6 class="mb-1">Fasilitas</h6>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Kulkas
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Sarapan pagi  
                    </span>
                
                  
            <p class="p-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, molestiae recusandae architecto reprehenderit sequi voluptatibus itaque, 
              necessitatibus est et facere consequatur autem pariatur 
              vel at cum obcaecati possimus repudiandae quas!
            </p>
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                
            </div>
            </div>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profil d-flex align-items-center p-4">
                <img src="img/rating.svg" width="30px">
                <h6>VVIP</h6>
            </div>
            <div class="fitur mb-4">
                      <h6 class="mb-1">Fiture</h6>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        1 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        2 Sofa  
                      </span>
            <div class="fasilitas mb-4 p-4">
                    <h6 class="mb-1">Fasilitas</h6>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Kulkas
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Sarapan pagi  
                    </span>
                
                  
            <p class="p-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, molestiae recusandae architecto reprehenderit sequi voluptatibus itaque, 
              necessitatibus est et facere consequatur autem pariatur 
              vel at cum obcaecati possimus repudiandae quas!
            </p>
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                
            </div>
            </div>
            </div>
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profil d-flex align-items-center p-4">
                <img src="img/rating.svg" width="30px">
                <h6>Ekonomi</h6>
            </div>
            <div class="fitur mb-4">
                      <h6 class="mb-1">Fiture</h6>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        1 Room
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        1 Bathroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-warp">
                        2 Sofa  
                      </span>
            <div class="fasilitas mb-4 p-4">
                    <h6 class="mb-1">Fasilitas</h6>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Kulkas
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-warp">
                      Sarapan pagi  
                    </span>
                
                  
            <p class="p-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, molestiae recusandae architecto reprehenderit sequi voluptatibus itaque, 
              necessitatibus est et facere consequatur autem pariatur 
              vel at cum obcaecati possimus repudiandae quas!
            </p>
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                
            </div>
            </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    </section>

    <section id="pembayaran">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font p-4">Pembayaran</h2>
    <div class="container availability-form">
          <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
              <h5>Check Boking</h5>
                <div class="row align-items-end">
                  <form  action="tambah kamar.php" method="POST">
                    <div class="col-lg-3 mb-3">
                      <label for="checkin" style="font-weight: 500;">Check-in</label>
                      <input type="date"name ="checkin" id="checkin" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                      <label for="checkout" style="font-weight: 500;">Check-out</label>
                      <input type="date"name="checkout" class="form-control shadow-none">
                    </div>
                  <div class="col-lg-3 mb-3">
                    <label for="room"  style="font-weight: 500;">Room</label>
                    <input type="text"name="room" class="form-control shadow-none">
                  </div>
                  <div class="col-lg-3 mb-3">
                    <label for="pembayaran" class="form-label">Pembayaran</label>
                    <input type="text" name="pembayaran" class="form-control shadow-none">
                  </div>
                  <div class="col-lg-1 mb-lg-3 mt-3">
                    <button type="submit" name="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                  </div>
                </form> 
                </div>  
            </div>
          </div>
        </div>
    </section>

    <br><br><br>
    <br><br><br>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      var swiper = new Swiper(".Swiper-container", {
        spaceBetween:30,
        effect:"fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnIntranction:false,
        }
      });
    
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
  </body>
</html>