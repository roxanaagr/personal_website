<?php 

include("functions.php");

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Roxana Agrigoroaie - Data Analyst</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="assets/plugins/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-12.css">
</head> 

<body>
    
    <header class="header">
        <div class="top-bar container-fluid">
            <div class="actions">
                <a class="btn btn-light <?=$lang=='en'?'active':''?> lang-switch" href="./">EN</a>
                <a class="btn btn-light <?=$lang=='fr'?'active':''?> lang-switch" href="./?lang=fr">FR</a>
                <a class="btn d-none d-md-inline-block" href="mailto:roxana.agrigoroaie@gmail.com"><i class="fas fa-paper-plane" aria-hidden="true"></i> <?=$l['hire_me']?></a>
                <a class="btn" href="assets/files/cv_en.pdf"><i class="fas fa-download" aria-hidden="true"></i> <?=$l['resume']?></a>
            </div><!--//actions-->
            <ul class="social list-inline">
                <li class="list-inline-item"><a href="https://www.linkedin.com/in/roxana-agrigoroaie-07058b176/" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="https://github.com/roxanaagr" target="_blank"><i class="fab fa-github-alt" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="https://bitbucket.org/roxanaagr/" target="_blank"><i class="fab fa-bitbucket" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="https://www.researchgate.net/profile/Roxana-Agrigoroaie" target="_blank"><i class="fab fa-researchgate" aria-hidden="true"></i></a></li>
            </ul><!--//social-->
        </div><!--//top-bar-->
        
        <div class="intro">
            <div class="container text-center">
                <img class="img img-thumbnail profile-image" src="assets/images/profile-image.jpg" alt="Roxana Agrigoroaie">
                <h1 class="name">Roxana Agrigoroaie</h1>
                <div class="title">Data Analyst</div>
                <div class="profile">
                    <p> <?=$l['intro']?> </p>
                </div><!--//profile-->
            </div><!--//container-->
        </div><!--//intro-->
        
        <div class="contact-info">
            <div class="container text-center">
                <ul class="list-inline">
                    <li class="email list-inline-item"><i class="fas fa-envelope mr-2"></i><a href="mailto:roxana.agrigoroaie@gmail.com">roxana.agrigoroaie@gmail.com</a></li>
                    <li class="email list-inline-item"><i class="fas fa-envelope mr-2"></i><a href="mailto:roxana@agrigoroaie.com">roxana@agrigoroaie.com</a></li>
                    <li class="list-inline-item"><i class="fas fa-mobile-alt mr-2"></i><a href="#">+33 751547399</a></li>
                </ul>
            </div><!--//container-->
        </div><!--//contact-info-->
        
        <div id="page-nav-space-holder" class="page-nav-space-holder d-none d-md-block">
            <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
                <div class="container">
                    <ul id="page-nav" class="nav page-nav list-inline">
                        <li class="nav-item"><a class="scrollto nav-link" href="#experiences-section"><?=$l['menu_experience']?></a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#education-section"><?=$l['menu_education']?></a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#skills-section"><?=$l['menu_skills']?></a></li>
                        <!-- <li class="nav-item"><a class="scrollto nav-link" href="#testimonials-section">Testimonials</a></li> -->
                        <li class="nav-item"><a class="scrollto nav-link" href="#portfolio-section"><?=$l['menu_portfolio']?></a></li>
                        <li class="nav-item"><a class="scrollto nav-link" href="#contact-section"><?=$l['menu_contact']?></a></li>
                    </ul><!--//page-nav-->
                </div>
            </div><!--//page-nav-wrapper-->
        </div>
        
    </header><!--//header-->
    
    <div class="wrapper container">
        <section id="experiences-section" class="experiences-section section">
            <h2 class="section-title"><?=$l['menu_experience_work']?></h2>
            <div class="timeline">

                <div class="item">
                    <div class="work-place">
                        <h3 class="place"><?=$l['freelance']?></h3>
                        <div class="location"><i class="fas fa-map-marker-alt mr-1"></i>Ile-de-France</div>
                    </div>
                    <div class="job-meta">
                        <div class="title">Data Analyst</div>
                        <div class="time">2022 - Present</div>
                    </div><!--//job-meta-->
                    <div class="job-desc">
                        <p><?=$l['freelance_def']?></p> 
                    </div><!--//job-desc-->
                </div><!--//item-->

                <div class="item">
                    <div class="work-place">
                        <h3 class="place">Ensta-ParisTech</h3>
                        <div class="location"><i class="fas fa-map-marker-alt mr-1"></i>Palaiseau, France</div>
                    </div>
                    <div class="job-meta">
                        <div class="title"><?=$l['research_engineer']?></div>
                        <div class="time">09/2018 - 06/2019</div>
                    </div><!--//job-meta-->
                    <div class="job-desc"><?=$l['ensta_desc']?>
                        
                    </div><!--//job-desc-->
                </div><!--//item-->
                
                <div class="item">
                    <div class="work-place">
                        <h3 class="place">ARMINES/Ensta-ParisTech</h3>
                        <div class="location"><i class="fas fa-map-marker-alt mr-1"></i>Palaiseau, France</div>
                    </div>
                    <div class="job-meta">
                        <div class="title"><?=$l['research_engineer']?></div>
                        <div class="time">09/2015 - 08/2018</div>
                    </div><!--//job-meta-->
                    <div class="job-desc">
                        <?=$l['armines_desc']?>
                        
                    </div><!--//job-desc-->
                </div><!--//item-->
                
                                
            </div><!--//timeline-->
            
        </section><!--//section-->
        
        <section id="education-section" class="education-section section">
            <h2 class="section-title"><?=$l['menu_education']?></h2>
            <div class="row">
                <div class="item col-12 col-md-6">
                    <div class="item-inner">
                        <h3 class="degree">Data Analyst</h3>
                        <div class="education-body">
                            OpenClassrooms
                        </div><!--//education-body-->
                        <div class="time">06/2021 - 04/2022</div>
                        <div class="desc"> <?=$l['education_dataanalyst_desc']?>
                            
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-12 col-md-6">
                    <div class="item-inner">
                        <h3 class="degree"><?=$l['phd']?></h3>
                        <div class="education-body">
                            Ensta-Paris
                        </div><!--//education-body-->
                        <div class="time">09/2015 - 06/2019</div>
                        <div class="desc">
                            <?=$l['education_phd_desc']?>
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->
                
            </div><!--//row-->
        </section><!--//section-->
        
        
        <section id="skills-section" class="skills-section section text-center">
            <h2 class="section-title"><?=$l['prof_skills']?></h2>
            <div class="top-skills">
                <h3 class="subtitle"><?=$l['top_skills']?></h3>
                <div class="row">
                    <div class="item col-12 col-md-4">
                        <div class="item-inner">
                            <div class="chart-easy-pie text-center">
                                <div class="chart-theme-1 chart" data-percent="75"><span>75</span>%</div>
                            </div>
                            <h4 class="skill-name">R</h4>
                            <div class="level"><?=$l['advanced_skill']?></div>
                            <div class="desc">
                               <?=$l['r_skill']?> 
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-12 col-md-4">
                        <div class="item-inner">
                            <div class="chart-easy-pie text-center">
                                <div class="chart-theme-1 chart" data-percent="70"><span>70</span>%</div>
                            </div>
                            <h4 class="skill-name">Python</h4>
                            <div class="level"><?=$l['advanced_skill']?></div>
                            <div class="desc">
                                <?=$l['python_skill']?> 
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-12 col-md-4">
                        <div class="item-inner">
                            <div class="chart-easy-pie text-center">
                                <div class="chart-theme-1 chart" data-percent="60"><span>60</span>%</div>
                            </div>
                            <h4 class="skill-name">GIT</h4>
                            <div class="level"><?=$l['intermediate_skill']?> </div>
                            <div class="desc">
                                 <?=$l['git_skill']?>
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//row-->
            </div><!--//top-skills-->
            
            <div class="other-skills">
                <h3 class="subtitle"><?=$l['other_skill']?></h3>
                <div class="misc-skills">
                    <span class="skill-tag">SQL</span>
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">Javascript</span>
                    <span class="skill-tag">Tableau</span>
<!--                     <br>
                    <span class="skill-tag">Ruby</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Wireframe</span>
                    <span class="skill-tag">Spanish</span>
                    <span class="skill-tag">French</span> -->
                </div>
            </div><!--//other-skills-->
            
        </section><!--//skills-section-->
        
        <!-- <section id="testimonials-section" class="testimonials-section section"> -->
            <!-- <h2 class="section-title">Testimonials</h2> -->
            
            <!-- <div id="testimonials-carousel" class="testimonials-carousel carousel slide" data-bs-interval="8000"> -->
                
                <!-- Indicators -->
                <!-- <ol class="carousel-indicators"> -->
                    <!-- <li data-bs-target="#testimonials-carousel" data-bs-slide-to="0" class="active"></li> -->
                    <!-- <li data-bs-target="#testimonials-carousel" data-bs-slide-to="1"></li> -->
                    <!-- <li data-bs-target="#testimonials-carousel" data-bs-slide-to="2"></li> -->
                <!-- </ol> -->
                
                <!-- Wrapper for slides -->
                <!-- <div class="carousel-inner"> -->
                    <!-- <div class="item carousel-item active"> -->
                        <!-- <blockquote class="quote">       -->
                            <!-- <p><span class="icon-holder"><i class="fas fa-quote-left"></i></span>                             -->
                            <!-- James is an excellent software engineer and he is passionate about what he does. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse porttitor metus eros.</p> -->
                        <!-- </blockquote>     -->
                        <!-- <div class="source"> -->
                            <!-- <div class="name">Rob Olson</div> -->
                            <!-- <div class="position">Product Manager, Apple</div> -->
                        <!-- </div>//source    -->
                                                       
                    <!-- </div> //item -->
                    <!-- <div class="item carousel-item"> -->
                        <!-- <blockquote class="quote"> -->
                            <!-- <p><span class="icon-holder"><i class="fas fa-quote-left"></i></span>  -->
                            <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p> -->
                        <!-- </blockquote>        -->
                        <!-- <div class="source"> -->
                            <!-- <div class="name">Austin Ward</div> -->
                            <!-- <div class="position">CEO, Startup Hub</div> -->
                        <!-- </div>//source           -->
                    <!-- </div> //item -->
                    
                <!-- </div>//carousel-inner -->
            <!-- </div>//testimonials-carousel -->
            
        </section><!--//section-->
        
        
        <section id="portfolio-section" class="portfolio-section section">
            <h2 class="section-title"><?=$l['menu_portfolio']?></h2>
            <ul id="filters" class="filters clearfix">
                <li class="type active" data-filter="*"><?=$l['all']?></li>
                <li class="type" data-filter=".dataanalysis"><?=$l['portfolio_data']?></li>
                <!-- <li class="type" data-filter=".frontend">Web Developement</li> -->
            </ul><!--//filters-->
            <div class="items-wrapper isotope row">
                <div class="item dataanalysis col-lg-3 col-6">
                    <div class="item-inner">
                        <figure class="figure">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-1.jpg" alt="" />
                        </figure>
                        <div class="content text-start">
                            <h3 class="sub-title"><a href=
                                "https://github.com/roxanaagr/data_analyst_openclassrooms/tree/main/HealthStudy"><?=$l['project_healthstudy_title']?></a></h3>
                            <div class="meta">R </div>
                            <div class="action"><a href="https://github.com/roxanaagr/data_analyst_openclassrooms/tree/main/HealthStudy"><?=$l['view_github']?></a></div>
                        </div><!--//content-->    
                        <a class="link-mask" href="https://github.com/roxanaagr/data_analyst_openclassrooms/tree/main/HealthStudy" target="_blank"></a>              
                    </div><!--//item-inner-->
                </div><!--//item-->

                
            </div><!--//item-wrapper-->
            
        </section><!--//section-->
        
        <section id="contact-section" class="contact-section section">
            <h2 class="section-title"><?=$l['get_in_touch']?></h2>
            <div class="intro">
                <!-- <img class="profile-image" src="assets/images/profile-image.png" alt=""> -->
                <img class="img img-thumbnail profile-image" src="assets/images/profile-image.jpg" alt="Roxana Agrigoroaie">

                <div class="dialog"> 
                    <p><?=$l['contact_me_text']?></p>
                    <p><strong><?=$l['contact_me_help']?></strong></p>
                    <ul class="list-unstyled service-list ml-0">
                        <li><i class="fas fa-check" aria-hidden="true"></i> <?=$l['contact_me_help_1']?> </li>
                        <li><i class="fas fa-check" aria-hidden="true"></i> <?=$l['contact_me_help_2']?> </li>
                        <li><i class="fas fa-check" aria-hidden="true"></i> <?=$l['contact_me_help_3']?> </li>
                    </ul>
                    <p><?=$l['contact_me_final']?></p>

                    <ul class="social list-inline">
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/roxana-agrigoroaie-07058b176/" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/roxanaagr" target="_blank"><i class="fab fa-github-alt" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="https://bitbucket.org/roxanaagr/" target="_blank"><i class="fab fa-bitbucket" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.researchgate.net/profile/Roxana-Agrigoroaie" target="_blank"><i class="fab fa-researchgate" aria-hidden="true"></i></a></li>
                    </ul><!--//social-->
                </div><!--//diaplog-->
            </div><!--//intro-->

        </section><!--//section-->
        
    </div><!--//wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <small class="copyright">Copyright - All rights reserved; Roxana Agrigoroaie 2022</small>
        </div><!--//container-->
    </footer>
        
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script src="assets/plugins/easy-pie-chart/dist/easypiechart.min.js"></script>
    <script src="assets/plugins/imagesloaded.pkgd.min.js"></script> 
    <script src="assets/plugins/isotope.pkgd.min.js"></script>  
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="assets/plugins/vanilla-back-to-top.min.js"></script> 
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/main.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <!-- <script src="assets/js/demo/style-switcher.js"></script>      -->
    

</body>
</html> 

