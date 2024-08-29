<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>FITNESSXIA</title>
</head>

<body>
    <div class="go-top">
        <a id="button"></a>
    </div>
    <nav id="">
        <div class="navbar flex">
            <div class="flex logo">
                <img src="logo.jpg" alt="logo">
                <h1>FITNESSXIA</h1>
            </div>
            <div class="lists flex">
                <li><a href="#home">Home</a></li>
                <li><a href="#about-Us">About Us</a></li>
                <li><a href="#program">Program</a></li>
                <li><a href="#membership" >Membership</a></li>
                <li><a href="#feedback">Testimonials</a></li>
                 <button class="btn" onclick="window.location.href='sign-in.php'">Sign Up</button>
            </div>
        </div>
    </nav>

    <main>
        <div class="flex size">
            <video id="videobcg" preload="auto" autoplay="true" loop="loop"     muted="muted" volume="0">
                <source src="Pin_on_Pins_by_you(480P).mp4" type="video/mp4">
                <source src="" type="video/webm">
                    Sorry, your browser does not support HTML5 video.
                </video>

            <div class="main-containt">
                <div>
                    <h1>GET HEALTHY BODY WITH THE PERFECT EXERCISE</h1>
                    <p>We are always there to help you to make a healthy body and mind through the power of fitness</p>
                </div>
                <div>
                    <button class="btn1" onclick="window.location.href='sign-in.php'">Get Started</button>
                    <button class="btn1" onclick="get_started()" >Watch Video</button>
                </div>

                <div class="flex members">
                    <div>
                        <h1>105+</h1>
                        <h4>Expart Trainers</h4>
                    </div>
                    <div class="line"></div>
                    <div>
                        <h1>970+</h1>
                        <h4>Members Joined</h4>
                    </div>
                    <div class="line"></div>
                    <div>
                        <h1>135+</h1>
                        <h4>Fitness Program</h4>
                    </div>
                </div>
            </div>
            <div class="fit-img">
                <img src="main-img-removebg-preview.png" alt="">
            </div>
        </div>
    </main>

    <div class="submain flex background2" id="about-Us">
        <div class="size flex">
            <div>
                <h1>970K+ More</h1>
                <h3>Trusted Compaines Partner</h3>
            </div>
            <div class="flex social">
                <h1>Videoask</h1>
                <h1>Hubspot</h1>
                <h1>Mapbox</h1>
            </div>
        </div>
    </div>

    <section class="flex about-page background1">
        <div class="size flex">
            <div class="sec-img">
                <img src="https://i5.walmartimages.com/asr/1d9364ea-5807-46e8-8f19-86cc44619d89.aa9dbc68a2ff53c5cc0e2a865f721f4d.jpeg" alt="">
            </div>
            <div class="about-content">
                <div>
                    <h1>Get Ready To Reach Your Fitness Goals</h1>
                </div>
                <div>
                    <p>We are a gym that committed to helping people to reach their fitness goals. We after a verity in
                        programs and services to fit your needs, wether you are exprescied</p>
                    <p>We believe that every one should have to access to the benefits of exercise make it happens</p>
                </div>
                <div>
                    <button class="btn1" onclick="window.location.href='sign-in.php'">Free Trial Today</button>
                </div>
            </div>
        </div>
    </section>

    <section class="programs background2 flex" id="program">
        <div class="size">
            <div class="flex sub size">
                <div class="first">
                    <h1>The Best Programs We Offered You</h1>
                </div>
                <div class="second">
                    <p>We offer a wide range of compresive fitness programs designed to cater to individuals of all
                        fitness levels. Our aim to help your achive specific goals and maximize result </p>
                </div>
            </div>

            <div class="cards flex">
                <div class="card">
                    <img src="weightlifter.png" alt="">
                    <h4>Strength Training</h4>
                    <p>Our trainers will design that a progressive workout plans that proper achieve gains strength.</p>
                    <button>Learn More -></button>
                </div>
                <div class="card">
                    <img src="lotus.png" alt="">
                    <h4>Basic Yoga</h4>
                    <p>This program combines yoga with cardio & strength training to help lose weight & fitness</p>
                    <button>Learn More -></button>
                </div>
                <div class="card">
                    <img src="muscle.png" alt="">
                    <h4>Body Building</h4>
                    <p>For those looking to increase strength build learn muscle, out strength & muscle.</p>
                    <button>Learn More -></button>
                </div>
                <div class="card">
                    <img src="treadmill.png" alt="">
                    <h4>Weight Loss</h4>
                    <p>Our weight loss programs are designed to help you make sustainable lifestyle changes.</p>
                    <button>Learn More -></button>
                </div>
            </div>
        </div>
    </section>

    <section class="services  background1 flex">
        <div class="size flex">
            <div class="service-content">
                <div>
                    <h2>Why Should People Choose Fitnessxia Services</h2>
                </div>
                <div>
                    <h4><span>👉</span>Personal Training</h4>
                    <p>Our personal trainers can help you create a personalized fitness plan and track your progress.
                    </p>
                </div>
                <div>
                    <h4><span>👉</span>Expert Trainer</h4>
                    <p>Our gym is proud to offer a team of highlyskilled and certified trainer help achive your helth &
                        fitness goals.</p>
                </div>
                <div>
                    <h4><span>👉</span>Flexible Time</h4>
                    <p>There are many fitness classes that are affered during off-peak hours such as early morning or
                        late evening.</p>
                </div>
                <div>
                    <button class="btn1">Join Today</button>
                </div>
            </div>
            <div class="sec3-img">
                    <img src="Morning Motivation.jpg" alt="">
            </div>
        </div>
    </section>

    <section class="membership background2 flex" id="membership">
        <div class="size">
            <div class="plan">
                <H1>Choose The Best Plans</H1>
                <p>Choose a plan that's right for growing team. Simple pricing & no hidden charges</p>
            </div>
            <div class="plans">
                <div class="plan-card">
                    <div class="flex title">
                        <h4>DISCOVER</h4>
                    </div>
                    <div class="flex price">
                        <h2>$99 </h2>
                        <h5>/per Month</h5>
                    </div>
                    <div>
                        <ul style="list-style-type: square">
                            <li>5 classes per month</li>
                            <li>4 group class monthly</li>
                            <li>Online class access</li>
                            <li>E-book fitness guide</li>
                        </ul>
                    </div>
                    <div>
                        <button class="plan-btn">Choose Plan</button>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="flex title">
                        <h4>ENTERPRISE</h4>
                    </div>
                    <div class="flex price">
                        <h2>$299 </h2>
                        <h5>/per Month</h5>
                    </div>
                    <div>
                        <ul style="list-style-type: square">
                            <li>10 classes per month</li>
                            <li>8 group class monthly</li>
                            <li>Online class access</li>
                            <li>E-book fitness guide</li>
                            <li>7 Extra fitness guide</li>
                        </ul>
                    </div>
                    <div>
                        <button>Choose Plan</button>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="flex title">
                        <h4>PROFESSIONAL</h4>
                    </div>
                    <div class="flex price">
                        <h2>$199 </h2>
                        <h5>/per Month</h5>
                    </div>
                    <div>
                        <ul style="list-style-type: square">
                            <li>7 classes per month</li>
                            <li>6 group class monthly</li>
                            <li>Online class access</li>
                            <li>E-book fitness guide</li>
                        </ul>
                    </div>
                    <div>
                        <button>Choose Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback background1 flex" id="feedback">
        <div class="size">
            <div class="feed-content">
                <div>
                    <h1>What Our Happy Clients Say About Us</h1>
                </div>
            </div>

            <div>
                <section class="container">
                    <div class="sub-card">
                        <div class="image">
                            <img src="https://png.pngtree.com/thumb_back/fh260/background/20230527/pngtree-boy-wearing-sunglasses-behind-a-dark-background-image_2675368.jpg" alt="" />
                        </div>
                        <h2>Hanny</h2>
                        <p>I've been a member of Fitness Within for about & months now and I absolutely love it! The
                            trainers are so motivate and they really help to reach fitness goals.</p>
                    </div>
                    <div class="sub-card">
                        <div class="image">
                            <!-- <img src="images/img2.jpg" alt="" /> -->
                        </div>
                        <h2>Someone Name</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
                    </div>
                    <div class="sub-card">
                        <div class="image">
                            <!-- <img src="images/img3.jpg" alt="" /> -->
                        </div>
                        <h2>Someone Name</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
                    </div>
                    <div class="sub-card">
                        <div class="image">
                            <!-- <img src="images/img4.jpg" alt="" /> -->
                        </div>
                        <h2>Someone Name</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="sub-footer background2 flex">
        <div class="flex">
            <div class="margin">
                <h4>Company</h4>
                <h6>About Us</h6>
                <h6>Why Us</h6>
                <h6>Security</h6>
                <h6>Partnership</h6>
            </div>
            <div class="margin">
                <h4>Categories</h4>
                <h6>Basic Yoga</h6>
                <h6>Strength Training</h6>
                <h6>Body Building</h6>
                <h6>Weight Lost</h6>
            </div>
            <div class="margin">
                <h4>Help</h4>
                <h6>Account</h6>
                <h6>Support Center</h6>
                <h6>Privacy Policy</h6>
                <h6>Terms & Conditions</h6>
            </div>
            <div class="contact">
                <h4>Contact Us</h4>
                <div class="flex">
                    <img src="phone-call.png" alt="number">
                    <h6>+91 1547926525</h6>
                </div>
                <div class="flex">
                    <img src="gmail.png" alt="email">
                    <h6>fitnessxia@emial.com</h6>
                </div>
                <div class="flex">
                    <img src="map.png" alt="email">
                    <h6>2464 Royal Ln. Mesa, New Jersey 45466</h6>
                </div>
            </div>
            <div>
                <h4>Subscribe Our Newsletter</h4>
                <input type="search" placeholder="Enter your email id">
                <h6>Never miss on update & news to your email</h6>
            </div>
        </div>
    </section>
    <hr>
    <footer class="flex">
        <div class="size footer flex">
            <div class="flex logo">
                <img src="logo.jpg" alt="">
                <h1>FITNESSXIA</h1>
            </div>
            <div>@2023 DesignAxen, All Copyrights reservied.</div>
            <div class="social-media">
                <img onclick="window.location.href='facebook.com'" src="facebook (1).png" alt="">
                <img onclick="window.location.href='instagram.com'" src="instagram (1).png" alt="">
                <img onclick="window.location.href='X.com'" src="twitter (1).png" alt="">
                <img onclick="window.location.href='linkedin.com'" src="linkedin.png" alt="">
            </div>
        </div>
    </footer>

    <script src="logic.js"></script>
</body>

</html>