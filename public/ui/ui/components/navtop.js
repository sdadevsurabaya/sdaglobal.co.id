document.write(`
<div class="navtop bg-light py-3 py-lg-4">
   <div class="container d-lg-grid row-gap-lg-4">
      <ul class="list-unstyled m-0 d-grid align-items-center d-lg-block" style="grid-template-columns: 1fr auto 1fr;">
         <li class="d-lg-none">
            <button data-bs-toggle="offcanvas" data-bs-target="#sidebar">
               <i class="fas fa-bars fa-xl"></i>
            </button>
         </li>
         <li>
            <h1 class="navbrand m-0 text-center">
               <a href="index.html">
                  <img src="../assets/img/logo/logo-sda.svg" width="auto" alt=""
                     style="height: calc(32px + 1vw);">
               </a>
            </h1>
         </li>
         <li class="text-end d-lg-none">
            <button>
               <i class="fas fa-search fa-xl"></i>
            </button>
         </li>
      </ul>
      <div class="offcanvas-lg offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
         <div class="offcanvas-header">
            <button type="button" class="ms-auto" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
               <i class="fas fa-close fa-2x"></i>
            </button>
         </div>
         <div class="offcanvas-body">
            <ul class="list-unstyled m-0 text-capitalize d-flex flex-column row-gap-3 flex-lg-row flex-wrap justify-content-center w-100 column-gap-4" style="font-size: large;">
               <li>
                  <a href="index.html">home</a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     about SDA GLOBAL
                  </a>
                  <ul class="dropdown-menu rounded-0">
                     <li class="dropdown-item">
                        <a href="history.html">history</a>
                     </li>
                     <li class="dropdown-item">
                        <a href="leadership.html">leadership</a>
                     </li>
                     <li class="dropdown-item">
                        <a href="way.html">the SDA way</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#">our businesses</a>
               </li>
               <li>
                  <a href="#">news</a>
               </li>
               <li>
                  <a href="#">careers</a>
               </li>
               <li>
                  <a href="contact.html">contact us</a>
               </li>
            </ul>
            <ul class="list-unstyled m-0 column-gap-4" id="navcorner">
               <li>
                  <button>
                     <i class="fas fa-search fa-xl"></i>
                  </button>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
`)