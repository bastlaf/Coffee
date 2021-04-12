    <footer>





        <?php the_field('instagram', 'option'); ?>


        <div class="boxHoraire" id="horaire">
            <!-- <h4>Horaires :</h4> -->
            <?php while( have_rows('horaire_repeater', 'option') ): the_row();?> 
                <div class="itemHoraire">
                    <p class="dayHoraire"> <?= get_sub_field( 'day' )?></p>
                    <div class="lineHoraire"></div>
                    <div class="boxHours">
                        <p class="hourOpen"> <?= get_sub_field( 'ouverture' )?>H</p>
                        <p class="hourLine">-</p>
                        <p class="hourClose"> <?= get_sub_field( 'fermeture' )?>H</p>
                    </div>
                </div>
            <?php endwhile; ?> 
        </div>

        <div class="facebookBox">
            <!-- <h4>Notre facebook :</h4> -->
            <?php the_field('facebook', 'option'); ?>
        </div>



    </footer>
    <?php wp_footer(); ?>

</body>

</html>