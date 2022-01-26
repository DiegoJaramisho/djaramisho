@extends('layouts.app')

@section('content')
<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
          <div class="header-content">
            <div class="header-photo">
              <img src="{{asset('assets/img/foto/profile2.jpeg')}}" alt="Diego Jaramillo">
            </div>
            <div class="header-titles">
              <h3>Diego Fernando Jaramillo Durán</h3>
              <h4>Software developer</h4>
            </div>
          </div>

          <ul class="main-menu">
            <li class="active">
              <a href="#home" class="nav-anim">
                <span class="menu-icon lnr lnr-home"></span>
                <span class="link-text">Home</span>
              </a>
            </li>
            <li>
              <a href="#about-me" class="nav-anim">
                <span class="menu-icon lnr lnr-user"></span>
                <span class="link-text">About Me</span>
              </a>
            </li>
            <li>
              <a href="#resume" class="nav-anim">
                <span class="menu-icon lnr lnr-graduation-hat"></span>
                <span class="link-text">Resume</span>
              </a>
            </li>
            <li>
              <a href="#portfolio" class="nav-anim">
                <span class="menu-icon lnr lnr-briefcase"></span>
                <span class="link-text">Portfolio</span>
              </a>
            </li>
            {{-- <li>
              <a href="#blog" class="nav-anim">
                <span class="menu-icon lnr lnr-book"></span>
                <span class="link-text">Blog</span>
              </a>
            </li> --}}
            <li>
              <a href="#contact" class="nav-anim">
                <span class="menu-icon lnr lnr-envelope"></span>
                <span class="link-text">Contact</span>
              </a>
            </li>
          </ul>

          <div class="social-links">
            <ul>
              <li><a href="https://www.linkedin.com/in/diego-fernando-jaramillo-duran-4169b3208" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              {{-- <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li> --}}
            </ul>
          </div>

          <div class="header-buttons">
            <a href="{{asset('assets/doc/CV_Diego_Fernando_Jaramillo_Duran.pdf')}}"  target="_blank" class="btn btn-primary" download>Download CV</a>
          </div>

          {{-- <div class="copyrights">© 2020 All rights reserved.</div> --}}
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
          <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
          <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
          <div class="animated-sections">
            <!-- Home Subpage -->
            <section data-id="home" class="animated-section start-page">
              <div class="section-content vcentered">

                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="title-block">
                        <h2>Diego Jaramillo</h2>
                        <div class="owl-carousel text-rotation">
                          <div class="item">
                            <div class="sp-subtitle">Software developer</div>
                          </div>

                          <div class="item">
                            <div class="sp-subtitle">backend-developer</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- About Me Subpage -->
            <section data-id="about-me" class="animated-section">
              <div class="section-content">
                <div class="page-title">
                  <h2>un poco sobre <span>mi!</span></h2>
                </div>

                <!-- Personal Information -->
                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <p>Mucho gusto! Soy Diego Jaramillo, soy desarrollador de software enfocado al desarrollo web-backend, soy autodidacta, me encanta estar en continuo aprendizaje, me gusta trabajar en equipo,compartir conocimientos y aprender de mis colegas, ya que de este modo se genera un buen clima laboral y profesional. Aunque me especializo en el desarrollo web-backend también manejo habilidades en cuanto al desarrollo en frontend. Actualmente curso el último semestre de Tecnología en desarrollo de software en la Universidad Surcolombiana, también trabajo en un proyecto de software administrativo y operativo para una empresa de transporte muy importante en la región. Hoy me encuentro dispuesto a cumplir con cualquier reto que se me presente.</p>
                  </div>

                  <div class="col-xs-12 col-sm-5">
                    <div class="info-list">
                      <ul>
                        <li>
                          <span class="title">Edad</span>
                          <span class="value">23</span>
                        </li>

                        <li>
                          <span class="title">Residence</span>
                          <span class="value">Colombia</span>
                        </li>

                        <li>
                          <span class="title">Ciudad</span>
                          <span class="value">Neiva</span>
                        </li>

                        <li>
                          <span class="title">e-mail</span>
                          <span class="value">diegojaramillo473@gmail.com</span>
                        </li>

                        <li>
                          <span class="title">Celular</span>
                          <span class="value">+57 3126732928</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- End of Personal Information -->

                <div class="white-space-50"></div>

                <!-- Services -->
                {{-- <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h3>Mis <span>conocimientos!</span></h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="col-inner">
                      <div class="info-list-w-icon">
                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="lnr lnr-store"></i>
                          </div>
                          <div class="ci-text">
                            <h4>Estructuracion BDD</h4>
                            <p>Se estructutrar bases de datos entendiendo los modelos relacionales entre entidades</p>
                          </div>
                        </div>
                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                          </div><div class="ci-text">
                            <h4>Web Design</h4>
                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <div class="col-inner">
                      <div class="info-list-w-icon">
                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="lnr lnr-pencil"></i>
                          </div>
                          <div class="ci-text">
                            <h4>Copywriting</h4>
                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                          </div>
                        </div>
                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="lnr lnr-flag"></i>
                          </div><div class="ci-text">
                            <h4>Management</h4>
                            <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <!-- End of Services -->

                {{-- <div class="white-space-30"></div> --}}

                <!-- Testimonials -->
                {{-- <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h3>Testimonials</h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="testimonials owl-carousel">
                      <!-- Testimonial 1 -->
                      <div class="testimonial">
                        <div class="img">
                          <img src="{{asset('assets/img/testimonials/testimonial-1.jpg')}}" alt="Alex Smith">
                        </div>
                        <div class="text">
                          <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                        </div>
                        <div class="author-info">
                          <h4 class="author">Julia Hickman</h4>
                          <h5 class="company">Omni Source</h5>
                          <div class="icon">
                            <i class="fas fa-quote-right"></i>
                          </div>
                        </div>
                      </div>
                      <!-- End of Testimonial 1 -->
                      <!-- Testimonial 2 -->
                      <div class="testimonial">
                        <div class="img">
                          <img src="{{asset('assets/img/testimonials/testimonial-2.jpg')}}" alt="Alex Smith">
                        </div>
                        <div class="text">
                          <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                        </div>
                        <div class="author-info">
                          <h4 class="author">Robert Watkins</h4>
                          <h5 class="company">Endicott Shoes</h5>
                          <div class="icon">
                            <i class="fas fa-quote-right"></i>
                          </div>
                        </div>
                      </div>
                      <!-- End of Testimonial 2 -->
                      <!-- Testimonial 3 -->
                      <div class="testimonial">
                        <div class="img">
                          <img src="{{asset('assets/img/testimonials/testimonial-3.jpg')}}" alt="Alex Smith">
                        </div>
                        <div class="text">
                          <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor. Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id ligula pellentesque, at vehicula dui ultrices.</p>
                        </div>
                        <div class="author-info">
                          <h4 class="author">Kristin Carroll</h4>
                          <h5 class="company">Helping Hand</h5>
                          <div class="icon">
                            <i class="fas fa-quote-right"></i>
                          </div>
                        </div>
                      </div>
                      <!-- End of Testimonial 3 -->
                    </div>
                  </div>
                </div> --}}
                <!-- End of Testimonials -->

                {{-- <div class="white-space-50"></div> --}}

                <!-- Clients -->
                {{-- <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h3>Cilents</h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="clients owl-carousel">
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-1.png')}}" alt="Logo">
                        </a>
                      </div>
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-2.png')}}" alt="Logo">
                        </a>
                      </div>
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-3.png')}}" alt="Logo">
                        </a>
                      </div>
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-4.png')}}" alt="Logo">
                        </a>
                      </div>
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-5.png')}}" alt="Logo">
                        </a>
                      </div>
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-6.png')}}" alt="Logo">
                        </a>
                      </div>
                      <div class="client-block">
                        <a href="#" target="_blank" title="Logo">
                          <img src="{{asset('assets/img/clients/client-7.png')}}" alt="Logo">
                        </a>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <!-- End of Clients -->

                {{-- <div class="white-space-50"></div> --}}

                <!-- Pricing -->
                {{-- <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h3>Pricing</h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class=" col-xs-12 col-sm-12 ">
                    <div class="fw-pricing clearfix row">
                      <div class="fw-package-wrap col-md-6 ">
                        <div class="fw-package">
                          <div class="fw-heading-row">
                            <span>Silver</span>
                          </div>
                          <div class="fw-pricing-row">
                            <span>$64</span>
                            <small>per month</small>
                          </div>
                          <div class="fw-button-row">
                            <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                          </div>
                          <div class="fw-default-row">Lorem ipsum dolor</div>
                          <div class="fw-default-row">Pellentesque scelerisque</div>
                          <div class="fw-default-row">Morbi eu sagittis</div>
                        </div>
                      </div>
                      <div class="fw-package-wrap col-md-6 highlight-col ">
                        <div class="fw-package">
                          <div class="fw-heading-row">
                            <span>Gold</span>
                          </div>
                          <div class="fw-pricing-row">
                            <span>$128</span>
                            <small>per month</small>
                          </div>
                          <div class="fw-button-row">
                            <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                          </div>
                          <div class="fw-default-row">Lorem ipsum dolor</div>
                          <div class="fw-default-row">Pellentesque scelerisque</div>
                          <div class="fw-default-row">Morbi eu sagittis</div>
                          <div class="fw-default-row">Donec non diam</div>
                          <div class="fw-default-row"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <!-- End of Pricing -->

                {{-- <div class="white-space-50"></div> --}}

                <!-- Fun Facts -->
                {{-- <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h3>Fun <span>Facts</span></h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <div class="fun-fact gray-default">
                      <i class="lnr lnr-heart"></i>
                      <h4>Happy Clients</h4>
                      <span class="fun-fact-block-value">578</span>
                      <span class="fun-fact-block-text"></span>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="fun-fact gray-default">
                      <i class="lnr lnr-clock"></i>
                      <h4>Working Hours</h4>
                      <span class="fun-fact-block-value">4,780</span>
                      <span class="fun-fact-block-text"></span>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 ">
                    <div class="fun-fact gray-default">
                      <i class="lnr lnr-star"></i>
                      <h4>Awards Won</h4>
                      <span class="fun-fact-block-value">15</span>
                      <span class="fun-fact-block-text"></span>
                    </div>
                  </div>
                </div> --}}
                <!-- End of Fun Facts -->

              </div>
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section data-id="resume" class="animated-section">
              <div class="section-content">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-7">

                    <div class="block-title">
                      <h3>Educación</h3>
                    </div>

                    <div class="timeline timeline-second-style clearfix">
                      <div class="timeline-item clearfix">
                        <div class="left-part">
                          <h5 class="item-period">2018</h5>
                          <span class="item-company">Universidad Surcolombiana</span>
                        </div>
                        <div class="divider"></div>
                        <div class="right-part">
                          <h4 class="item-title">Tecnología en desarrollo de software</h4>
                          <p>Actualmente cursando el ultimo semestre de la carrera,adquiri muchos conociemientos en arquitectura de software, ingenieria, gestion de proyectos y programacion los cuales fortaleci como autodidacta.</p>
                        </div>
                      </div>

                      {{-- <div class="timeline-item clearfix">
                        <div class="left-part">
                          <h5 class="item-period">2007</h5>
                          <span class="item-company">University of Studies</span>
                        </div>
                        <div class="divider"></div>
                        <div class="right-part">
                          <h4 class="item-title">Graphic Design</h4>
                          <p>Aliquam tincidunt malesuada tortor vitae iaculis. In eu turpis iaculis, feugiat risus quis, aliquet urna. Quisque fringilla mollis risus, eu pulvinar dolor.</p>
                        </div>
                      </div> --}}
                    </div>

                    <div class="white-space-50"></div>

                    <div class="block-title">
                      <h3>Expeciencia</h3>
                    </div>

                    <div class="timeline timeline-second-style clearfix">
                      <div class="timeline-item clearfix">
                        <div class="left-part">
                          <h5 class="item-period">2021 - Actualidad</h5>
                          <span class="item-company">CootransHuila</span>
                        </div>
                        <div class="divider"></div>
                        <div class="right-part">
                          <h4 class="item-title">Desarrollador de software</h4>
                          <p>Actualmente trabajo en un proyecto de software administrativo y operativo para la empresa CootrasnHuila donde he participado de la planeacion, estructuracion y desarrollo de la base de datos, desarrollo del sistema por medio del paradigma de la POO y uso de la arquitectura MVC (modelo-vista-controlador).
                            Otras funciones asignadas:
                          <ul>
                            <li> mantenimiento de la pagina principal de la empresa <a href="www.cootranshuila.com">Cootranshuila</a></li>
                            <li>Brindar soluciones de software a los diferentes requerimientos de la empresa</li>
                          </ul>
                          </p>
                        </div>
                      </div>

                      <div class="timeline-item clearfix">
                        <div class="left-part">
                          <h5 class="item-period">2021</h5>
                          <span class="item-company">TataocoaTours</span>
                        </div>
                        <div class="divider"></div>
                        <div class="right-part">
                          <h4 class="item-title">Desarrollador web</h4>
                          Funciones asignadas:
                          <ul>
                          <li>Desarrollar la pagina web de la agencia de turismo <a href="www.tatacoatours.com">TatatcoaTours</a></li>
                          <li>Administrar fanpage de Instagram y facebook de la agencia.</li>
                        </div>
                      </div>

                      <div class="timeline-item clearfix">
                        <div class="left-part">
                          <h5 class="item-period">2020</h5>
                          <span class="item-company">HostalSarita</span>
                        </div>
                        <div class="divider"></div>
                        <div class="right-part">
                          <h4 class="item-title">Desarrollador web-freelancer</h4>
                          <p>Desarrollar la pagina web del Hostal</p>
                        </div>
                      </div>
                    </div>

                  </div>

                  <!-- Skills & Certificates -->
                  <div class="col-xs-12 col-sm-5">
                    <!-- Design Skills -->
                    <div class="block-title">
                      <h3>Mis <span>Habilidades</span></h3>
                    </div>
                    <div class="habilidades">
                        <ul class="knowledges">
                            <li><img src="https://cineticaweb.com/assets/laravel.png" alt="" ></li>
                            <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1067px-PHP-logo.svg.png" alt="" width="75"></li>
                            <li><img src="{{asset('assets/img/foto/postgres.png')}}" alt="" width="75"></li>
                            <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="" width="75"></li>
                            <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" alt="" width="75"></li>
                            <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/300px-HTML5_logo_and_wordmark.svg.png" alt="" width="75"></li>
                            <li><img src="https://lineadecodigo.com/wp-content/uploads/2014/04/css.png" alt="" width="75"></li>
                            {{-- {{-- <li>Social Networking</li> --}}
                            <li><img src="http://pngimg.com/uploads/github/github_PNG72.png" alt="" width="75"></li>
                        </ul>
                    </div>

                    {{-- <div class="skills-info skills-second-style"> --}}
                      <!-- Skill 1 -->
                      {{-- <div class="skill clearfix"> --}}

                      {{-- </div> --}}
                      {{-- <div class="skill-container skill-1">
                        <div class="skill-percentage"></div> --}}
                      {{-- </div> --}}
                      <!-- End of Skill 1 -->

                      <!-- Skill 2 -->
                      {{-- <div class="skill clearfix">
                        <h4>Print Design</h4>
                        <div class="skill-value">65%</div>
                      </div> --}}
                      {{-- <div class="skill-container skill-2">
                        <div class="skill-percentage"></div>
                      </div> --}}
                      <!-- End of Skill 2 -->

                      <!-- Skill 3 -->
                      {{-- <div class="skill clearfix">
                        <h4>Logo Design</h4>
                        <div class="skill-value">80%</div>
                      </div>
                      <div class="skill-container skill-3">
                        <div class="skill-percentage"></div>
                      </div> --}}
                      <!-- End of Skill 3 -->

                      <!-- Skill 4 -->
                      {{-- <div class="skill clearfix">
                        <h4>Graphic Design</h4>
                        <div class="skill-value">90%</div>
                      </div>
                      <div class="skill-container skill-4">
                        <div class="skill-percentage"></div>
                      </div> --}}
                      <!-- End of Skill 4 -->

                    {{-- </div> --}}
                    <!-- End of Design Skills -->

                    {{-- <div class="white-space-10"></div> --}}

                    <!-- Coding Skills -->
                    {{-- <div class="block-title"> --}}
                      {{-- <h3>Coding <span>Skills</span></h3> --}}
                    {{-- </div> --}}

                    {{-- <div class="skills-info skills-second-style">
                      <!-- Skill 5 -->
                      <div class="skill clearfix">
                        <h4>JavaScript</h4>
                        <div class="skill-value">95%</div>
                      </div>
                      <div class="skill-container skill-5">
                        <div class="skill-percentage"></div>
                      </div>
                      <!-- End of Skill 5 -->
                      <!-- Skill 6 -->
                      <div class="skill clearfix">
                        <h4>PHP</h4>
                        <div class="skill-value">85%</div>
                      </div>
                      <div class="skill-container skill-6">
                        <div class="skill-percentage"></div>
                      </div>
                      <!-- End of Skill 6 -->
                      <!-- Skill 7 -->
                      <div class="skill clearfix">
                        <h4>HTML/CSS</h4>
                        <div class="skill-value">100%</div>
                      </div>
                      <div class="skill-container skill-7">
                        <div class="skill-percentage"></div>
                      </div>
                      <!-- End of Skill 7 -->
                      <!-- Skill 8 -->
                      <div class="skill clearfix">
                        <h4>Smarty/Twig</h4>
                        <div class="skill-value">75%</div>
                      </div>
                      <div class="skill-container skill-8">
                        <div class="skill-percentage"></div>
                      </div>
                      <!-- End of Skill 8 -->
                      <!-- Skill 9 -->
                      <div class="skill clearfix">
                        <h4>Perl</h4>
                        <div class="skill-value">90%</div>
                      </div>
                      <div class="skill-container skill-9">
                        <div class="skill-percentage"></div>
                      </div>
                      <!-- End of Skill 9 -->
                    </div>
                    <!-- End of Coding Skills -->
                    <div class="white-space-10"></div>
                    <!-- Knowledges -->
                    <div class="block-title">
                      <h3>Knowledges</h3>
                    </div> --}}

                    <ul class="knowledges">
                      <li>Desarrollo web</li>
                      <li>Bases de datos relacionales</li>
                      <li>Desarrollo web-backend</li>
                      <li>Desarrollo frontend</li>
                      <li>Arquitectura MVC</li>
                      <li>Trabajo en equipo</li>
                      <li>autodidacta</li>
                      <li>Continuo aprendizaje</li>
                      <li>Manejo de repositorio Git-Hub</li>
                    </ul>
                    <!-- End of Knowledges -->
                  </div>
                  <!-- End of Skills & Certificates -->
                </div>

                {{-- <div class="white-space-50"></div>
                <!-- Certificates -->
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="block-title">
                      <h3>Certificados</h3>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- Certificate 1 -->
                  <div class="col-xs-12 col-sm-6">
                    <div class="certificate-item clearfix">
                      <div class="certi-logo">
                        <img src="img/clients/client-1.png" alt="logo">
                      </div>
                      <div class="certi-content">
                        <div class="certi-title">
                          <h4>Psyhology of Intertnation Design</h4>
                        </div>
                        <div class="certi-id">
                          <span>Membership ID: XXXX</span>
                        </div>
                        <div class="certi-date">
                          <span>19 April 2018</span>
                        </div>
                        <div class="certi-company">
                          <span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Certificate 1 -->
                  <!-- Certificate 2 -->
                  <div class="col-xs-12 col-sm-6">
                    <div class="certificate-item clearfix">
                      <div class="certi-logo">
                        <img src="img/clients/client-1.png" alt="logo">
                      </div>
                      <div class="certi-content">
                        <div class="certi-title">
                          <h4>Psyhology of Intertnation Design</h4>
                        </div>
                        <div class="certi-id">
                          <span>Membership ID: XXXX</span>
                        </div>
                        <div class="certi-date">
                          <span>19 April 2018</span>
                        </div>
                        <div class="certi-company">
                          <span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Certificate 2 -->
                </div>
                <!-- End of Certificates --> --}}
              </div>
            </section>
            <!-- End of Resume Subpage -->

            <!-- Portfolio Subpage -->
            <section data-id="portfolio" class="animated-section">
              <div class="section-content">
                <div class="page-title">
                  <h2>Portafolio</h2>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <!-- Portfolio Content -->
                    <div class="portfolio-content">

                      <ul class="portfolio-filters">
                        <li class="active">
                          <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                        </li>
                        <li>
                          <a class="filter btn btn-sm btn-link" data-group="aplicativo-web">Cootranshuila aplicativo web</a>
                        </li>
                        <li>
                          <a class="filter btn btn-sm btn-link" data-group="cootranshuila">Cootranshuila</a>
                        </li>
                        <li>
                          <a class="filter btn btn-sm btn-link" data-group="hostal">Hostal sarita</a>
                        </li>
                        <li>
                          <a class="filter btn btn-sm btn-link" data-group="tatacoa">Tatacoa tours</a>
                        </li>
                      </ul>

                      <!-- Portfolio Grid -->
                      <div class="portfolio-grid three-columns">
                        <figure class="item lbimage" data-groups='["category_all", "aplicativo-web"]'>
                          <div class="portfolio-item-img">
                            <img src="{{asset('assets/img/foto/portafolio/dashboard01.png')}}" alt="Mockup Design 1" title="" />
                            <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/dashboard01.png')}}"></a>
                          </div>

                          <i class="far fa-image"></i>
                          <h5 class="name">Cootranshuila plataforma(en desarrollo)</h5>
                          <span class="category">Aplicativo web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "aplicativo-web"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/dashboard02.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/dashboard02.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila plataforma(en desarrollo)</h5>
                            <span class="category">Aplicativo web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "aplicativo-web"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/dashboard03.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/dashboard03.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila plataforma(en desarrollo)</h5>
                            <span class="category">Aplicativo web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "aplicativo-web"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/dashboard04.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/dashboard04.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila plataforma(en desarrollo)</h5>
                            <span class="category">Aplicativo web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "aplicativo-web"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/dashboard05.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/dashboard05.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila plataforma(en desarrollo)</h5>
                            <span class="category">Aplicativo web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "hostal"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/hostal01.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/hostal01.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Hostal Sarita</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "hostal"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/hostal02.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/hostal02.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Hostal Sarita</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "hostal"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/hostal03.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/hostal03.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Hostal Sarita</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "hostal"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/hostal04.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/hostal04.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Hostal Sarita</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "tatacoa"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/tatacoatours01.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/tatacoatours01.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Tatacoa Tours</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "tatacoa"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/tatacoatours02.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/tatacoatours02.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Tatacoa Tours</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "tatacoa"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/tatacoatours03.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/tatacoatours03.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Tatacoa Tours</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "cootranshuila"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/cootranshuila01.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/cootranshuila01.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "cootranshuila"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/cootranshuila02.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/cootranshuila02.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                        <figure class="item lbimage" data-groups='["category_all", "cootranshuila"]'>
                            <div class="portfolio-item-img">
                              <img src="{{asset('assets/img/foto/portafolio/cootranshuila03.png')}}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Aplicativo-web" href="{{asset('assets/img/foto/portafolio/cootranshuila03.png')}}"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h5 class="name">Cootranshuila</h5>
                            <span class="category">Pagina-web</span>
                        </figure>
                      </div>
                    </div>
                    <!-- End of Portfolio Content -->
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Portfolio Subpage -->

            <!-- Blog Subpage -->
            {{-- <section data-id="blog" class="animated-section">
              <div class="section-content">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="blog-masonry two-columns clearfix">
                      <!-- Blog Post 1 -->
                      <div class="item post-1">
                        <div class="blog-card">
                          <div class="media-block">
                            <div class="category">
                              <a href="#" title="View all posts in Design">Design</a>
                            </div>
                            <a href="blog-post-1.html">
                              <img src="{{asset('assets/img/blog/blog_post_1.jpg')}}" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="post-info">
                            <div class="post-date">05 Mar 2020</div>
                            <a href="blog-post-1.html">
                              <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Blog Post 1 -->
                      <!-- Blog Post 2 -->
                      <div class="item post-2">
                        <div class="blog-card">
                          <div class="media-block">
                            <div class="category">
                              <a href="#" title="View all posts in UI">UI</a>
                            </div>
                            <a href="blog-post-1.html">
                              <img src="{{asset('assets/img/blog/blog_post_2.jpg')}}" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="post-info">
                            <div class="post-date">23 Feb 2020</div>
                            <a href="blog-post-1.html">
                              <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Blog Post 2 -->
                      <!-- Blog Post 3 -->
                      <div class="item post-1">
                        <div class="blog-card">
                          <div class="media-block">
                            <div class="category">
                              <a href="#" title="View all posts in Design">Design</a>
                            </div>
                            <a href="blog-post-1.html">
                              <img src="{{asset('assets/img/blog/blog_post_3.jpg')}}" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="post-info">
                            <div class="post-date">06 Feb 2020</div>
                            <a href="blog-post-1.html">
                              <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Blog Post 3 -->
                      <!-- Blog Post 4 -->
                      <div class="item post-2">
                        <div class="blog-card">
                          <div class="media-block">
                            <div class="category">
                              <a href="#" title="View all posts in E-Commerce">UI</a>
                            </div>
                            <a href="blog-post-1.html">
                              <img src="{{asset('assets/img/blog/blog_post_4.jpg')}}" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                              <div class="mask"></div>
                            </a>
                          </div>
                          <div class="post-info">
                            <div class="post-date">07 Jan 2020</div>
                            <a href="blog-post-1.html">
                              <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- End of Blog Post 4 -->
                    </div>
                  </div>
                </div>
              </div>
            </section> --}}
            <!-- End of Blog Subpage -->

            <!-- Contact Subpage -->
            <section data-id="contact" class="animated-section text-center">
              <div class="section-content">
                <div class="page-title ">
                  <h2>Contactame</h2>
                </div>

                <div class="row">
                  <!-- Contact Info -->
                  <div class="col-xs-12 col-sm-12">
                    <div class="lm-info-block gray-default">
                      <i class="lnr lnr-map-marker"></i>
                      <h4>Neiva-Huila</h4>
                      <span class="lm-info-block-value"></span>
                      <span class="lm-info-block-text"></span>
                    </div>

                    <div class="lm-info-block gray-default">
                      <i class="lnr lnr-phone-handset"></i>
                      <h4>+57 3126732928</h4>
                      <span class="lm-info-block-value"></span>
                      <span class="lm-info-block-text"></span>
                    </div>

                    <div class="lm-info-block gray-default">
                      <i class="lnr lnr-envelope"></i>
                      <h4>diegojaramillo473@gmail.com</h4>
                      <span class="lm-info-block-value"></span>
                      <span class="lm-info-block-text"></span>
                    </div>

                    <div class="lm-info-block gray-default">
                      <i class="lnr lnr-checkmark-circle"></i>
                      <h4>Desarrollador de software disponible</h4>
                      <span class="lm-info-block-value"></span>
                      <span class="lm-info-block-text"></span>
                    </div>


                  </div>
                  <!-- End of Contact Info -->

                  <!-- Contact Form -->
                  <div class="col-xs-12 col-sm-8">
                    {{-- <div id="map" class="map"></div>
                    <div class="block-title">
                      <h3>como te puedo <span>ayudar?</span></h3>
                    </div>
                    <form id="contact_form" class="contact-form" action="#" >
                      <div class="messages"></div>
                      <div class="controls two-columns">
                        <div class="fields clearfix">
                          <div class="left-column">
                            <div class="form-group form-group-with-icon">
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" oninput="test()" data-error="Name is required.">
                              <label>Full Name</label>
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group form-group-with-icon">
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                              <label>Email Address</label>
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group form-group-with-icon">
                              <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                              <label>Subject</label>
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="right-column">
                            <div class="form-group form-group-with-icon">
                              <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                              <label>Message</label>
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
                        <input type="submit" class="button btn-send" value="Send message">
                      </div>
                    </form> --}}
                  </div>
                  <!-- End of Contact Form -->
                </div>

              </div>
            </section>
            <!-- End of Contact Subpage -->
          </div>
        </div>

    </div>
  </div>

@endsection
