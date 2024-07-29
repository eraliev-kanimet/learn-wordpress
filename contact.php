<?php
/*
 Template Name: Contact
 */

get_header();

get_template_part('components/hero', null, [
    'header' => 'Get In Touch<span>.</span>',
    'text' => 'Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu.',
])

//do_shortcode('[contact-form-7 id="68df66a" title="contact-form-7"]')
//do_shortcode('[ninja_form id=2]')

?>

<div class="content-outer">

    <div id="page-content" class="row page">

        <div id="primary" class="eight columns">

            <section>

                <h1>Hello. Let's talk.</h1>

                <p class="lead">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi
                    elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a
                    sit amet mauris. Morbi accumsan ipsum velit.
                </p>

                <div id="contact-form">

                    <form
                            name="contactForm"
                            id="contactForm"
                            method="post"
                            action="<?= admin_url('admin-ajax.php?action=sparrow_ajax_contact_form') ?>"
                    >
                        <fieldset>

                            <div class="half">
                                <label for="contactName">Name <span class="required">*</span></label>
                                <input name="contactName" type="text" id="contactName" size="35" value=""/>
                            </div>

                            <div class="half pull-right">
                                <label for="contactEmail">Email <span class="required">*</span></label>
                                <input name="contactEmail" type="email" id="contactEmail" size="35" value=""/>
                            </div>

                            <div>
                                <label for="contactSubject">Subject</label>
                                <input name="contactSubject" type="text" id="contactSubject" size="35" value=""/>
                            </div>

                            <div>
                                <label for="contactMessage">Message <span class="required">*</span></label>
                                <textarea name="contactMessage" id="contactMessage" rows="15" cols="50"></textarea>
                            </div>

                            <div>
                                <button class="submit">Submit</button>
                            </div>

                        </fieldset>
                    </form>

                    <div id="message-warning"></div>
                    <div id="message-success">
                        <i class="icon-ok"></i>Your message was sent, thank you!<br/>
                    </div>

                </div>

            </section>

        </div>

        <div id="secondary" class="four columns end">
            <?php get_sidebar() ?>
        </div>

    </div>

</div>

<?php

get_template_part('components/tweets');

get_footer();

?>
