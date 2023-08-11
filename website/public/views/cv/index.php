<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<!-- About Our Charity section start  -->
<div class="cv_main_section container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="left_side_cv">
                <div class="cv_main_color pb-4">
                    <div class="cv_img_box">
                        <img src="<?php echo URL . $this->getAboutPageDate['path'] . $this->getAboutPageDate['file']  ?>" class="cv_img" alt="...">
                        <!-- <img src="<?php echo URL ?>uploads/cv/pijush.jpeg" class="cv_img" alt="..."> -->
                    </div>
                    <h1 class="text-center text-white"><?php echo $this->getAboutPageDate['name']; ?></h1>
                    <h2 class="text-center text-white"><?php echo $this->getAboutPageDate['position']; ?></h2>
                </div>

                <div class="contact py-4">
                    <h1 class="text-center text-white py-3">CONTACT INFO</h1>
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
                    <!-- <div class="education_part d-flex justify-content-space-evenly align-items-center mt-3">
                        <span></span>
                        <h3>ADYTUMINFOTECH P.V.T L.T.D SOFTWARE COMPANY</h3>
                    </div>
                    <p class="px-5 pt-3 work_experience"> <strong>WEB DEVELOPER</strong> | 01/11/2021 - On Going</p>
                    <p class="px-5">I joined this Software Company in November and currently working
                        in this company as a Web Developer.
                    </p> -->
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
                            <!-- <div class="col-lg-3 col-md-5 col-sm-2 col-2">
                                <div class="gallery_img_box">
                                    <img src="<?php echo URL ?>uploads/cv/gallery.png" class="gallery_img" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-2 col-2">
                                <div class="gallery_img_box">
                                    <img src="<?php echo URL ?>uploads/cv/gallery.png" class="gallery_img" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-2 col-2">
                                <div class="gallery_img_box">
                                    <img src="<?php echo URL ?>uploads/cv/gallery.png" class="gallery_img" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-2 col-2">
                                <div class="gallery_img_box">
                                    <img src="<?php echo URL ?>uploads/cv/gallery.png" class="gallery_img" alt="...">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Our Charity section end -->