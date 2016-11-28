<?php include 'includes/header.php'; ?>
<div class="container">
  <div class="row">
    <h2 class="text-center">Reach Us</h2>
  </div>
  <div class="thumbnail">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497805.7713180631!2d75.51128814418006!3d12.900802884240157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4d8200ec60cff%3A0x8d94427ba7c6e36b!2sAgani%2C+Karnataka!5e0!3m2!1sen!2sin!4v1480333226571"
    width="1130" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <section class="contact" id="contact">
    <div class="row">
      <h2 class="text-center">Drop Us a Message</h2>
    </div>
    <div class="col-md-12" id="contact">
      <form class="" action="sendcontact.php" method="post" style="padding:20px;">
        <div class="form-group col-md-4">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="" name="name" placeholder="Please Enter Your name">
        </div>
        <div class="form-group col-md-4">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="" name="email" placeholder="Please Enter Your name">
        </div>
        <div class="form-group col-md-4">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" id="" name="phone" placeholder="Please Enter Your name">
        </div>
        <div class="form-group col-md-12">
          <label for="message">Message</label>
          <textarea name="message" class="form-control" rows="8" cols="80"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="form-control btn btn-success" id="" name="submit" value="Send Message">
        </div>
      </form>
    </div>
  </section>
  <div style="margin-top:10em;"></div>
  <div class="row">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="col-md-12" style="background-color:rgba(0,0,0,0.2); padding:10px;">
    <div class="col-md-4" style="background-color:rgba(0,0,0,0.8);">
      <h2 class="text-center"><i class="fa fa-home"></i></h2>
      <address>
          Village - Agani <br>
          Post Office - Hanbal <br>
          Taluk - Sakaleshpur <br>
          Dist - Hassan <br>
          Pin - 573165
      </address>
    </div>
    <div class="col-md-4" style="background-color:rgba(0,0,0,0.6); height:233px;">
      <h2 class="text-center"><i class="fa fa-phone"></i></h2>
      <ul class="text-center list-unstyled" style="font-size:16px;">
        <li>Sujith: + 91 9449898496</li>
        <li>Manjunatha +91 9741544696</li>
      </ul>
    </div>
    <div class="col-md-4 contact-email" style="background-color:rgba(0,0,0,0.4); height:233px;">
      <h2 class="text-center"><i class="fa fa-envelope-o"></i></h2>
      <h4 class="text-center"><a href="mailto:karadikalluhomestay@gmail.com" target="_top" class="text-center">Drop Me a Mail</a></h4>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
