<!--CSS -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

  :root {
    --facebook-color: #4267B2;
    --twitter-color: #1DA1F2;
    --linkedin-color: #0e76a8;
  }

  .footer {
    font-family: 'Source Sans Pro', sans-serif;
    font-size:125%;
  }

  .bg-footer{
    background: var(--footer);
  }

  .facebook {
    color: var(--facebook-color);
  }

  .twitter {
    color: var(--twitter-color);
  }

  .google {
    background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
  }

  .linkedin {
    color: var(--linkedin-color);
  }
</style>

<!-- Footer -->
<footer class="footer bg-footer  text-white pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum. Consequatur iste ullam eius
          praesentium cumque incidunt animi, dolor quae!</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
          <!--Here you can write something-->
        </h5>

        <ul class="list-unstyled">

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
          <!--Here you can write something-->
        </h5>

        <ul class="list-unstyled">

        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>

        <ul class="list-unstyled">
          <li>
            <span>Location: <h6>Lithuania,Kaunas</h6></span>
          </li>
          <li>
            <span>Phone number: <br><h6>(+370) 12345678</h6></span>
          </li>
          <li>
            <span>Email:</span> <h6><a href="mailto:lacozzainfuriata@gmail.com">lacozzainfuriata@gmail.com</a></h6>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1 mr-5">Subscribe for free</h5>
    </li>
    <li class="list-inline-item text-dark text-left">
      @include('subscribe')

      {{--
Mail::send('adver',[],function($m){
  $m->to('user@gmail.com')->subject('La Cozzza Infuriata');
  return view ('welcome');
})
      --}}
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1" href="#">
        <i class="fab fa-2x fa-facebook-f facebook"></i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-2x fa-twitter twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-2x fa-google google"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-2x fa-linkedin-in linkedin"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a style="color:orange; " href="/"> La Cozza Infuriata </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->