<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wonder Sopt</title>
    <link rel="icon" type="image/x-icon" href="image/logo/favicon.png">
    
    <!-- bootstrap 5 CDN  link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css link -->
   
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome CDN link -->
    <script src="https://kit.fontawesome.com/c1a3994336.js" crossorigin="anonymous"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

   <style>
    
/* scroll to top btn */

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #fbad20;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #fbad20;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

   </style>
   
   </head>
<body>

<!-- navbar include -->

    <?php include "navbar/nav.php" ?>


    <!-- banner section -->

    <section class="mt-5 pt-5">
         <div class="container mt-5 ">
             <div class="row">




                <div class="col-md-12  col-lg-6">
                    <div class="row ">
                        <div class="col-md-12  mt-0 mt-lg-5 pt-0  pt-lg-5">
                        <div class="about-sec ">
                         <h4>Say Hi Any Time</h4>
                        
                         <p> <span class="me-3"> Please give us a call, drop us an email, or fill out the contact form and we’ll get back to you.</p>
                         <p> <span class="me-2 "><i class="fa-solid fa-location-dot fa-2xl me-3" style="color: #FFD43B;"></i>Our Address:</span>Lorem ipsum dolor sit amet</p>
                         <p> <span class="me-2"><i class="fa-solid fa-envelope fa-xl me-3" style="color: #FFD43B;"></i>Our Email:</span>wonderspot@gmail.com</p>
                         <p> <span class="me-2"><i class="fa-solid fa-phone fa-2xl me-2" style="color: #FFD43B;"></i>Our Phone:</span>1234567890</p> 
                        </div>

                        </div>

                 
                </div>
                
              </div>
              

              
              <div class="col-md-12 col-lg-6  ">
                 
                <div class="row">

                  <div class="col-md-12 col-lg-8 mx-auto">
                         <!-- <div class="text-center mb-4">
                          <img src="image/logo/logo.png" class="text-center mx-auto w-25" alt="" >
                         </div> -->
                         
                          <h4 class="text-center common-heading-dining">Enquire Now</h4>
                           <p class=" text-center common-text-dining pt-3 text-muted">Take your first step towards specialised career 100% privacy; We will never spam you</p>

                              <!--form --> 

                           <form id="survey-form" class="form" action="/wonder20/enquiry_action.php" method="post">
                            <!-- Name inputs below-->
                            <div class="form-floating mb-3">
                                <input
                                    class="form-control  border-0 border-bottom"
                                    type="text" name="name" id="name"
                                    placeholder="Name" required>
                                <label for="name" id="name-label">
                                    Name
                                </label>
                            </div>
                            <!-- Email inputs below-->
                            <div class="form-floating mb-3">
                                <input
                                    class="form-control border-0 border-bottom"
                                    type="number" name="phone" id="phone"
                                    placeholder="phone number" required>
                                <label for="number" id="number-label">
                                    Phone number
                                </label>
                            </div>
            
                               <!-- Email inputs below-->
                               <div class="form-floating mb-3">
                                <input
                                    class="form-control border-0 border-bottom"
                                    type="email" name="email" id="email"
                                    placeholder="Email" required>
                                <label for="email" id="email-label">
                                    Email Address
                                </label>
                            </div>
                         
                         
                            <!-- Dropdown options start-->
                            <div class="mt-4 ">
                                <label for="dropdown" id="dropdown-label"
                                    class="mb-2">
                                    Choose Course
                                </label>
                                <select  id="dropdown course" name="course"
                                    class="form-select border-0 border-bottom"  required>
                                    <option selected disabled value="">Select  Course</option>
                                    <option  value="animation">ANIMATION</option>
                                    <option   value="vfx">VFX</option>
                                    <option  value="multimedia">MULTIMEDIA</option>
                                    <option   value="gaming">GAMING</option>
                                    <option  value="Web Design">Web Design</option>
                                </select>
                            </div>
                            
                           
            
                            <!-- Submit button below -->
                            <div class="d-grid mt-4">
                                <button id="submit"
                                    class="btn form-btn border-0 py-3  text-uppercase"
                                    type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    
                 </div>
           </div>


        
                       
                 </div>
            

               
               </div>


                    
                    </div>
                     
                 
             
         </div>
    </section>

<!-- google map -->

    
<section class="mb-5 mt-5">
    <div class="container">
          <div class="col-md-12">
          <!-- <h4 class="fs-3  text-center fw-bolder mb-4 mt-4">Location</h4> -->

          <div class="ratio ratio-16x9">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117996.95037632967!2d-74.05953969406828!3d40.75468158321536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20Nowy%20Jork%2C%20Stany%20Zjednoczone!5e1!3m2!1spl!2spl!4v1672242444695!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52929.41329114923!2d76.5253142406703!3d9.595079493345068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062ba16c6b435f%3A0xbe2b02f68f8dd06e!2sKottayam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1712237513093!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
        

          </div>
    </div>
</section>

 <!-- scroll to top -->
    <div class="scroll-btn">
              <button onclick="topFunction()" id="myBtn" title="Go to top">
              <i class="fa-solid fa-arrow-up" style="color:#000000;"></i></button>
    </div>
   





      <!-- footer include -->

    <?php include "footer/footer.php" ?>
      

    <script src="js/main.js"></script>
 

 <!-- bootstrap 5 CDN  link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>
</html>    