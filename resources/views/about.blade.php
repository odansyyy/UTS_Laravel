@extends('layout.navbar')

@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Tentang Kami</h2>
        <p>Kenali <span>Tentang Kami</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            <h4>Reservasi</h4>
            <p>+62 812 345 678</p>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
            Waroeng merupakan restoran spesialis menu makanan Asia. Kami menyajikan menu makanan autentik dari berbagai negara di Asia.
            Berdiri sejak lahir, kami menggunakan referensi resep dari internet. 
              
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> Kebersihan terjaga </li>
              <li><i class="bi bi-check2-all"></i> Kenyamanan terjamin</li>
              <li><i class="bi bi-check2-all"></i> Rasa </li>
            </ul>
            <p>
            Dengan menggunakan bahan-bahan segar terbaik dan resep-resep yang dikembangkan dengan penuh gairah, kami mengundang Anda untuk menjelajahi ragam hidangan yang kami tawarkan, dari makanan penutup yang memanjakan hingga hidangan utama yang memikat lidah Anda.
            </p>

            <div class="position-relative mt-4">
              <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
              <a href="https://youtu.be/zioKMGJySpg?si=2tGYVNGYEgg9B9NI" class="glightbox play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

      <!-- ======= Testimonials Section ======= -->
      {{-- <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Testimonials</h2>
            <p> ulasan mereka<span>tentang restauran</span></p>
          </div>
  
          <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Pelayanan yang baik dan tidak memerlukan banyak waktu menunggu. Waiter/waitress yang sangat helpful dan ramah. 
                          Rasa makanan enak dan sehat.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Megawati</h3>
                        <h4>Ketua Umum PDIP &amp; Presiden RI ke 5</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Restoran ini merupakan tempat favorit saya untuk makan. Setiap kali saya datang, saya merasa diberi perhatian yang luar biasa. Makanan mereka tak pernah mengecewakan, dan stafnya selalu ramah. Tempat yang sempurna untuk makan malam yang istimewa.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Joko Widodo</h3>
                        <h4>Presiden RI</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Saya sangat senang dengan pengalaman makan di restoran ini! Makanan luar biasa, pelayanan sangat baik, dan suasana yang nyaman. Saya pasti akan kembali lagi. Terima kasih, restoran ini, atas pengalaman yang luar biasa!
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Ganjar Pranowo</h3>
                        <h4>Gubernur Jawa Tengah</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Saya ingin memberikan lima bintang penuh kepada restoran ini! Makanan mereka adalah seni yang lezat dan pelayanan mereka adalah yang terbaik. Saya merasa dijemput dengan hangat setiap kali saya datang. Terima kasih atas pengalaman luar biasa.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Susilo Bambang Yudhoyono</h3>
                        <h4>Presiden RI ke 6</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section --> --}}

      <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
@endsection