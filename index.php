<?php include('pages/header.php')?>
<?php include('pages/team-testi.php')?>
<!-- Jumbotron -->
<section class="jumbotron" shadow-lg>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <h1 class="ml10 display-6 text-white">
                    <span class="text-wrapper">
                        <span class="letters">WAYS TO STAY FOCUSED.</span>
                    </span>
                </h1>
                <p class="fs-6 text-white mb-2 mt-5">Let us help ease, speed up, and beautify your work with our
                    services.</p>
                <a class="btn bg-white btn-lg rounded-0 fs-6 p-3 mt-5" href="#projects" role="button">Browse Our
                    Project <i class="fas fa-arrow-right ms-3"></i></a>
            </div>
            <div class="col-md-5">
                <img src="./img/—Pngtree—business discussion and brainstorming concept_5293782.png"
                    style="width: fit-content;" class="img-fluid" />
            </div>
        </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="white" fill-opacity="1"
            d="M0,288L60,261.3C120,235,240,181,360,144C480,107,600,85,720,112C840,139,960,213,1080,240C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
<!-- End Jumbotron -->

<!-- About Us -->
<section id="About" style="background-image: url(./img/bg\ foccu1.png); background-size: auto;">
    <div class="container">
        <!-- description -->
        <div class="row animejs">
            <div class="col-md-7">
                <p class="fw-bold fs-2">About Us</p>
                <p class="fw-bolder fs-5 text-secondary"></p>
                <p class="text-secondary">
                    we are a freelance agency engaged in technology and information founded by a group of young
                    people from
                    various regions who have a vision to help the development of the digitalization era in
                    Indonesia. In
                    addition, we have several service products that you can use to help and simplify your work, such
                    as in the
                    field of web development and graphic design.
                </p>
            </div>
            <div class="col-md-5">
                <img src="./img/domenico-loia-EhTcC9sYXsw-unsplash.jpg" class="img-fluid px-3" alt="" srcset="" />
            </div>
        </div>
        <!-- end description -->

        <!-- kelebihan -->
        <div class="text-center mt-5">
            <p class="fs-2 fw-bold">What we offer</p>
            <p class="fw-bolder text-secondary">Some of our services that you can use</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 text-center">
                <img src="./img/icons8-website-64.png" alt="">
                <p class="fw-bold fs-5 mt-3">WEB DEVELOPMENT</p>
                <p class="text-secondary mt-3 px-5">We can help you to create a website that suits your needs and we
                    can also
                    improve your website services for the better.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="./img/icons8-design-64.png" alt="">
                <p class="fw-bold fs-5 mt-3">GRAPHIC DESIGN</p>
                <p class="text-secondary mt-3 px-5">We provide digital design product services to beautify what you
                    want.</p>
            </div>
        </div>
        <!-- end kelebihan -->

        <!-- start team -->
        <div class="text-center mt-5 pt-5 mb-5">
            <p class="fs-2 fw-bold mb-4">Our Team</p>
        </div>
        <div class="row mt-3 justify-content-center">
          <?php foreach ($team as $row) :?>
             <div class="profile justify-content-center">
                <img src="./img/profil/<?=$row['Foto']?>" alt="<?=$row['Nama']?>"
                    class="profile-image mx-auto d-block rounded-circle" srcset="" />
                <div class="text-center fw-bolder"><a href="<?=$row['Linkedin']?>"
                        class="me-0 p-0 pt-2"><?=$row['Nama']?></a></div>
                <div class="small text-center text-muted"><?=$row['Posisi']?></div>
            </div>
          <?php endforeach;?>
        </div>
        <!-- end team -->
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#29a0f5" fill-opacity="1"
            d="M0,128L60,149.3C120,171,240,213,360,202.7C480,192,600,128,720,101.3C840,75,960,85,1080,101.3C1200,117,1320,139,1380,149.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
<!-- End About Us -->

<!-- Our Projects-->
<section id="projects" class="p-0" style="background-color: #29a0f5">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="text-white fw-bold fs-2">Our Projects</h2>
                <p class="text-white">Some of the projects we have completed.</p>
            </div>
        </div>

        <div class="row justify-content-center fs-5 text-center" id="graphicdesign">
            <div class="col-md-4  mb-5 rounded-3">
                <div class="card pb-4 shadow  rounded fade-in">
                    <div class="card-body">
                        <i class="fas fa-palette fs-80 mt-3 text-white bg-primary p-3 rounded-circle"></i>
                        <h5 class="fs-5 fw-bolder mt-5">Graphic Design</h5>
                        <p class="fs-6 small px-5 text-secondary">Some of the beautiful designs that we have created
                            for client
                            satisfaction.</p>
                        <a href="projects.php?c=Graphic Design" class="btn btn-primary rounded-0 px-4">Portfolio<i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4  mb-5 rounded-3">
                <div class="card pb-4 shadow  rounded fade-in">
                    <div class="card-body">
                        <i class="fas fa-laptop-code fs-80 mt-3 text-primary p-3 rounded-circle"></i>
                        <h5 class="fs-5 fw-bolder mt-5">Web Development</h5>
                        <p class="fs-6 small px-5 text-secondary">Some web development projects that we have
                            completed for the
                            needs and desires of the clients.</p>
                        <a href="projects.php?c=Web Development" class="btn btn-primary rounded-0 px-4">Portfolio<i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="white" fill-opacity="1"
            d="M0,288L60,261.3C120,235,240,181,360,144C480,107,600,85,720,112C840,139,960,213,1080,240C1200,267,1320,245,1380,234.7L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
<!-- End Our Projects -->

<!-- Testimony -->
<section id="testimony" style="background-image: url(./img/bg\ foccu2.png);" class="pt-3">
    <div class="text-center mt-5 pt-5 mb-5">
        <p class="fs-2 fw-bold">What People Are Saying</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <?php foreach($testimony as $row):?>
                <div class="carousel-item <?=$row['Status']?>">
                    <div class="card text-center p-5 testi">
                        <img src="./img/testi/<?=$row['Foto']?>" class="testi-photo m-auto" />
                        <div class="card-body">
                            <p class="card-title fs-4 text-white"><?=$row['Nama']?></p>
                            <p class="card-text pb-5 text-white small">
                               <?=$row['Isi']?>
                            </p>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="" aria-hidden="true"><i class="fas fa-chevron-left text-dark fs-3"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="" aria-hidden="true"><i class="fas fa-chevron-right text-dark fs-3"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#29a0f5" fill-opacity="1"
            d="M0,128L48,149.3C96,171,192,213,288,218.7C384,224,480,192,576,154.7C672,117,768,75,864,58.7C960,43,1056,53,1152,80C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>

<!-- End Testimony -->

<!-- Contacts -->
<section id="Contacts" style="background-color: #29a0f5">
    <div class="container">
        <div class="text-center ">
            <p class="fs-2 p-0 fw-bold text-white">Contact Us</p>
            <p class="text-white">If you have questions and suggestions for us.</p>
        </div>
    </div>

    <div class="content w-100">
        <div class="contact">
            <div class="other">
                <div class="info">
                    <h2 class="text-info">STAY IN TOUCH</h2>
                    <h3>Email</h3>
                    <div class="svg-wrap"> <a href="mailto:foccuid@gmail.com"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 485.211 485.211">
                                <path
                                    d="M485.21 363.906c0 10.637-2.99 20.498-7.784 29.174l-153.2-171.41 151.54-132.584c5.894 9.355 9.445 20.344 9.445 32.22v242.6zM242.607 252.793l210.863-184.5c-8.654-4.737-18.398-7.642-28.91-7.642H60.65c-10.523 0-20.27 2.906-28.888 7.643l210.844 184.5zm58.787-11.162l-48.81 42.735c-2.854 2.487-6.41 3.73-9.977 3.73-3.57 0-7.125-1.243-9.98-3.73l-48.82-42.736-155.14 173.6c9.3 5.834 20.198 9.33 31.984 9.33h363.91c11.785 0 22.688-3.496 31.984-9.33l-155.15-173.6zM9.448 89.086C3.554 98.44 0 109.43 0 121.305v242.602c0 10.637 2.978 20.498 7.79 29.174L160.97 221.64 9.448 89.086z" />
                            </svg>Foccuid@gmail.com</a> </div>
                    <h3>Social Media</h3>
                    <div class="svg-wrap"> <a href="https://www.instagram.com/foccu.id/" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M373.66 0H138.34C62.06 0 0 62.06 0 138.34v235.32C0 449.94 62.06 512 138.34 512h235.32C449.94 512 512 449.94 512 373.66V138.34C512 62.06 449.94 0 373.66 0zm96.976 373.66c0 53.472-43.503 96.976-96.977 96.976H138.34c-53.472 0-96.976-43.503-96.976-96.977V138.34c0-53.472 43.503-96.976 96.977-96.976h235.32c53.472 0 96.976 43.503 96.976 96.977v235.32z" />
                                <path
                                    d="M370.586 238.14c-3.64-24.546-14.84-46.794-32.386-64.34-17.547-17.547-39.795-28.747-64.34-32.386-11.177-1.657-22.508-1.657-33.683 0-30.336 4.5-57.103 20.54-75.372 45.172-18.27 24.63-25.854 54.903-21.355 85.237 4.5 30.335 20.54 57.102 45.172 75.372 19.996 14.83 43.706 22.62 68.153 22.62 5.667 0 11.375-.42 17.083-1.266 30.336-4.5 57.103-20.542 75.372-45.173 18.27-24.63 25.855-54.9 21.356-85.236zM267.79 327.633c-19.404 2.882-38.77-1.973-54.526-13.66-15.757-11.687-26.02-28.81-28.896-48.216-2.878-19.405 1.973-38.77 13.66-54.527 11.688-15.758 28.81-26.02 48.217-28.898 3.574-.53 7.173-.795 10.772-.795s7.2.265 10.773.796c32.23 4.78 57.098 29.645 61.878 61.877 5.94 40.058-21.817 77.482-61.877 83.422zM400.05 111.95c-3.853-3.85-9.184-6.057-14.626-6.057S374.65 108.1 370.8 111.95c-3.852 3.853-6.06 9.175-6.06 14.626 0 5.45 2.208 10.773 6.06 14.625 3.85 3.852 9.182 6.06 14.624 6.06s10.773-2.207 14.625-6.06c3.85-3.85 6.057-9.182 6.057-14.624 0-5.443-2.207-10.774-6.058-14.625z" />
                            </svg></a>
                        <a href="http://facebook.com/connorgauntdesign" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" width="60.734" height="60.733"
                                viewBox="0 0 60.734 60.733">
                                <path
                                    d="M57.378 0H3.352C1.502 0 0 1.5 0 3.354V57.38c0 1.852 1.502 3.353 3.352 3.353h29.086v-23.52h-7.914v-9.166h7.914v-6.76c0-7.843 4.79-12.116 11.787-12.116 3.355 0 6.232.252 7.07.36v8.2h-4.853c-3.805 0-4.54 1.81-4.54 4.463v5.85h9.08l-1.188 9.167h-7.892v23.52h15.475c1.852 0 3.355-1.503 3.355-3.35V3.35C60.732 1.5 59.23 0 57.378 0z" />
                            </svg></a>
                        <a href="https://www.linkedin.com/in/foccu-indonesia/" target="_blank"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 478.165 478.165">
                                <path
                                    d="M442.78 0H35.424C15.86 0 0 15.4 0 34.288v409.688c0 18.828 15.86 34.19 35.424 34.19H442.76c19.586 0 35.405-15.362 35.405-34.19V34.288C478.165 15.4 462.345 0 442.78 0zM145.003 400.244H72.78V184.412h72.224v215.832zm-36.16-245.28h-.48c-24.246 0-39.926-16.695-39.926-37.336 0-21.22 16.158-37.337 40.863-37.337 24.725 0 39.927 16.12 40.385 37.338.02 20.64-15.64 37.337-40.843 37.337zm296.54 245.28h-72.082V284.807c0-29.01-10.598-48.952-36.738-48.952-20.063 0-31.798 13.428-36.958 26.458-1.893 4.423-2.39 10.898-2.39 17.393v120.537H184.95s.916-195.63 0-215.832h72.263v30.604c9.484-14.684 26.658-35.703 65.01-35.703 47.577 0 83.16 30.863 83.16 97.168v123.766zm-148.61-184.532c.06-.22.16-.438.42-.677v.677h-.42z" />
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="form ">
                <h2 class="fs-3 mb-4">SEND A MESSAGE</h2>
                <form action="pages/sendemail.php" method="post">
                    <div class="flex-rev">
                        <input type="text" placeholder="Your Name" name="name" id="name" required />
                        <label for="name">Full Name</label>
                    </div>
                    <div class="flex-rev">
                        <input type="email" placeholder="e.g Foccuid@gmail.com" name="email" id="email" required />
                        <label for="email">Your Email</label>
                    </div>
                    <div class="flex-rev">
                        <textarea placeholder="I have an idea for a project...."  name="message" id="message" required /></textarea>
                        <label for="message">Email Message</label>
                    </div>
                    <!-- <a > Send</a> -->
                    <input type="submit" value="Send" name="sendemail" class="btn bg-primary round-0 text-white px-4">
                </form>
            </div>
        </div>
</section>
<!-- End Contacts -->

<?php include('pages/footer.php')?>