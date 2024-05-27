document.write(`
<div class="footbar">
   <header>
      <div class="container">
         <div class="mobile">
            <main>
               <script src="components/footer-nav1.js"></script>
               <script src="components/footer-nav2.js"></script>
               <script src="components/footer-img-industrial.js"></script>
               <script src="components/footer-sosmed.js"></script>
               <script src="components/footer-signup.js"></script>
               <script src="components/footer-mobile.js"></script>
               <script src="components/footer-feedback.js"></script>
            </main>
         </div>
         <div class="desktop">
            <main>
               <script src="components/footer-nav1.js"></script>
               <script src="components/footer-signup.js"></script>
            </main>
            <main>
               <script src="components/footer-img-industrial.js"></script>
               <script src="components/footer-mobile.js"></script>
            </main>
            <main>
               <script src="components/footer-nav2.js"></script>
               <script src="components/footer-sosmed.js"></script>
               <script src="components/footer-feedback.js"></script>
            </main>
         </div>
      </div>
   </header>
   <footer>
      <div class="container">
         <nav class="nav nav-privacy">
            <a href="#" target="_blank" class="nav-link">terms of access</a>
            <a href="#" target="_blank" class="nav-link">terms of sale</a>
            <a href="#" target="_blank" class="nav-link">privacy policy</a>
            <a href="#" target="_blank" class="nav-link">your privacy choices</a>
            <a href="#" target="_blank" class="nav-link">sitemap</a>
            <a href="#" target="_blank" class="nav-link">fraud alert</a>
            <a href="#" target="_blank" class="nav-link">accessibility statement</a>
         </nav>
         <div class="copyright">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
            SDA. All rights reserved.
         </div>
      </div>
   </footer>
</div>
`)