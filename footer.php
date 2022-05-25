<!-- Footer -->  
<footer>
      <div class="section bg-dark py-5 pb-0">
        <div class="container">
          <div class="row">
           <div class="col-md-6 col-lg-3">
             <h6 class="text-white mb-1">Telefon:</h6>
             <p class="text-white mb-4">+45 8888 8888</p>
             <h6 class="text-white mb-1">Email:</h6>
             <p class="text-white mb-4">SGI@example.com</p>
             
            </div>
            <div class="col-md-6 col-lg-3">
            <h6 class="text-white mb-1">Adresse:</h6>
            <p class="text-white mb-4">Præstemarksvej 43, 6710 Esbjerg</p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6 class="text-white mb-1">Følg os på:</h6>
              <ul class="social-icons">

               <li><a href="https://pureemaison.com/en/hello404"><ion-icon name="logo-linkedin"></ion-icon></a></li>
               <li><a href="https://www.figma.com/hello404"> <ion-icon name="logo-instagram"></ion-icon></a></li>
               <li><a href="https://www.lyft.com/hello404"> <ion-icon name="logo-facebook"></ion-icon></a></li>
            </ul>
            </div>
            
          </div>
        </div>
      </div>
      <div class="footer-copy section-sm">
        <div class="container">© Copyright 2022 Hussein Nekhala. All Rights Reserved</div>
       </div>
    </footer>
     
    <!-- Modal -->
    <div class="modal fade" id="send-request">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title mt-0">Send spørgsmål</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Skriv dine oplysninger samt spørgsmål og vores manager vil kontakte dig hurtigst muligt.</p>
           <form class="form-request js-ajax-form">
             <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="Navn *">
            </div>
             <div class="form-group">
               <input type="email" name="email"  class="form-control" required="" placeholder="Email *">
             </div>
             <div class="form-group">
              <textarea rows="3" name="message"  class="form-control" placeholder="Besked *"></textarea>
             </div>
             <div class="message" id="success-message">Dit spørgsmål er blevet sendt</div>
             <div class="message" id="error-message">Der er sket en fejl</div>
             <div class="form-group mb-0 text-right">
               <button type="submit" class="btn">Send</button>
             </div>
            </form>
          </div>
        </div>
      </div>
      </div>

<!-- Optional JavaScript -->
  <?php wp_footer() ?>
</body>
</html>