<?php 
  include_once('header.php');

?>

     <!---main body-->
      <!-- carousel-->
      <main>
      <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel-1.jpg" class="d-block  custom-car-img-height-sm" alt="carousel 1">
            <div class="carousel-caption text-center">
              <div class="mt-sm-5 py-3">
                  <h2 class="text-white display-4 m-4 cen-hero-title">
                  <span class="cen-bg-darkblue-opacity p-2 "> First slide label </span></h2>
                  <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> FIRST CONTENT FEATURED 
                  </span>
                  </p>
                
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel-3.jpg" class="d-block custom-car-img-height-sm" alt="carousel 2">
            <div class="carousel-caption ">
              <div class="mt-sm-5 py-3">
                 <h2 class="text-white display-4 m-4 cen-hero-title">
                  <span class="cen-bg-darkblue-opacity p-2"> Second slide label </span></h2>
                  <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> SECOND CONTENT FEATURED 
                  </span>
                  </p>
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel-1.jpg" class="d-block custom-car-img-height-sm" alt="carousel 3">
            <div class="carousel-caption ">
              <div class="mt-sm-5 py-3">
                <h2 class="text-white display-4 m-4 cen-hero-title">
                  <span class="cen-bg-darkblue-opacity p-2"> Third slide label </span></h2>
                  <p class="text-white m-4 cen-hero-blurb">
                  <span class="cen-bg-darkblue-opacity p-2"> THIRD CONTENT FEATURED
                  </span>
                  </p> 
              </div>
              <div class="button">
                <a href="#" class="btn btn-primary cen-btn-darkblue py-2 px-3" role="button">Learn more</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    

    <!--central features section-->
    <div class="container my-5 ">
      <!-- First Row: Central Features -->
      <div class="row my-4 ">
        <div class="col d-flex justify-content-between align-items-center">
          <h2 class="cen-font-darkblue">Central Features</h2>
          <a href="#" class="btn btn-primary">View all</a>
        </div>
      </div>
      <!-- Second Row: Cards -->
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <!-- Card 1 -->
        <div class="col">
          <div class="card rounded-0">
          <div class="card-item">
            <a href= "#"><img class="card-img-top rounded-0 " src="img/card1.jpg" alt="Card 1"></a>
          </div>
            <div class="card-body">
              <h5 class="card-title  cen-font-darkblue"><a href="#" class="card-link">Card 1</a></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col">
          <div class="card rounded-0">
            <div class="card-item">
              <a href= "#"><img class="card-img-top rounded-0" src="img/card2.jpg" alt="Card 2"></a>
            </div>
            <div class="card-body">
              <h5 class="card-title  cen-font-darkblue"><a href="#" class="card-link">Card 2 </a></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col">
          <div class="card rounded-0">
            <div class="card-item">
              <a href= "#"><img class="card-img-top rounded-0 img-fluid" src="img/card3.jpg" alt="Card 3"></a>
            </div>
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue"><a href="#" class="card-link">Card 3</a></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col">
          <div class="card rounded-0">
            <div class="card-item">
               <a href= "#"><img class="card-img-top rounded-0" src="img/card4.jpg" alt="Card 4"></a>
            </div>
            <div class="card-body">
              <h5 class="card-title cen-font-darkblue"><a href="#" class="card-link">Card 4</a></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Medical Journals Online-->
    <div class="container cen-bg-darkgrey   py-5 ">

      <div class="card-body">
        <h2 class="card-title my-3 text-center cen-font-darkblue">Medical Journal Online</h2>
        <p class="card-text text-left px-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
        
        <div class="container">
              <!-- ======= Counts Section ======= -->

                  <div class="row d-flex justify-content-center py-5">

                    <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                      <div class="cen-counts">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-journal-text" viewBox="0 0 16 16">
                          <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                        </svg>
                        <span data-purecounter-start="0" data-purecounter-end="133" data-purecounter-duration="1" class="purecounter"></span>
                        <p class="text-white">Journals</p>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                      <div class="cen-counts">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-prescription2" viewBox="0 0 16 16">
                          <path d="M7 6h2v2h2v2H9v2H7v-2H5V8h2z"/>
                          <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v10.5a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 14.5V4a1 1 0 0 1-1-1zm2 3v10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V4zM3 3h10V1H3z"/>
                        </svg>
                        <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter"></span>
                        <p class="text-white">TextGoesHere</p>
                      </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                      <div class="cen-counts">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5"/>
                          <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z"/>
                        </svg>
                        <span data-purecounter-start="0" data-purecounter-end="753" data-purecounter-duration="1" class="purecounter"></span>
                        <p class="text-white">TextGoesHere</p>
                      </div>
                    </div>

                    <div class="col-12  col-md-6 col-lg-3 d-flex justify-content-center mb-3">
                      <div class="cen-counts">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-people" viewBox="0 0 16 16">
                          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                        </svg>
                        <span data-purecounter-start="0" data-purecounter-end="383" data-purecounter-duration="1" class="purecounter"></span>
                        <p class="text-white">TextGoesHere</p>
                      </div>
                    </div>

                  </div>

                <!-- End Counts Section -->
          </div>
     
      </div>
    </div>




    <!--News and Announcement-->
    <div class="container py-5 ">
      <!-- First Row: Heading -->
      <div class="row my-4">
        <div class="col d-flex justify-content-between align-items-center">
          <h2 class="cen-font-darkblue">News and Announcement</h2>
          <a href="#" class="btn btn-primary">View all</a>
        </div>
      </div>
    
      <!-- Row with 3 Cards -->
      <div class="row">
          
            <!-- First Card -->
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3 ">
              <div class="card bg-light rounded-0 ">
              <div class="card-item">
                <a href= "#"> <img src="img/news1.jpg" class="card-img-top rounded-0" alt="Placeholder Image"></a>
              </div>
                <div class="card-body">
                  <h5 class="card-title cen-font-darkblue"><a href= "#" class="card-link">Card 1 Title</a></h5>
                </div>
              </div>
            </div>
            <!-- Second Card -->
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
              <div class="card bg-light rounded-0">
              <div class="card-item">
                <a href= "#"><img src="img/news2.jpg" class="card-img-top rounded-0" alt="Placeholder Image"></a>
              </div>
                <div class="card-body">
                  <h5 class="card-title cen-font-darkblue"><a href= "#" class="card-link">Card 2 Title</a></h5>
                </div>
              </div>
            </div>
            <!-- Third Card -->
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
              <div class="card bg-light rounded-0">
              <div class="card-item">
                <a href= "#"><img src="img/news3.jpg" class="card-img-top rounded-0" alt="Placeholder Image"></a>
              </div>
                <div class="card-body">
                  <h5 class="card-title cen-font-darkblue"><a href= "#" class="card-link">Card 3 Title </a></h5>
                </div>
              </div>
            </div>
           
      </div>
    </div>
    </main>

<?php 
include_once("footer.php");
?>