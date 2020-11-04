<!--CSS -->
<style>
  :root {
    --facebook-color: #4267B2;
  }

  .facebook {
    color: var(--facebook-color);
  }

  .twitter {
    color: #1DA1F2;
  }

  .google {
    background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    -webkit-text-fill-color: transparent;
  }

  .linkedin {
    color: #0e76a8;
  }
</style>

<!-- Footer -->
<footer class="footer bg-dark text-white pt-4">

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
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><!--Here you can write something--></h5>

        <ul class="list-unstyled">
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><!--Here you can write something--></h5>

        <ul class="list-unstyled">
          
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>

        <ul class="list-unstyled">
          <li>
            <h6>Location: <span>Lithuania,Kaunas</span></h6>
          </li>
          <li>
            <h6>Phone number: <span>(+370) 12345678</span></h6>
          </li>
          <li>
            <span>Email:</span> <a href="mailto:lacozzainfuriata@gmail.com">lacozzainfuriata@gmail.com</a>
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
      <h5 class="mb-1">Subscribe for free</h5>
    </li>
    <li class="list-inline-item text-dark text-left">
      @include('subscribe')
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
    <a style="color:orange; " href="https://lacozzainfuriata.com"> La Cozza Infuriata </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->