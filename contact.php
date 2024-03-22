<?php include('header.php'); ?>

<section class="contact-banner d-flex text-center align-items mt-80">
  <div class="container">
    <h1 class="cinzel fs72 fw400 text-white line-height wow animate__animated animate__fadeInUp">Contact Us</h1>
  </div>
</section>



<section class="mb40 contact-page" style="margin-top:80px;">
<div class="container vision">
  <div class="contact-page1">
      <div class="row">
          <!--order-sm-12-->

          <div class="col-md-4">
        <div class="Contact-left">
            <h4 class="cinzel mb40 fs30 wow animate__animated animate__fadeInUp">Get in touch</h4> 
           <ul class="wow animate__animated animate__fadeInUp">
              <li class="cinzel clr333 fs24">
                <i class="fa fa-map-marker" aria-hidden="true"></i> Address
                <div class="left-text">
                 <span class="fs18">Floor 2, Wing-B, Supreme Business Park, Hiranandani Gardens, Powai, Mumbai 400 076.</span>
                  </div>
              </li>
            <hr>

              <li class="cinzel clr333 fs24">
             <i class="fa fa-volume-control-phone" aria-hidden="true"></i> Phone
                <div class="left-text">
                 <span><a href="tel:+91 223937 9999" class="text-decoration text-black fs18">+91 223937 9999</a></span>
               </div>
              </li>
             <hr> 

               <li class="cinzel clr333 fs24">
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Email
                <div class="left-text">
                 <span><a href="mailto:robin@unideskpartners.com" class="text-decoration text-black fs18">robin@unideskpartners.com</a></span>
                </div>
              </li> 
            </ul>
          </div>
        </div>

            <div class="col-md-8">
                    <div class="Contact-right">
                        <h4 class="cinzel mb40 fs30 wow animate__animated animate__fadeInUp">How can we help you?</h4>
                        <form id="contactForm" class="wow animate__animated animate__fadeInUp">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="fname" class="form-control" placeholder="Name*" accept="text" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="cname" class="form-control" placeholder="Company*" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email*" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="tel" name="number" class="form-control" placeholder="Number*" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="services">
                                            <option value="" >Service you are interested in*</option>
                                            <option value="Mergers & Acquisitions Advisory">Mergers & Acquisitions Advisory</option>
                                            <option value="Corporate Finance Advisory">Corporate Finance Advisory</option>
                                            <option value="Transformation & Restructuring Advisory">Transformation & Restructuring Advisory</option>
                                            <option value="Interim & Crisis Management">Interim & Crisis Management</option>
                                            <option value="Corporate Governance Initiatives">Corporate Governance Initiatives</option>
                                            <option value="Industry and Market Research">Industry and Market Research</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea row="5" name="message" class="form-control" placeholder="Type a message*" required></textarea>
                                    </div>
                                </div>
                             
                               <button type="submit" class="cta headerbutton bnone" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Loading...">Submit <span><img src="images/contacticon.png" /></span></button>
                            </div>
                        </form>
                    </div>
  </div>
</div>
</section>


<?php include('footer.php'); ?>