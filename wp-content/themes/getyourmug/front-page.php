<?php get_header(); ?>

<section class="section1" id="Menu">

    <?php while( have_rows('section_menu') ): the_row();?> 
        <h3 data-aos="fade-up" data-aos-duration="900"><?= get_sub_field('sous-titre_menu'); ?></h3>
        <h2 data-aos="zoom-in" data-aos-delay="400" data-aos-duration="900"><?= get_sub_field('titre_menu'); ?></h2>
        <div class="boxMenu">


            <?php while( have_rows('sous_section_repeater') ): the_row();?> 
                <h4 class="titleSectionItems" data-aos="fade-up" data-aos-delay="400"><?= get_sub_field( 'title_section' )?></h4>
                

                <div class="boxItems">
                    <?php while( have_rows('menu_item') ): the_row();?> 
                        <div class="menuItem" data-aos="flip-up">
                            <img src="<?= get_sub_field( 'item_image' )?>" class="imgItem"></img>
                            <div class="itemD">
                                <div class="itemLineTop">
                                    <p class="ItemName"><?= get_sub_field('item_name'); ?></p>
                                    <div class="ItemLine"></div>
                                    <p class="itemPrice"><?= get_sub_field('item_prix'); ?>€</p>
                                </div>
                                <div class="itemLineBottom"><?= get_sub_field('item_description'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>


            <?php endwhile; ?>



        </div>
    <?php endwhile; ?>

</section>


<section class="section2" id="Story">
    
    <?php echo file_get_contents(get_template_directory_uri() . "/img/dechirure.svg") ?>

    <h3 data-aos="fade-up" data-aos-duration="600"><?php the_field('titre_histoire'); ?></h3>
    <div class="boxStory">
        <?php the_field('paragraphe_histoire'); ?>
    </div>

</section>

<section class="section3" style= "background-image: url(<?= get_field( 'image_de_fond' )?>);">
</section>

<section class="section4">
    <div class="boxStory">
            <?php the_field('paragraphe_histoire_2'); ?>
    </div>


</section>

<section class="section5" id="map">
<img src="<?php bloginfo('template_url'); ?>/img/pexels-helena-lopes-887723.jpg" alt="" class="fond1">
<img src="<?php bloginfo('template_url'); ?>/img/pexels-quang-nguyen-vinh-2159074.jpg" alt="" class="fond2">
<h3 data-aos="fade-up" data-aos-duration="600">Où nous trouver ?</h3>
    
    <div class="boxMap">
        <?php while( have_rows('map_repeater') ): the_row();?> 
            <div class="cardMap" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="800">
                <div class="adresseMap leaflet"><?= get_sub_field( 'carte' )?></div>
                <h4 class="adresseMap carteRue"><?= get_sub_field( 'carte_rue' )?></h4>
                <h4 class="adresseMap carteAdresse"><?= get_sub_field( 'carte_adresse' )?></h4>
                <h4 class="adresseMap carteMail"><?= get_sub_field( 'mail' )?></h4>
                <h4 class="adresseMap carteTelephone"><?= get_sub_field( 'telephone' )?></h4>
            </div>
        <?php endwhile; ?>
    </div>


</section>


<?php get_footer(); ?>