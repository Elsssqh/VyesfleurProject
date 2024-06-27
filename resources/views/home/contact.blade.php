<!DOCTYPE html>
<html>

<head>

  @include('home.css')
      
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header') 
    


  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          <br>
          Contact Us
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.265448211796!2d104.0287553!3d1.1124097!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9892532e66343%3A0x2564b48b38736353!2sVyes%20Fleur!5e0!3m2!1sen!2sid!4v1718649642901!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>

   

  <!-- info section -->
@include('home.footer')

</body>

</html>