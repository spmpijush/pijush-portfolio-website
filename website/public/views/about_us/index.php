<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<div class="container-fluid about_us_main_section">

    <div id="body">
        <div class="container-fluid">
            <div class="row background_color_">
                <div class="col-lg-2 col-md-2 col-12">
                    <div class="">
                        <div class="l-navbar" id="navbar">
                            <nav class="nav">
                                <div>
                                    <div class="nav__toggle" id="nav-toggle">
                                        <i class='bx bx-chevron-right'></i>
                                    </div>

                                    <ul class="nav__list">
                                        <a href="#" class="nav__link active">
                                            <i class='bx bx-grid-alt nav__icon'></i>
                                            <span class="nav__text">Profile</span>
                                        </a>
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-user nav__icon'></i>
                                            <span class="nav__text">Qualifications</span>
                                        </a>
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-bell nav__icon'></i>
                                            <span class="nav__text">Achievement</span>
                                        </a>
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-heart nav__icon'></i>
                                            <span class="nav__text">Projects</span>
                                        </a>
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-bookmark nav__icon'></i>
                                            <span class="nav__text">Skills</span>
                                        </a>
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-message-rounded nav__icon'></i>
                                            <span class="nav__text">Career Object</span>
                                        </a>
                                        <a href="#" class="nav__link">
                                            <i class='bx bx-message-rounded nav__icon'></i>
                                            <span class="nav__text">Resume</span>
                                        </a>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-12">

                    <!-- ########################## Resume Section Start ########################## -->
                    <!-- <div class="all_content_box_">
                        <div class="cv_main_section container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="left_side_cv">
                                        <div class="cv_main_color pb-4">
                                            <div class="cv_img_box">
                                                <img src="<?php echo URL . $this->getAboutPageDate['path'] . $this->getAboutPageDate['file']  ?>" class="cv_img" alt="...">
                                            </div>
                                            <h1 class="text-center text-white my-3"><?php echo $this->getAboutPageDate['name']; ?></h1>
                                            <h3 class="text-center text-white"><?php echo $this->getAboutPageDate['position']; ?></h3>
                                        </div>

                                        <div class="postal_address">
                                            <h1 class="text-center text-white py-2">Postal Address</h1>
                                        </div>

                                        <div class="contact">
                                            <h1 class="text-center text-white py-2">CONTACT INFO</h1>
                                            <div class="row mx-1">
                                                <div class="col-lg-2 col-md-2 col-2">
                                                    <img src="<?php echo URL ?>uploads/cv/contactno.png" class="contact_section_img" alt="...">
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-10">
                                                    <p>+91 <?php echo $this->getPersonalInfoPageDate['phone_no']; ?></p>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-2">
                                                    <img src="<?php echo URL ?>uploads/cv/contactno.png" class="contact_section_img" alt="...">
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-10">
                                                    <p>+91 <?php echo $this->getPersonalInfoPageDate['alternate_phone_number']; ?></p>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-2">
                                                    <img src="<?php echo URL ?>uploads/cv/whatsapp.png" class="contact_section_img" alt="...">
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-10">
                                                    <p>+91 <?php echo $this->getPersonalInfoPageDate['whatsapp_no']; ?></p>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-2">
                                                    <img src="<?php echo URL ?>uploads/cv/email.png" class="contact_section_img" alt="...">
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-10">
                                                    <p><?php echo $this->getPersonalInfoPageDate['email_id']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skils py-4 px-2">
                                            <h1 class="text-center text-white py-3">SKILS</h1>
                                            <?php
                                            foreach ($this->getSkilsDate as $k => $val) {
                                                echo '<label>' .  $val['skils_name'] . '</label>';
                                                echo '<div class="progress">';
                                                echo '<div class="progress-bar bg-primary " role="progressbar" style="width:' .  $val['skils_percentage'] . '%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">' .  $val['skils_percentage'] . '%</div>';
                                                echo ' </div>';
                                            }
                                            ?>


                                        </div>
                                        <div class="hobies pt-4">
                                            <h1 class="text-center text-white py-3">HOBIES</h1>
                                            <div class="hobies_sub_section mt-5">
                                                <div class="text-center">
                                                    <img src="<?php echo URL ?>uploads/cv/music.png" class="contact_section_img" alt="...">
                                                    <p class="py-2 text-white">MUSIC</p>
                                                </div>
                                                <div class="text-center">
                                                    <img src="<?php echo URL ?>uploads/cv/gaming.png" class="contact_section_img" alt="...">
                                                    <p class="py-2 text-white">GAMING</p>
                                                </div>
                                                <div class="text-center">
                                                    <img src="<?php echo URL ?>uploads/cv/laptop.png" class="contact_section_img" alt="...">
                                                    <p class="py-2 text-white">CODING</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hobies ">
                                            <h1 class="text-center text-white py-3">SOCIAL MEDIA</h1>
                                            <div class="hobies_sub_section mt-3">
                                                <div class="text-center mt-3">
                                                    <a href="<?php echo $this->getAboutPageDate['facebook']; ?>" target="_blank"><img src="<?php echo URL ?>uploads/cv/facebook.png" class="contact_section_img" alt="..."></a>
                                                    <p class="py-2 text-white">FACEBOOK</p>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <a class="" href="<?php echo $this->getAboutPageDate['github']; ?>" target="_blank"> <img src="<?php echo URL ?>uploads/cv/github.png" class="contact_section_img" alt="..."></a>
                                                    <p class="py-2 text-white">GITHUB</p>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <a class="" href="<?php echo $this->getAboutPageDate['linkdin']; ?>" target="_blank"> <img src="<?php echo URL ?>uploads/cv/linkdin.png" class="contact_section_img" alt="..."></a>
                                                    <p class="py-2 text-white">LINKDIN</p>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <a class="" href="<?php echo $this->getAboutPageDate['youtub']; ?>" target="_blank"> <img src="<?php echo URL ?>uploads/cv/youtube.png" class="contact_section_img" alt="..."></a>
                                                    <p class="py-2 text-white">YOUTUBE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                    <div class="right_side_content">
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/user.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">PROFILE</h1>
                                            </div>
                                            <p class="px-5"><?php echo $this->getAboutPageDate['description']; ?></p>
                                        </div>
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/education.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">EDUCATIONAL QUALIFICATIONS</h1>
                                            </div>
                                            <?php
                                            foreach ($this->getEducationDate as $k => $val) {
                                                echo '<div class="education_part d-flex justify-content-space-evenly align-items-center mt-5">';
                                                echo '<span></span>';
                                                echo '<h3>' . $val['degree'] . '</h3>';
                                                echo '</div>';
                                                echo '<p class="px-5 py-3">' . $val['board_university'] . ' | ' . $val['subject'] . ' | ' . $val['insititute'] . ' | ' . $val['passing_year'] . ' | ' . $val['percentage'] . '%</p>';
                                            }
                                            ?>

                                        </div>
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/work.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">WORK - EXPERIENCE</h1>
                                            </div>
                                            <?php
                                            foreach ($this->getWorkExperienceDate as $k => $val) {
                                                echo '<div class="education_part d-flex justify-content-space-evenly align-items-center mt-3">';
                                                echo '<span></span>';
                                                echo '<h3>' . $val['company'] . '</h3>';
                                                echo '</div>';
                                                echo '<p class="px-5 pt-3 work_experience"> <strong>' . $val['position'] . '</strong> | ' . $val['start_date'] . ' - ' . $val['end_date'] . '</p>';
                                                echo '<p class="px-5">' . $val['description'] . '</p>';
                                            }
                                            ?>
                                        </div>
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/project_done.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">PROJECT OVERVIEW</h1>
                                            </div>
                                            <p class="px-5"><?php echo $this->getAboutPageDate['project_overview']; ?>
                                            </p>
                                            <div class="row px-5 project_overview">
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <h3>SCHOOL WEBSITE</h3>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <h3>NGO WEBSITE</h3>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <h3>HEALTHCARE WEBSITE</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/information.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">PERSONAL - INFORMATION </h1>
                                            </div>
                                            <div class="table-sm table-responsive-sm px-5">
                                                <table class="table  ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Father`s Name</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['fathers_name'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Date Of Birth</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['date_of_birth'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Marital Status</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['marital_status'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Village</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['vill'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Post</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['po'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">District</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['dist'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Police Station</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['ps'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">G.P</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['fathers_name'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">PIN</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['gp'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">State</th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['state'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col">Language </th>
                                                            <th scope="col">:</th>
                                                            <td scope="col"><?php echo $this->getPersonalInfoPageDate['language'] ?></td>
                                                        </tr>

                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/declaration.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">DECLARATION</h1>
                                            </div>
                                            <p class="px-5"><?php echo $this->getAboutPageDate['declaration']; ?>
                                            </p>
                                        </div>
                                        <div class="profile_section">
                                            <div class="d-flex justify-content-space-evenly align-items-center">
                                                <div class="icon_box">
                                                    <img src="<?php echo URL ?>uploads/cv/gallery.png" class="icon_box_img" alt="...">
                                                </div>
                                                <h1 class="heading">GALLERY</h1>
                                            </div>
                                            <div class="px-5">
                                                <div class="row">
                                                    <?php
                                                    foreach ($this->getGalleryDate as $k => $val) {
                                                        echo '<div class="col-lg-3 col-md-3 col-6">';
                                                        echo '<div class="gallery_img_box py-3">';
                                                        echo '<img src="' . URL . '/uploads/cv/' . $val['file'] . '" class="gallery_img" alt="...">';
                                                        echo '</div>';
                                                        echo '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ########################## Resume Section End ########################## -->

                    <!-- ########################## Profile Section Start ########################## -->
                    <div class="all_content_box_">
                        <div class="profile_section_1">
                            <div class="profile_upper_section">
                                <img src="<?php echo URL ?>/uploads/student_about_us/pijush_cover.jpg" class="img-fluid h-100 w-100" alt="...">
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="profile_left_side">
                                        <div class="profile_img_box">
                                            <img src="<?php echo URL . $this->getAboutPageDate['path'] . $this->getAboutPageDate['file']  ?>" class="profile_image" alt="...">
                                        </div>
                                        <h2 class="text-center">PIJUSH KANTI MANDAL</h2>
                                        <div class="profile_social_media">
                                            <a href="#" class="">
                                                <i class='bx bxl-facebook-circle '></i>
                                            </a>
                                            <a href="#" class="">
                                                <i class='bx bxl-instagram-alt'></i>
                                            </a>
                                            <a href="#" class="">
                                                <i class='bx bxl-linkedin-square'></i>
                                            </a>
                                            <a href="#" class="">
                                                <i class='bx bxl-figma'></i>
                                            </a>
                                            <a href="#" class="">
                                                <i class='bx bxl-github'></i>
                                            </a>
                                        </div>
                                        <div class="profile_hire_me">
                                            <a href="#" class="hire_me_button">Hire Me
                                                <i class='bx bxs-phone-call'></i>
                                            </a>
                                        </div>
                                        <div class="profile_rating_overview">
                                            <p class="text-center">Rating Overview</p>
                                            <div class="text-center">
                                                <h3 class="text-center">4.3/<small>5</small></h3>
                                                <div class="star_box">
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star-half'></i>
                                                </div>
                                                <small>1254</small>
                                            </div>
                                            <div class="progress_bar mt-3">
                                                <div class="progress progress_bar_line mb-2">
                                                    <div class="progress-bar progress_bar_line__1 " role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress_bar_line mb-2">
                                                    <div class="progress-bar progress_bar_line__1 " role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress_bar_line mb-2">
                                                    <div class="progress-bar progress_bar_line__1 " role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress_bar_line mb-2">
                                                    <div class="progress-bar progress_bar_line__1 " role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress_bar_line mb-2">
                                                    <div class="progress-bar progress_bar_line__1 " role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-12">
                                    <div class="profile_right_side">
                                        <div class="">
                                            <p>My name is Pijush Kanti Mandal and I recently graduated
                                                with a degree in Computer Science in 2021, which I
                                                completed at Malda. I am excited to explore the world of
                                                technology and am particularly interested in web
                                                development. With 4+ years of self-experience in web
                                                development, I am constantly learning and exploring new
                                                tools and techniques to enhance my skills. I believe that my
                                                background in computer science and my passion for
                                                technology will allow me to thrive in the industry and make a
                                                valuable contribution to any project or team.</p>
                                        </div>
                                        <div class="profile_others_box">
                                            <div class="row">
                                                <div class="col-lg-7 col-md-7 col-12">
                                                    <div class="profile_circle_box">
                                                        <div class="progress_outer">
                                                            <h1 class="progress_inner_text">
                                                                80%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-12">
                                                    <div class="profile_personal_info">
                                                        <h3 class="py-3"><strong>Personal Information</strong></h3>
                                                        <h4><strong>Name</strong> : Pijush Kanti Mandal</h4>
                                                        <h4><strong>Father`s Name</strong> : Nikhil CH Mandal</h4>
                                                        <h4><strong>Date of Birth</strong> : 01/02/1999</h4>
                                                        <h4><strong>Marital Status</strong> : Married</h4>
                                                        <h4><strong>Village & P.O.</strong> : Kailabad</h4>
                                                        <h4><strong>District</strong> : Malda</h4>
                                                        <h4><strong>PIN</strong> : 732102</h4>
                                                        <h4><strong>Mother Tongue</strong> : Bengali</h4>
                                                        <h4><strong>Language</strong> : Bengali , Hindi , English</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ########################## Profile Section End ########################## -->


                    <!-- ########################## Qulafication Section Start ########################## -->
                    <!-- <div class="all_content_box_3">
                        <div class="qulafication_box">
                            <section class="section-timeline">
                                <div class="container">
                                    <ul class="timeline">
                                        <li class="">
                                            <div class="content">
                                                <h3>Post Graduation - (2021 - 2023)</h3>
                                                <small><strong>University Name </strong>: University of Gour Banga</small>
                                                <small><strong>University Degree </strong>: M.Sc</small>
                                                <small><strong>Department</strong>: Computer Science</small>
                                                <small class="mb-1"><strong>CGP </strong>: 6.3</small>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="content">
                                                <h3>Under Graduation - (2018 - 2021)</h3>
                                                <small><strong>Collage Name </strong>: Gour Mahavidyalaya</small>
                                                <small><strong>Collage Degree </strong>: B.Sc</small>
                                                <small><strong>Department</strong>: Computer Science</small>
                                                <small class="mb-1"><strong>Percentage </strong>: 75%</small>
                                            </div>
                                        </li>

                                        <li class="">
                                            <div class="content">
                                                <h3>ITI Examination - (2020 - 2021)</h3>
                                                <small><strong>Board </strong>: N.C.V.T</small>
                                                <small><strong>Collage Name </strong>: Harirampur Government ITI</small>
                                                <small><strong>Department</strong>: COPA</small>
                                                <small class="mb-1"><strong>Percentage </strong>: 86%</small>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="content">
                                                <h3>Higher Secondary - (2016 - 2018)</h3>
                                                <small><strong>Board </strong>: W.B.C.H.S.E</small>
                                                <small><strong>School Name </strong>: Gazole H.N.M. High School</small>
                                                <small><strong>Department</strong>: Science</small>
                                                <small class="mb-1"><strong>Percentage </strong>: 63%</small>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="content">
                                                <h3>Madhyamik Examination (2016)</h3>
                                                <small><strong>Board </strong>: W.B.B.S.E</small>
                                                <small><strong>School Name </strong>: Alinagar High School (H.S) N</small>
                                                <small class="mb-1"><strong>Percentage </strong>: 69%</small>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div> -->
                    <!-- ########################## Qulafication Section End ########################## -->


                    <!-- ########################## Achievement Section Start ########################## -->
                    <!-- <div class="all_content_box_3">
                        <div class="achievement_section">
                            <section class="timeline">
                                <div class="container">
                                    <div class="timeline-item">
                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <h2>Title</h2>
                                            <div class="date">1 MAY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInRight">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">25 MAY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>

                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <div class="date">3 JUN 2016</div>
                                            <h2>Quote</h2>
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInRight">
                                            <h2>Title</h2>
                                            <div class="date">22 JUN 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInLeft">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">10 JULY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInRight">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">30 JULY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <div class="date">5 AUG 2016</div>
                                            <h2>Quote</h2>
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInRight">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">19 AUG 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <div class="date">1 SEP 2016</div>
                                            <h2>Title</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>



                                </div>
                            </section>
                        </div>
                    </div> -->
                    <!-- ########################## Achievement Section End ########################## -->


                    <!-- ########################## Project Section Start ########################## -->
                    <!-- <div class="all_content_box_3">
                        <div class="achievement_section">
                            <section class="timeline">
                                <div class="container">
                                    <div class="timeline-item">
                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <h2>Title</h2>
                                            <div class="date">1 MAY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInRight">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">25 MAY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>

                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <div class="date">3 JUN 2016</div>
                                            <h2>Quote</h2>
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInRight">
                                            <h2>Title</h2>
                                            <div class="date">22 JUN 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInLeft">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">10 JULY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInRight">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">30 JULY 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <div class="date">5 AUG 2016</div>
                                            <h2>Quote</h2>
                                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta explicabo debitis omnis dolor iste fugit totam quasi inventore!</blockquote>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content timeline-card js--fadeInRight">
                                            <div class="timeline-img-header">
                                                <h2>Card Title</h2>
                                            </div>
                                            <div class="date">19 AUG 2016</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>

                                    <div class="timeline-item">

                                        <div class="timeline-img"></div>

                                        <div class="timeline-content js--fadeInLeft">
                                            <div class="date">1 SEP 2016</div>
                                            <h2>Title</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                                            <a class="bnt-more" href="javascript:void(0)">More</a>
                                        </div>
                                    </div>



                                </div>
                            </section>
                        </div>
                    </div> -->
                    <!-- ########################## Project Section End ########################## -->


                    <!-- ########################## Project Section End ########################## -->
                    <!-- <div class="all_content_box_3">
                        <div class="project_section_box">
                            <section id=timeline>
                                <h1>A Flexbox Timeline</h1>
                                <p class="leader">All cards must be the same height and width for space calculations on large screens.</p>
                                <div class="demo-card-wrapper">
                                    <div class="demo-card demo-card--step1">
                                        <div class="head">
                                            <div class="number-box">
                                                <span>01</span>
                                            </div>
                                            <h2><span class="small">Subtitle</span> Technology</h2>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                                            <img src="http://placehold.it/1000x500" alt="Graphic">
                                        </div>
                                    </div>

                                    <div class="demo-card demo-card--step2">
                                        <div class="head">
                                            <div class="number-box">
                                                <span>02</span>
                                            </div>
                                            <h2><span class="small">Subtitle</span> Confidence</h2>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                                            <img src="http://placehold.it/1000x500" alt="Graphic">
                                        </div>
                                    </div>

                                    <div class="demo-card demo-card--step3">
                                        <div class="head">
                                            <div class="number-box">
                                                <span>03</span>
                                            </div>
                                            <h2><span class="small">Subtitle</span> Adaptation</h2>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                                            <img src="http://placehold.it/1000x500" alt="Graphic">
                                        </div>
                                    </div>

                                    <div class="demo-card demo-card--step4">
                                        <div class="head">
                                            <div class="number-box">
                                                <span>04</span>
                                            </div>
                                            <h2><span class="small">Subtitle</span> Consistency</h2>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                                            <img src="http://placehold.it/1000x500" alt="Graphic">
                                        </div>
                                    </div>

                                    <div class="demo-card demo-card--step5">
                                        <div class="head">
                                            <div class="number-box">
                                                <span>05</span>
                                            </div>
                                            <h2><span class="small">Subtitle</span> Conversion</h2>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta reiciendis deserunt doloribus consequatur, laudantium odio dolorum laboriosam.</p>
                                            <img src="http://placehold.it/1000x500" alt="Graphic">
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div> -->
                    <!-- ########################## Project Section End ########################## -->


                    <!-- ########################## Skills Section Start ########################## -->
                    <!-- <div class="all_content_box_3">
                        <div class="skill_section_box">
                            <div class="content">
                                <h1>
                                    <center>Puppet Enterprise Learning Path [Mockup #1]</center>
                                </h1>
                            </div>
                            <div class="timeline">
                                <div class="container left">
                                    <p>
                                        <i class="fa fa-code-fork" aria-hidden="true"></i>
                                    <div class="content">
                                        <h2>Git Basics</h2>
                                        <p>Visit <a href="https://learngitbranching.js.org/">this site</a> to learn about Git and become comfortable with basic Git practices</p>
                                    </div>
                                </div>
                                <div class="container right">
                                    <div class="content">
                                        <h2>Puppet Language Basics</h2>
                                        <p><a href="https://puppet.com/learning-training/kits/puppet-language-basics/">This self-paced course</a> will teach you the basics of understanding and writing Puppet code in less than thirty minutes.</p>
                                    </div>
                                </div>
                                <div class="container left">
                                    <div class="content">
                                        <h2>Puppet Practice Labs</h2>
                                        <p>Now you are ready to write some Puppet code in an <a href="https://learn.puppet.com/practicelabcatalog">interactive, browser based environment</a>.</p>
                                    </div>
                                </div>
                                <div class="container right">
                                    <div class="content">
                                        <h2>PE101: Deploy & Discover</h2>
                                        <p>At this point you are ready to take the in-person training and implement Puppet in your own environment.
                                        <p><i>Coming soon!</i></p>
                                        </p>
                                    </div>
                                </div>
                                <div class="container left">
                                    <div class="content">
                                        <h2>PE201: Design & Manage</h2>
                                        <p>Already have Puppet implemented? Learn best practices for designing and managing your environment.
                                        <p><i>Coming soon!</i></p>
                                    </div>
                                </div>
                                <div class="container right">
                                    <div class="content">
                                        <h2>Keep going!</h2>
                                        <p>The journey never ends. <a href="http://learn.puppet.com">Here are some resources</a> to keep you on your learning path.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ########################## Skills Section End ########################## -->
                </div>
            </div>
        </div>
    </div>
</div>