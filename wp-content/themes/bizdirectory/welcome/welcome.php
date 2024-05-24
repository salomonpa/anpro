<?php
/**
 * Welcome Page Template
 *
 * @package Your_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="theme-about-wrap">
    <div class="about-header">
        <div class="about-header-column">
            <h1><?php esc_html_e('Bizdirectory!', 'bizdirectory'); ?></h1>
            <span><?php esc_html_e('Best for Directory listing sites', 'bizdirectory'); ?></span>
        </div>
        <div class="about-header-column">
           <a class="btn btn-default btn2" target="_blank" href="<?php echo esc_url( 'https://demo.themesartist.com/bizdirectory' ) ?>"><?php esc_html_e('Get Bizdirectory Pro', 'bizdirectory'); ?></a>
            <a class="btn btn-default btn1" target="_blank" href="<?php echo esc_url( 'https://themesartist.com/docs-category/bizdirectory-free/' ) ?>"><?php esc_html_e('Documentation', 'bizdirectory'); ?></a>
        </div>

    </div>

    <div class="theme-content-wrap">
        <div class="theme-content-column">
            <h2><?php esc_html_e('Setup Homepage without Importing Demo Content', 'bizdirectory'); ?></h2>
            <p> <?php esc_html_e('1. Create a Page', 'bizdirectory'); ?>
            <br>
            <?php esc_html_e('2. And in right sidebar select Homepage Template in Page attributes.', 'bizdirectory'); ?>
             <br>
            <?php esc_html_e('3. Goto Settings > Reading > Choose Static page.', 'bizdirectory'); ?>
             <br>
            <?php esc_html_e('4. Select page and save.', 'bizdirectory'); ?>
            <br>
             <?php esc_html_e('5. Goto Appearance > Install Plugins and Install all Recommended Plugins.', 'bizdirectory'); ?>
            <br>
             <br>
             <span class="add-border"><?php esc_html_e('Now follow "Editing Homepage" Action (last column)', 'bizdirectory'); ?></span>
            </p>
        </div>

        <div class="theme-content-column">
            <h2><?php esc_html_e('Or Import Demo Content', 'bizdirectory'); ?></h2>
            <p> <?php esc_html_e('1.  Goto Appearance > Install Plugins and Install all Recommended Plugins', 'bizdirectory'); ?>
            <br>
            <?php esc_html_e('2. Download Themes Artist Demo Importer plugin from here and download the zip file', 'bizdirectory'); ?>
            <br>
            <?php esc_html_e('3. Goto Dashboard > Plugins > Add New Plugin and upload and activate the above downloaded plugin zip file ', 'bizdirectory'); ?>
            <br>
            <?php esc_html_e('4. Goto Appearance > Import demo Data and import demo content from there', 'bizdirectory'); ?>
             <br>
            <?php esc_html_e('5. Your Site is now ready.', 'bizdirectory'); ?>
             <br>
             <br>
            <span class="add-border"><?php esc_html_e('Now follow "Editing Homepage" Action (last column)', 'bizdirectory'); ?></span>
            </p>
        </div>

        <div class="theme-content-column">
            <h2><?php esc_html_e('Editing Homepage', 'bizdirectory'); ?></h2>
            <p> <?php esc_html_e('Go to Apearance > Customizer > Theme Options and you can edit and add all Homepage Content', 'bizdirectory'); ?>
            </p>
            <a class="btn btn-default" href="<?php echo esc_url( admin_url( 'customize.php' ) ) ?>"><?php esc_html_e('Go to Customizer', 'bizdirectory'); ?></a>
           
           
        </div>

    </div>

    <div class="tab-section">
          <h2><?php esc_html_e('More About bizdirectory', 'bizdirectory'); ?></h2>
        <div class="theme-content-wrap">
            <div class="col-md-7">
              <div class="tab-container">
                <div class="tabs">
                  <button class="tab active"><?php esc_html_e('Important Links', 'bizdirectory'); ?></button>
                  <button class="tab"> <?php esc_html_e("FAQ's & Support", 'bizdirectory'); ?></button>
                  <button class="tab"> <?php esc_html_e('Free Vs Pro', 'bizdirectory'); ?></button>
                </div>
                <div class="tab-content">

                  <div class="gre-box">
                    <h3><?php esc_html_e('Bizdirectory (Free) Demo ', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('Checkout the demo to gain a better understanding of our theme design and its features.', 'bizdirectory'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url( 'https://demo.themesartist.com/bizdirectory/' ) ?>"><?php esc_html_e('View Demo', 'bizdirectory'); ?></a>
                  </div>

                  <div class="gre-box">
                    <h3><?php esc_html_e('Bizdirectory (Pro) Demo ', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('Checkout the demo of the premium version of Bizdirectory, It is awesome.', 'bizdirectory'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url( 'https://demo.themesartist.com/bizdirectorypro/' ) ?>"><?php esc_html_e('View Demo', 'bizdirectory'); ?></a>
                  </div>

                  <div class="gre-box">
                    <h3><?php esc_html_e('View Our Documentation', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('Explore our tutorials and embark on a journey of effortless theme customization. Our Documentation provides valuable insights into every aspect of theme functionality, empowering you to create a website that reflects your vision with confidence.', 'bizdirectory'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url( 'https://themesartist.com/docs-category/bizdirectory-free/' ) ?>"><?php esc_html_e('View Documentation', 'bizdirectory'); ?></a>
                  </div>

                  <div class="gre-box">
                    <h3><?php esc_html_e('Support Ticket', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('Whether you encounter technical challenges, have inquiries about customization, or seek guidance on maximizing theme features, Send ticket via our Support Portal and we will get back to you asap.', 'bizdirectory'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url( 'https://themesartist.com/support-portal/' ) ?>"><?php esc_html_e('Contact Support', 'bizdirectory'); ?></a>
                  </div>


                </div>
                <div class="tab-content hidden">
                   <div class="accordion">
                  <input id="toggle1" type="radio" class="accordion-toggle" name="toggle" />
                  <label for="toggle1"><?php esc_html_e('Should I buy Premium version?', 'bizdirectory'); ?></label>
                  <section>
                    <p><?php esc_html_e('Sure, Premium Version comes with much more features which is one of the reason you should buy premium version. With the premium theme, you not only receive extra features and consistent updates but also benefit from dedicated and prompt support.', 'bizdirectory'); ?>
                    
                    </p>
                  </section>
                </div>

                <div class="accordion">
                  <input id="toggle2" type="radio" class="accordion-toggle" name="toggle" />
                  <label for="toggle2"><?php esc_html_e('I can only add couple of social links in my website. How can I add more ?', 'bizdirectory'); ?></label>
                  <section>
                          <p><?php esc_html_e('There are 2 options, you can either get the premium version or you can modify the codes and add yourself. Remember to add the changes in child theme always.', 'bizdirectory'); ?>
                    
                    </p>
                  </section>
                </div>

                <div class="accordion">
                  <input id="toggle3" type="radio" class="accordion-toggle" name="toggle" />
                  <label for="toggle3"><?php esc_html_e('How do I change the copyright text?', 'bizdirectory'); ?></label>
                  <section>
                    <p>
                    <?php esc_html_e('If you wish to change the copyright text, consider upgrading to the Premium version.', 'bizdirectory'); ?>
                    </p>
                  </section>
                </div>

                <div class="accordion">
                  <input id="toggle4" type="radio" class="accordion-toggle" name="toggle" />
                  <label for="toggle4"><?php esc_html_e('How can I get support?', 'bizdirectory'); ?></label>
                  <section>
                    <p>
                   <?php esc_html_e('For any theme related queries or support, Please submit the tickt through our support portal https://themesartist.com/support-portal/ or email us here mail.themesartist@gmail.com and one of our developer will getback to you asap.', 'bizdirectory'); ?>
                    </p>
                  </section>
                </div>
                </div>
                <div class="tab-content hidden">
                        <table>
                          <tr>
                            <th><?php esc_html_e('Features', 'bizdirectory'); ?></th>
                            <th><?php esc_html_e('Free Version', 'bizdirectory'); ?></th>
                            <th><?php esc_html_e('Premium Version', 'bizdirectory'); ?></th>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Responsive Design', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Easy Setup', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('One Click Demo Import', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('SEO Optimized', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Cross Browser Compatible', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Translation Ready', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Fully Elementor Compatible', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Change Footer Copyright', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('More Homepage Features', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Beautiful Listing Pages', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Better Home Page Design', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                          <tr>
                            <td><?php esc_html_e('Multiple Social Links', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>
                          <tr>
                            <td><?php esc_html_e('Priority Support', 'bizdirectory'); ?></td>
                            <td><span class="yes-tick no"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                        </svg></span></td>
                            <td><span class="yes-tick"><svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                        </svg></span></td>
                          </tr>

                        </table>
                </div>
              </div>
            </div>

            <div class="col-md-5">
    <div class="gre-box side">
                      <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M17.684,7.925l-5.131-0.67L10.329,2.57c-0.131-0.275-0.527-0.275-0.658,0L7.447,7.255l-5.131,0.67C2.014,7.964,1.892,8.333,2.113,8.54l3.76,3.568L4.924,17.21c-0.056,0.297,0.261,0.525,0.533,0.379L10,15.109l4.543,2.479c0.273,0.153,0.587-0.089,0.533-0.379l-0.949-5.103l3.76-3.568C18.108,8.333,17.986,7.964,17.684,7.925 M13.481,11.723c-0.089,0.083-0.129,0.205-0.105,0.324l0.848,4.547l-4.047-2.208c-0.055-0.03-0.116-0.045-0.176-0.045s-0.122,0.015-0.176,0.045l-4.047,2.208l0.847-4.547c0.023-0.119-0.016-0.241-0.105-0.324L3.162,8.54L7.74,7.941c0.124-0.016,0.229-0.093,0.282-0.203L10,3.568l1.978,4.17c0.053,0.11,0.158,0.187,0.282,0.203l4.578,0.598L13.481,11.723z"></path>
            </svg>
                    <h3><?php esc_html_e('Checkout Bizdirectory Premium Version', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('Bizdirectory Premium version comes with lot more features and better designs. Also We provide priority support to Premium version users.', 'bizdirectory'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url( 'https://demo.themesartist.com/bizdirectory' ) ?>"><?php esc_html_e('Get Bizdirectory Pro', 'bizdirectory'); ?></a>
                  </div>

                    <div class="gre-box side">
                      <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
            </svg>
                    <h3><?php esc_html_e('Need more features added to the theme?', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('If you require additional functionality or would like to customize the design to suit your needs, please fill out the form from the link below. We will contact you shortly. Please be as descriptive as possible.', 'bizdirectory'); ?></p>
                    <a class="btn btn-default" target="_blank" href="<?php echo esc_url( 'https://themesartist.com/contact/' ) ?>"><?php esc_html_e('Request Customization', 'bizdirectory'); ?></a>
                  </div>

                    <div class="gre-box side">
                      <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M9.719,17.073l-6.562-6.51c-0.27-0.268-0.504-0.567-0.696-0.888C1.385,7.89,1.67,5.613,3.155,4.14c0.864-0.856,2.012-1.329,3.233-1.329c1.924,0,3.115,1.12,3.612,1.752c0.499-0.634,1.689-1.752,3.612-1.752c1.221,0,2.369,0.472,3.233,1.329c1.484,1.473,1.771,3.75,0.693,5.537c-0.19,0.32-0.425,0.618-0.695,0.887l-6.562,6.51C10.125,17.229,9.875,17.229,9.719,17.073 M6.388,3.61C5.379,3.61,4.431,4,3.717,4.707C2.495,5.92,2.259,7.794,3.145,9.265c0.158,0.265,0.351,0.51,0.574,0.731L10,16.228l6.281-6.232c0.224-0.221,0.416-0.466,0.573-0.729c0.887-1.472,0.651-3.346-0.571-4.56C15.57,4,14.621,3.61,13.612,3.61c-1.43,0-2.639,0.786-3.268,1.863c-0.154,0.264-0.536,0.264-0.69,0C9.029,4.397,7.82,3.61,6.388,3.61"></path>
            </svg>
                    <h3><?php esc_html_e('Love the Bizdirectory Theme?', 'bizdirectory'); ?></h3>
                    <p><?php esc_html_e('Support us by giving 5 star, just takes a few minutes to add a review. It will be very helpful for us.', 'bizdirectory'); ?></p>
        <a class="btn btn-default btn1" target="_blank" href="<?php echo esc_url( 'https://wordpress.org/support/theme/bizdirectory/reviews/#new-post' ) ?>"><?php esc_html_e('Add a Review', 'bizdirectory'); ?></a>
                  </div>


            </div>
        </div>
    </div>

    <!-- Add your content here -->

</div>






