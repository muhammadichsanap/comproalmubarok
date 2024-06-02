<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Links  -->
  <section class="footer">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4 pt-4" style="text-align: justify;">
          <!-- Content -->
          <img class="img-fluid rounded-3 my-1" src="/images/v267_2456.png" width="100px">
          @foreach ($tentang as $item)
            <p>{{ $item->tentang }}</p>
          @endforeach

          <!-- Ikon Media Sosial -->
          <div class="social-icons" style="margin-top: 20px;">
            <a href="https://www.facebook.com/sditalmubarokah/?locale=id_ID" class="me-4 text-reset" style="margin: 0 10px; color: #fff;">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.youtube.com/@sditalmubarokah2880" class="me-4 text-reset" style="margin: 0 10px; color: #fff;">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4" style="padding-left: 50px;">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 pt-4 text-center">
              INFO SEKOLAH
          </h6>
          <div class="row">
              @foreach ($kegiatans->take(2) as $index => $item)
                  <div class="col-22 mb-3"> 
                      <div class="card card-agenda d-flex flex-row align-items-center" style="background-color: transparent; border: none;">
                          <img src="{{ asset('images/' . $item->gambar) }}" class="img-fluid rounded-start" alt="{{ $item->nama_kegiatan }}" style="max-width: 20%; height: auto; margin-right: 10px;">
                          <div class="card-body" style="background-color: transparent; padding: 10px;">
                              <h5 class="card-title fs-5" style="font-size: 1rem; margin-bottom: 0.5rem;">{{ $item->nama_kegiatan }}</h5>
                              <p class="card-text" style="font-size: 0.875rem;"><small class="text-body-secondary">Terakhir diperbarui {{ $item->updated_at->diffForHumans() }}</small></p>
                              <p class="card-text" style="font-size: 0.875rem;">{{ $item->keterangan }}</p>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>          <!-- Grid column -->          <!-- Grid column -->
          </div>
        </div>
      </section>
      <!-- Section: Links  -->

  <!-- Section: Social media -->
  <!-- Copyright -->
  <div class="text-left p-4" style="background-color: #F27F0C">
    <div class="container w-65" style="color: #ffff">
      © 2024 Team 6. All rights reserved
    </div>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</head>