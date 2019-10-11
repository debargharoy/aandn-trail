
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container wow mt-5">
          <div class="row justify-content-center">

            <div class="col-lg-5 col-md-4">

              <div class="info">
                <div>
                  <i class="fa fa-map-marker"></i>
                  <p>Office Address<br>City, State</p>
                </div>

                <div>
                  <i class="fa fa-envelope"></i>
                  <p>info@example.com</p>
                </div>

                <div>
                  <i class="fa fa-phone"></i>
                  <p>+1 5589 55488 55s</p>
                </div>
              </div>

              <div class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57377.78199352123!2d80.23552284366725!3d13.10484930188068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526707ca7b3ea3%3A0xed7f3109bee70e4f!2sSpencer%20Plaza%20Mall!5e0!3m2!1sen!2sin!4v1570788894744!5m2!1sen!2sin" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>

            </div>

            <div class="col-lg-7 col-md-8">
              <div class="form">
                <div id="sendmessage" style="display: none">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </form>
              </div>
            </div>

          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Send Message</button>
      </div>
    </div>
  </div>
</div>

<footer id="footer">
  <div class="footer-top">
    <div class="container">

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      <!--&copy; Copyright <strong>Regna</strong>.--> All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
