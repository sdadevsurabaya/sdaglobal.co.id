document.write(`
<div class="footbar text-center">
   <div class="footbar-top bg-primary text-white py-5">
      <div class="mobile d-lg-none">
         <div class="container d-grid row-gap-5">
            <script src="ui/components/footbar-nav1.js"></script>
            <script src="ui/components/footbar-img-industrial.js"></script>
            <script src="ui/components/footbar-sosmed.js"></script>
            <script src="ui/components/footbar-signup.js"></script>
            <script src="ui/components/footbar-feedback.js"></script>
            <!-- <script src="ui/components/footbar-mobile.js"></script> -->
            <!-- <script src="ui/components/footbar-nav2.js"></script> -->
         </div>
      </div>
      <div class="desktop d-none d-lg-block text-start">
         <div class="container d-grid" style="grid-template-columns: 1fr auto auto; column-gap: 5vw;">
            <div class="d-flex flex-column justify-content-between row-gap-4">
               <script src="ui/components/footbar-nav1.js"></script>
            </div>
            <div class="d-flex flex-column justify-content-between row-gap-4 align-items-center">
               <script src="ui/components/footbar-img-industrial.js"></script>
               <script src="ui/components/footbar-sosmed.js"></script>
               <!-- <script src="ui/components/footbar-mobile.js"></script> -->
            </div>
            <div class="d-flex flex-column justify-content-between row-gap-4">
               <script src="ui/components/footbar-signup.js"></script>
               <script src="ui/components/footbar-feedback.js"></script>
               <!-- <script src="ui/components/footbar-nav2.js"></script> -->
            </div>
         </div>
      </div>
   </div>
   <div class="footbar-bottom bg-black text-white py-4">
      <div class="container d-flex flex-column row-gap-4 justify-content-center flex-lg-row row-gap-lg-0 column-gap-lg-5 justify-content-lg-between">
         <nav class="custom-breadcrumb text-capitalize">
            <a href="/privacy" target="_blank">privacy policy</a>
            <a href="/terms" target="_blank">terms & conditions</a>
         </nav>
         <p class="opacity-50 m-0">
            Copyright &copy;
            <script>document.write(new Date().getFullYear())</script>
            SDA. All rights reserved.
         </p>
      </div>
   </div>
</div>
`)