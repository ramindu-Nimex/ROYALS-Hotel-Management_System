<?php
   include "config.php";
   session_start();
   $UserID = $_SESSION['id'];

//    if(!empty($_SESSION["id"])) {
//       $id = $_SESSION["id"];
//       $sql = "SELECT * FROM user WHERE id = $id";
//       $result = mysqli_query($conn,$sql);
//       $row = mysqli_fetch_assoc($result);
//    }
//    else {
//       header("Location: logout.php");
//    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Royals Hotel Management System</title>
   <link rel="stylesheet" href="./main.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <section class="head">
      <div class="container flex1">
         <div class="logo">
            <h1>ROY<span>ALS</span></h1>
         </div>

         <h2>hey <?php echo $_SESSION['uname']; ?></h2>
         
         <div class="social">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
         </div>

         <!-- <div class="address">
            <i class="fas fa-map-marker-alt"></i>
            <span>205 GalleFace Street , Colombo</span>
         </div> -->
      </div>
   </section>

   <header class="header">
      <div class="container">
         <nav class="navbar flex1">
            <div class="sticky_logo logo">
               <h1>ROY<span>ALS</span></h1>
            </div>

            <ul class="nav-menu">
               <li><a href="#home">Home</a></li>
               <li><a href="#about">About</a></li>
               <li><a href="#room">Room</a></li>
               <li><a href="#services">Services</a></li>
               <li><a href="#testimonials">FeedBack</a></li>
               <li><a href="#blog">blog</a></li>
            </ul>

            <div class="hamburger">
               <span class="bar"></span>
               <span class="bar"></span>
               <span class="bar"></span>
            </div>

            <div class="sign">
               <a href="./register.php"><i class="fa-solid fa-user"></i></a>
               <div class="start">
                  <a href="./logout.php">Log Out</a>
               </div>
               <div class="start">
                  <a href="#">Get Started</a>
               </div>
               <div class="uname">
                  <a href="#"><?php echo $_SESSION['uname']; ?></a>
               </div>
            </div>

            <div class="head_contact">
               <i class="fas fa-phone-volume"></i>
               <span>+000 1234 5678</span>
            </div>
         </nav>
      </div>
   </header>

   <section class="home" id="home">
      <div class="container">
         <h1>Make Memories</h1>
         <p>Discover the place where you have fun & enjoy a lot</p>

         <div class="content grid">
            <div class="box">
               <span>ARRIVAL DATE </span> <br>
               <input type="date" placeholder="29/20/2021">
            </div>

            <div class="box">
               <span>DEPARTURE DATE </span> <br>
               <input type="date" placeholder="29/20/2021">
             </div>

             <div class="box">
               <span>ADULTS</span> <br>
               <input type="number" placeholder="01">
             </div>

             <div class="box">
               <span>CHILDREN </span> <br>
               <input type="number" placeholder="01">
             </div>

             <div class="box">
               <button class="flex1">
                 <span>Check Availability</span>
                 <i class="fas fa-arrow-circle-right"></i>
               </button>
             </div>
         </div>
      </div>
   </section>

   <section class="about" id="about">
      <div class="container">
         <div class="heading">
            <h5>EXPLORE</h5>
            <h2>We are cool to give you pleasure</h2>
         </div>

         <div class="content flex top">
            <div class="left">
               <h3>As much as comfort want to get from us everything</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               
               <button class="flex">
                  <span>Check Availability</span>
                  <i class="fas fa-arrow-circle-right"></i>
               </button>
            </div>

            <div class="right">
               <img src="images/a.png" alt="">
            </div>
         </div>
      </div>
   </section>
   
   <!-- <section class="wrapper">
      <div class="container">
         <div class="owl-carousel owl-theme">
            <div class="item">
               <div class="heading">
                  <h5>THE CITY VIEW</h5>
                  <h3>A charming view of the city</h3>
               </div>

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="item">
               <div class="heading">
                  <h5>THE CITY VIEW</h5>
                  <h3>A charming view of the city</h3>
               </div>

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="item">
               <div class="heading">
                  <h5>THE CITY VIEW</h5>
                  <h3>A charming view of the city</h3>
               </div>

               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
         </div>
      </div>
   </section> -->

   <div class="wrapper">
      <div class="container">
         <div class="heading mtop">
            <h5>FACILITIES</h5>
            <h2>Giving entirely awesome </h2>
         </div>

         <div class="content grid mtop">
            <div class="box">
               <i class="fas fa-shipping-fast"></i>
               <h3>Pick Up & Drop</h3>
               <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
               <div class="arr">
                  <i class="fas fa-arrow-circle-right"></i>
               </div>
            </div>

            <div class="box">
               <i class="fas fa-mug-hot"></i>
               <h3>Pick Up & Drop</h3>
               <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
               <div class="arr">
                  <i class="fas fa-arrow-circle-right"></i>
               </div>
            </div>

            <div class="box">
               <i class="fas fa-car"></i>
               <h3>Pick Up & Drop</h3>
               <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
               <div class="arr">
                  <i class="fas fa-arrow-circle-right"></i>
               </div>
            </div>

            <div class="box">
               <i class="fas fa-water"></i>
               <h3>Pick Up & Drop</h3>
               <p>parkn ipsum dolor sit amet, consectetur adiing elit sed do eiu</p>
               <div class="arr">
                  <i class="fas fa-arrow-circle-right"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <section class="room wrapper top" id="room">
      <div class="container">
         <div class="heading">
            <h5>OUR ROOMS</h5>
            <h2>Fascinating rooms & suites </h2>
         </div>

         <div class="mtop1">
            <div class="left grid2">
               <div class="box">
                  <i class="fas fa-desktop"></i>
                  <p>Free Cost</p>
                  <h4>No booking fee</h4>
               </div>

               <div class="box">
                  <i class="fas fa-dollar-sign"></i>
                  <p>Free Cost</p>
                  <h4>Best rate guarantee</h4>
               </div>

               <div class="box">
                  <i class="fab fa-resolving"></i>
                  <p>Free Cost</p>
                  <h4>Reservations 24/7</h4>
               </div>

               <div class="box">
                  <i class="fa-l fa-alarm-clock"></i>
                  <p>Free Cost</p>
                  <h4>High-speed Wi-Fi</h4>
               </div>

               <div class="box">
                  <i class="fas fa-mug-hot"></i>
                  <p>Free Cost</p>
                  <h4>Free breakfast</h4>
               </div>

               <div class="box">
                  <i class="fas fa-user-tie"></i>
                  <p>Free Cost</p>
                  <h4>One person free</h4>
               </div>
            </div>

            <div class="right">
               <img src="images/r.jpg" alt="">
            </div>
         </div>
      </div>
   </section>

   <div class="offer mtop" id="services">
      <div class="container">
         <div class="heading">
            <h5>EXCLUSIVE OFFERS </h5>
            <h3>You can get an exclusive offer </h3>
         </div>

         <div class="content grid2 mtop">
            <div class="box flex3">
               <div class="left">
                  <img src="images/o1.jpg" alt="">
               </div>
               <div class="right">
                  <h4>Deluxe Room</h4>
                  <div class="rate flex">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h5>From $50.6/night</h5>
                  <button class="flex1">
                     <span>Check Availability</span>
                     <i class="fas fa-arrow-circle-right"></i>
                  </button>
               </div>
            </div>

            <div class="box flex3">
               <div class="left">
                  <img src="images/o2.jpg" alt="">
               </div>
               <div class="right">
                  <h4>Deluxe Room</h4>
                  <div class="rate flex">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h5>From $50.6/night</h5>
                  <button class="flex1">
                     <span>Check Availability</span>
                     <i class="fas fa-arrow-circle-right"></i>
                  </button>
               </div>
            </div>

            <div class="box flex3">
               <div class="left">
                  <img src="images/o3.jpg" alt="">
               </div>
               <div class="right">
                  <h4>Deluxe Room</h4>
                  <div class="rate flex">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h5>From $50.6/night</h5>
                  <button class="flex1">
                     <span>Check Availability</span>
                     <i class="fas fa-arrow-circle-right"></i>
                  </button>
               </div>
            </div>

            <div class="box flex3">
               <div class="left">
                  <img src="images/o4.jpg" alt="">
               </div>
               <div class="right">
                  <h4>Deluxe Room</h4>
                  <div class="rate flex">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h5>From $50.6/night</h5>
                  <button class="flex1">
                     <span>Check Availability</span>
                     <i class="fas fa-arrow-circle-right"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <section class="area top">
      <div class="container">
         <div class="heading">
            <h5>RESTAURANT</h5>
            <h3>The area we cover under ecorik</h3>
         </div>

         <div class="content flex4 mtop">
            <div class="left">
               <img src="images/aera.jpg" alt="">
            </div>

            <div class="right">
               <ul>
                  <li>Restaurant </li>
                  <li>Swimming pool </li>
                  <li>Conference room</li>
                </ul>
      
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Duis
                  aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <button class="flex1">
                  <span>Check Availability</span>
                  <i class="fas fa-arrow-circle-right"></i>
                </button>
            </div>
         </div>
      </div>
   </section>

   <section class="customer top" id="testimonials">
      <div class="container">
         <div class="heading">
            <h5>TESTIMONIALS </h5>
            <h3>What customers say </h3>
         </div>

         <div class="owl-carousel owl-theme mtop">
            <div class="item">
               <div class="rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <h3>Excellent Swimming</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <div class="admin flex">
                  <div class="img">
                     <img src="images/c1.jpg" alt="">
                  </div>
                  <div class="text">
                     <h3>Ramindu Nimesh</h3>
                     <span>Manager</span>
                  </div>
               </div>
            </div>

            <div class="item">
               <div class="rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <h3>Excellent Swimming</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <div class="admin flex">
                  <div class="img">
                     <img src="images/c2.jpg" alt="">
                  </div>
                  <div class="text">
                     <h3>Ramindu Nimesh</h3>
                     <span>Manager</span>
                  </div>
               </div>
            </div>

            <div class="item">
               <div class="rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <h3>Excellent Swimming</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
               aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               <div class="admin flex">
                  <div class="img">
                     <img src="images/c3.jpg" alt="">
                  </div>
                  <div class="text">
                     <h3>Ramindu Nimesh</h3>
                     <span>Manager</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="blog top" id="blog">
      <div class="container">
         <div class="heading">
            <h5>OUR BLOG</h5>
            <h3>News & articles updates</h3>
         </div>

         <div class="content grid mtop">
            <div class="box">
               <div class="img">
                  <img src="images/b1.jpg" alt="">
               </div>

               <div class="text">
                  <div class="flex">
                    <i class="far fa-user"> <label>Admin</label> </i>
                    <i class="far fa-comments"> <label>Comment</label> </i>
                  </div>
                  <h3>Celebrating Decade Years Of Hotel In 2023</h3>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="#">Read More <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="box">
               <div class="img">
                  <img src="images/b2.jpg" alt="">
               </div>

               <div class="text">
                  <div class="flex">
                    <i class="far fa-user"> <label>Admin</label> </i>
                    <i class="far fa-comments"> <label>Comment</label> </i>
                  </div>
                  <h3>Celebrating Decade Years Of Hotel In 2023</h3>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="#">Read More <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="box">
               <div class="img">
                  <img src="images/b3.jpg" alt="">
               </div>

               <div class="text">
                  <div class="flex">
                    <i class="far fa-user"> <label>Admin</label> </i>
                    <i class="far fa-comments"> <label>Comment</label> </i>
                  </div>
                  <h3>Celebrating Decade Years Of Hotel In 2023</h3>
                  <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="#">Read More <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
         </div>
      </div>
   </section>

   <section class="map top">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1606.2067117314953!2d79.84156823398973!3d6.931180669090449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259251b57a431%3A0x8f44e226d6d20a7e!2sGaladari%20Hotel!5e0!3m2!1sen!2slk!4v1688464853870!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </section>

   <footer>
      <div class="container">
         <div class="news">
            <h2>Subscribe newsletter</h2>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="input">
               <input type="email" placeholder="Your Email address">
               <button>Send</button>
            </div>
         </div>

         <div class="info">
            <div class="left box">
               <div class="logo">
                  <h1>ROY<span>ALS</span></h1>
               </div>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                  Delectus voluptates sapiente, consectetur id quos reiciendis
                  omnis, ab, ex unde sequi earum dignissimos. Sit architecto 
                  blanditiis impedit dolores harum quam. 
               </p>
   
               <div class="social">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-youtube"></i>
               </div>
            </div>
   
            <div class="leftCenter box">
               <h2>Quick Links</h2>
               <ul>
                  <li><i class="fas fa-angle-double-right"></i>Big Data</li>
                  <li><i class="fas fa-angle-double-right"></i>Wellness</li>
                  <li><i class="fas fa-angle-double-right"></i>Spa Gallery</li>
                  <li><i class="fas fa-angle-double-right"></i>Reservation</li>
                  <li><i class="fas fa-angle-double-right"></i>FAQ</li>
                  <li><i class="fas fa-angle-double-right"></i>Contact</li>
               </ul>
            </div>
   
            <div class="rightCenter box">
               <h2>Services</h2>
               <ul>
                  <li><i class="fas fa-angle-double-right"></i>Restaurant</li>
                  <li><i class="fas fa-angle-double-right"></i>Swimming Pool</li>
                  <li><i class="fas fa-angle-double-right"></i>Wellness & Spa</li>
                  <li><i class="fas fa-angle-double-right"></i>Conference Room</li>
                  <li><i class="fas fa-angle-double-right"></i>Events</li>
                  <li><i class="fas fa-angle-double-right"></i>Adult Room</li>
               </ul>
            </div>
   
            <div class="right box">
               <h2>Contact Us</h2>
               <div class="content">
                  <div class="place">
                      <span class="fas fa-map-marker-alt"></span>
                      <span class="text">
                          No.122/A GalleFace, Colombo
                      </span>
                  </div>
                  <div class="phone">
                      <span class="fas fa-phone-alt"></span>
                      <span class="text">
                          +94773322443
                      </span>
                  </div>
                  <div class="email">
                      <span class="fas fa-envelope"></span>
                      <span class="text">
                          info@royals.com
                      </span>
                  </div>
               </div>
               <div class="top"> 
                  <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
              </div>
            </div>
         </div>
      </div>

      <div class="bottom">
         <div>
             <span class="credit">
                 Designed & Developed By
                 <a href="">Ramindu Nimesh</a>
                 |
             </span>
             <span>
                 &copy;
             </span>
             <span>
                 2023 All Right Reserved
             </span>
         </div>
     </div>

   </footer>

   <script src="./main.js"></script>
</body>
</html>