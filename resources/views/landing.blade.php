<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <title>SDA &bull; Home</title>
   <script src="components/head-links.js"></script>
   <style>
      * {
         outline: solid 1px green;
         outline: solid 1px transparent;
      }

      .mission-img {
         --bs-aspect-ratio: 100%;
      }

      @media (min-width: 768px) {
         .mission-img {
            --bs-aspect-ratio: 60%;
         }
      }

      @media (min-width: 1200px) {
         .mission-img {
            --bs-aspect-ratio: 204%;
         }
      }
   </style>
</head>

<body>

   <header class="page-header">
      <script src="{{ url('') }}/ui/components/navtop.js"></script>
   </header>

   <main class="page-wrapper fs-xxl-4">
      <section>
         <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000"
            data-bs-pause="false">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
                  aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="{{ url('') }}/ui/assets/img/banner/banner.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="{{ url('') }}/ui/assets/img/banner/banner.png" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                  <img src="{{ url('') }}/ui/assets/img/banner/banner.png" class="d-block w-100" alt="...">
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </section>
      <section class="d-lg-flex text-split-lg-50">
         <div class="w-lg-50 d-none d-lg-block"
            style="background-image: url({{ url('') }}/ui/assets/img/home/after-ours-banner-2.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
         </div>
         <div class="w-lg-50">
            <div>
               <div class="container-sm py-5 px-lg-5">
                  <h5 class="section-title text-primary display-2 mb-4">
                     ABOUT <br class="d-none d-lg-block"><b class="fw-bold">US</b>
                  </h5>
                  <p>
                     SDA Global takes pride in its reputation as a reliable and customer-centric organization. Since
                     our inception on June 2, 1992, we have remained committed to fulfilling our customers’ needs.
                     Starting with hydraulic and pneumatic products, we expanded our portfolio to include industrial
                     and commercial solutions. Our knowledgeable team offers friendly advice based on years of
                     combined experience and friendly demeanor.
                  </p>
               </div>
            </div>
            <div class="bg-primary text-white"
               style="background: url({{ url('') }}/ui/assets/img/home/goal-bg.png); background-repeat: no-repeat; background-position: right bottom; background-size: 70%; auto">
               <div class="container-sm py-5 px-lg-5 d-grid row-gap-5">
                  <div class="d-none">
                     <h5 class="card-title text-white display-2 mb-4">
                        OUR <br class="d-none d-lg-block"><b class="fw-bold">GOAL</b>
                     </h5>
                     <p>
                        Our goal at SDA Indonesia is to stay in touch with any changes in our industry, so that we
                        can always offer you the latest and most current information and services.
                     </p>
                  </div>
                  <div class="text-center py-5">
                     <img src="{{ url('') }}/ui/assets/img/footer/idustrial.png" width="104%" height="auto" alt=""
                        style="max-width: 320px;">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bg-xl-primary text-xl-white position-relative">
         <div class="container-xl px-0">
            <div class="row mx-0">
               <div class="col px-0 col-12 col-xl-5 order-xl-2 ms-xl-auto position-relative">
                  <div class="position-xl-absolute top-0 start-0 w-100 pe-lg-3">
                     <div class="position-relative">
                        <div class="mission-img ratio">
                           <img src="{{ url('') }}/ui/assets/img/home/mission-banner.jpg" class="object-fit-cover" alt="">
                        </div>
                        <div class="d-none d-lg-block position-absolute bottom-0 end-0 vw-100"
                           style="transform: translateX(calc(var(--bs-gutter-x) * .5));">
                           <div class="container me-0">
                              <img src="{{ url('') }}/ui/assets/img/home/wording-vision.svg" width="100%" height="auto" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col px-0 col-12 col-xl-6 order-xl-1">
                  <div class="container py-5 pt-xl-7">
                     <h5 class="section-title text-primary display-2 mb-4 text-xl-white">
                        <b class="fw-bold">MISSION</b> <br class="d-none d-lg-block">STATEMENT
                     </h5>
                     <ul class="d-grid row-gap-3">
                        <li>
                           Customer Satisfaction: We strive to understand our customers&apos; requirements thoroughly
                           and deliver solutions that exceed their expectations.
                        </li>
                        <li>
                           Quality Assurance: Our commitment to quality ensures that every product and service we
                           offer
                           meets the highest standards.
                        </li>
                        <li>
                           Timeliness: We value your time. Our eficient processes and dedicated team ensure timely
                           delivery.
                        </li>
                        <li>
                           Competitive Edge: We stay ahead of the curve by ofering competitive pricing, innovative
                           solutions supported by comprehensive inventory for the market.
                        </li>
                        <li>
                           Mutual Success: We believe in fostering strong relationships with our valuable customers,
                           trusted suppliers, prestigious corporation and the dynamic community.
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="d-none d-xl-block position-absolute end-0 w-75 opacity-75"
            style="top: 3em; transform: translateX(35%);">
            <img src="{{ url('') }}/ui/assets/img/home/wording-mission.svg" width="100%" height="auto" alt="">
         </div>
      </section>
      <section>
         <div class="container py-5 pt-xl-14 position-relative">
            <h5 class="section-title text-primary display-2 mb-4 text-lg-white">
               <b class="fw-bold">VISION</b> <br class="d-none d-lg-block">STATEMENT
            </h5>
            <p>
               SDA Global aims to be the paragon of the value-added problem-solving instituition. We provide superior
               person-to-person individualized service to all our customers and prospects. Our vision is to be the go-to
               partner for industrial and commercial needs, offering personalized solutions that make a difference.
               Additionally, we envision expanding our reach through e-commerce, providing seamless online experiences
               for our valued clients.
            </p>
         </div>
      </section>
      <section class="d-none">
         <div class="container py-5">
            <h5 class="section-title fs-3 mb-5">
               <b class="fw-bold">What&apos;s New?</b>
            </h5>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
               <div class="col">
                  <div class="card w-100 rounded-0 border-0 bg-transparent">
                     <img src="{{ url('') }}/ui/assets/img/home/news1.png" class="card-img-top rounded-0" alt="...">
                     <div class="card-body px-0 py-5">
                        <h5 class="card-title">
                           <a href="#" target="_blank" class="link-primary">
                              SDA Announces Community Partnership with Vendor A
                           </a>
                        </h5>
                        <p class="card-text">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia itaque, velit tenetur
                           repellat incidunt esse nihil. Reprehenderit veniam inventore explicabo, voluptatibus facilis
                           reiciendis error minima dicta repellat? Libero, voluptates.
                        </p>
                        <p class="card-text opacity-50">
                           <small>April 23, 2024 / Indonesia</small>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card w-100 rounded-0 border-0 bg-transparent">
                     <img src="{{ url('') }}/ui/assets/img/home/news2.png" class="card-img-top rounded-0" alt="...">
                     <div class="card-body px-0 py-5">
                        <h5 class="card-title">
                           <a href="#" target="_blank" class="link-primary">
                              SDA Announces Community Partnership with Vendor A
                           </a>
                        </h5>
                        <p class="card-text">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia itaque, velit tenetur
                           repellat incidunt esse nihil. Reprehenderit veniam inventore explicabo, voluptatibus facilis
                           reiciendis error minima dicta repellat? Libero, voluptates.
                        </p>
                        <p class="card-text opacity-50">
                           <small>April 23, 2024 / Indonesia</small>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card w-100 rounded-0 border-0 bg-transparent">
                     <img src="{{ url('') }}/ui/assets/img/home/news3.png" class="card-img-top rounded-0" alt="...">
                     <div class="card-body px-0 py-5">
                        <h5 class="card-title">
                           <a href="#" target="_blank" class="link-primary">
                              SDA Announces Community Partnership with Vendor A
                           </a>
                        </h5>
                        <p class="card-text">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia itaque, velit tenetur
                           repellat incidunt esse nihil. Reprehenderit veniam inventore explicabo, voluptatibus facilis
                           reiciendis error minima dicta repellat? Libero, voluptates.
                        </p>
                        <p class="card-text opacity-50">
                           <small>April 23, 2024 / Indonesia</small>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <footer class="page-footer">
      <script src="{{ url('') }}/ui/components/footbar.js"></script>
   </footer>

   <script src="{{ url('') }}/ui/components/scripts.js"></script>
   <script>
      $('#nav-home').addClass('active');
   </script>

</body>

</html>