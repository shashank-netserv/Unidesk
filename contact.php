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
                 <span class="fs18">41 D Pocket A Sukhdev Vihar New Delhi - 110025</span>
                  </div>
              </li>
            <hr>

              <li class="cinzel clr333 fs24">
             <i class="fa fa-volume-control-phone" aria-hidden="true"></i> Phone
                <div class="left-text">
                 <span><a href="tel:+91 9810492669" class="text-decoration text-black fs18">+91 9810 492 669</a></span>
               </div>
              </li>
             <hr> 

               <li class="cinzel clr333 fs24">
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Email
                <div class="left-text">
                 <span><a href="mailto:contactus@unideskpartners.com" class="text-decoration text-black fs18">contactus@unideskpartners.com</a></span>
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
                                <div class="col-md-6">
                                        <input type="text" name="designation" class="form-control" placeholder="Designation*" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="services">
                                            <option value="" >Service you are interested in*</option>
                                            <option value="Intuitive Integration">Intuitive Integration</option>
                                            <option value="Conversational Generative AI">Conversational Generative AI</option>
                                            <option value="Natural Language Processing (NLP)">Natural Language Processing (NLP)</option>
                                            <option value="24/7 Support">24/7 Support</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="message" class="form-control" placeholder="Type a message*" rows="3" required></textarea>
                                    </div>
                                </div>
                             
                               <button type="submit" class="cta headerbutton bnone" name="submit">Submit </button>
                            </div>
                        </form>
                    </div>
  </div>
</div>
</section>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src = "https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-1.9.0.min.js"></script>
<script> 
$('#contactForm').on('submit', function(e){
    e.preventDefault(); 
    var data = new FormData(this); 
    $.ajax({ 
        type:"POST", 
        url:"email.php", 
        data:data,
        contentType:false,
        cache:false,
        processData:false,
        success:function(response){ console.log(response); 
        swal({text:'Thank you for contacting us. One of our team members will contact you shortly.',
        icon: "success", button: "Ok!" });
        window.setTimeout(function(){
    location.reload() },3000) }
    }) }) 
</script>
<?php include('footer.php'); ?>