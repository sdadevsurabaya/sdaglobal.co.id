document.write(`
<div class="footbar text-center">
   <div class="footbar-top bg-primary text-white py-5">
      <div class="mobile d-lg-none">
         <div class="container d-grid row-gap-5">
            <script src="components/footbar-nav1.js"></script>
            <script src="components/footbar-nav2.js"></script>
            <script src="components/footbar-img-industrial.js"></script>
            <script src="components/footbar-sosmed.js"></script>
            <script src="components/footbar-signup.js"></script>
            <script src="components/footbar-mobile.js"></script>
            <script src="components/footbar-feedback.js"></script>
         </div>
      </div>
      <div class="desktop d-none d-lg-block text-start">
         <div class="container d-grid" style="grid-template-columns: 1fr auto auto; column-gap: 5vw;">
            <div class="d-flex flex-column justify-content-between row-gap-4">
               <script src="components/footbar-nav1.js"></script>
               <script src="components/footbar-signup.js"></script>
            </div>
            <div class="d-flex flex-column justify-content-between row-gap-4">
               <script src="components/footbar-img-industrial.js"></script>
               <script src="components/footbar-mobile.js"></script>
            </div>
            <div class="d-flex flex-column justify-content-between row-gap-4">
               <script src="components/footbar-nav2.js"></script>
               <script src="components/footbar-sosmed.js"></script>
               <script src="components/footbar-feedback.js"></script>
            </div>
         </div>
      </div>
   </div>
   <div class="footbar-bottom bg-black text-white py-4">
      <div class="container d-grid row-gap-4">
         <nav class="custom-breadcrumb text-capitalize">
            <a href="#" target="_blank">terms of access</a>
            <a href="#" target="_blank">terms of sale</a>
            <a href="#" target="_blank">privacy policy</a>
            <a href="#" target="_blank">your privacy choice</a>
            <a href="#" target="_blank">sitemap</a>
            <a href="#" target="_blank">fraud alert</a>
            <a href="#" target="_blank">accessibility statement</a>
         </nav>
         <p class="opacity-50 m-0">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
            SDA. All rights reserved.
         </p>
      </div>
   </div>
</div>
`)