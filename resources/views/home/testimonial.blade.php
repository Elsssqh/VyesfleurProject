<!DOCTYPE html>
<html>

<head>

  @include('home.css')
      
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header') 
    <!-- end header section -->
 


<!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Emily Johnson
                  </h5>
                  <h6>
                    Chief Event Planner, Dream Events
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "Vyes Fleur exceeded all my expectations with their stunning floral creations. From the moment I stepped into their studio, I knew I was in for a treat. As the Chief Event Planner at Dream Events, I rely on vendors who can deliver excellence consistently. The team at Vyes Fleur not only met but exceeded our expectations every step of the way. Their professionalism, attention to detail, and creativity shone through in every arrangement they crafted for our events. Vyes Fleur has become an indispensable partner for us, and I look forward to continuing our successful collaboration."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Daniel Lee
                  </h5>
                  <h6>
                    Marketing Director, Luxe Hotels
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              "As the Marketing Director at Luxe Hotels, I am always on the lookout for vendors who can deliver elegance and sophistication. Vyes Fleur did just that and more. Their floral designs added a touch of class to our hotel's ambiance, creating a welcoming atmosphere that our guests truly appreciated. Their ability to understand our vision and transform it into beautiful floral arrangements is truly commendable. I highly recommend Vyes Fleur to anyone looking for top-notch floral services."
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Sarah Johnson 
                  </h5>
                  <h6>
                    Wedding Planner, Blissful Moments
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              "Working with Vyes Fleur has been an absolute pleasure. As a wedding planner at Blissful Moments, I strive to provide my clients with the best possible experience, and Vyes Fleur helps me achieve that goal effortlessly. Their creativity and attention to detail are unparalleled, and they consistently deliver breathtaking floral arrangements that leave our clients in awe. I am grateful to have Vyes Fleur as a trusted partner, and I look forward to many more successful collaborations together."
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->


 

   

  <!-- info section -->
@include('home.footer')

</body>

</html>