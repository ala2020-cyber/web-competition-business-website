<?php
  include_once 'headerindex.php'
?>
      <video
        class="video_demo"
        src="./videos/fablab_demo.mp4"
        muted
        autoplay
        loop
      ></video>
      <div class="head_content wrapper_center">
        <div class="discription">
          <h1 class="slide-left">FabLab Solidaire</h1>
          <p class="slide-left">A place where dreams come true.</p>
          <div class="links slide-left">
            <a href="#about-us" class="btn btn1">Learn More</a>
            <a href="#contact" class="btn btn2">Contact</a>
          </div>
        </div>
      </div>
    </div>

    <main>
      <!-- about section -->
      <div id="about-us">
        <h1 class="title-sections">About Us</h1>
        <div class="about-content wrapper_center">
          <div class="about">
            <a href="#get_know">
              <img src="./images/BusinessPeople.jpg" alt="" />
              <h3>Get to know us</h3>
              <p>
                we are a company that can help you create your startup, learn
                new concepts about VR and 3D printing and more.
              </p>
            </a>
          </div>

          <div class="about">
            <a href="#Services">
              <img class="service-image" src="./images/services.jpg" alt="" />
              <h3>SERVICES</h3>
              <p>
                Our dear client, we can help you to develop new skills, we can
                share with you a place to work on your ideas.
              </p>
            </a>
          </div>

          <div class="about">
            <a href="#tutorials">
              <img class="tuto-image" src="./images/projet.PNG" alt="" />
              <h3>Tutorials</h3>
              <p>
                Graphics design, development, VR, 3D priniting, co-working space
                and more.
              </p>
            </a>
          </div>
        </div>
      </div>

      <div class="bg1"></div>

      <!-- get to know us section  -->
      <div id="get_know" class="wrapper_center">
        <h1 class="title-sections">Get To Know Us</h1>
        <div class="get_know-content wrapper_center">
          <i class="fa-solid fa-arrow-left-long"></i>
          <img
            class="knowus-image"
            src="./images/knowus1.jpg"
            alt="fablab_formation"
          />
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
      <!-- partner section  -->
      <div id="partners ">
        <h1 class="title-sections">Our Partners</h1>
        <div class="partners-content wrapper_center">
          <div class="partner">
            <img class="techninventor-image" src="./images/aero.png" alt="" />
          </div>
          <div class="partner">
            <img src="./images/Orange-logo.jpg" alt="" />
          </div>
          <div class="partner">
            <img src="./images/microissatso.png" alt="" />
          </div>
          <div class="partner">
            <img src="./images/microessth.png" alt="" />
          </div>
        </div>
      </div>
      <!-- services section  -->
      <div id="Services">
        <h1 class="title-sections">Our Services</h1>
        <div class="Services-content wrapper_center">
          <div class="Service">
            <img class="space-image" src="./images/knowus5.jpg" alt="" />
            <h3>Space</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Perferendis, necessitatibus.
            </p>
          </div>
          <div class="Service">
            <img src="./images/mat.jpg" alt="" />
            <h3>Well-equiped material</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Architecto, quod?
            </p>
          </div>
          <div class="Service">
            <img class="Recycling-image" src="./images/knowus4.jpg" alt="" />
            <h3>Recycling</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Architecto, quod?
            </p>
          </div>
        </div>
      </div>

      <!-- tutorials section  -->
      <div id="tutorials">
        <h1 class="title-sections">Tutorials</h1>
        <div class="tutorials-content wrapper_center">
          <div class="tuto solid">
              <img src="./images/form_solid.jpg" alt="">
              <h3>Solid Works</h3>
          </div>
          <div class="tuto concep">
            <img src="./images/form.jpg" alt="">
            <h3>Conception of electric circuit</h3>
          </div>
        </div>
      </div>

      <div class="bg2"></div>

      <!-- contact section -->
      <div id="contact">
        <h1 class="title-sections">Contact</h1>
        <div class="contact-content wrapper_center">
          <div class="contact-details">
            <ul>
              <li>
                <a href="tel:+216 54 247 867">
                  <i class="fa-solid fa-phone"></i>
                  <span class="icon-detail">+216 54 247 867</span>
                </a>
              </li>
              <li>
                <a href="mailto:contact@re-imagine-lab.com">
                  <i class="fa-solid fa-envelope"></i>
                  <span class="icon-detail">contact@re-imagine-lab.com</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="contact-map">
            <iframe
              classs="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.325951623773!2d10.58918741511536!3d35.81647768016297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302756898de71c9%3A0xfd71ac4a45e7bd74!2sNOVATION%20MECHATRONIC%20CITY!5e0!3m2!1sfr!2stn!4v1648990466551!5m2!1sfr!2stn"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </main>
    <?php
  include_once 'footer.php'
?>