<?php 

global $HOMEID; 

$calendar_link = get_field('calendar_link', $HOMEID);

?>
<div class="sidebar-special mb-5">
    <div class="sidebar-special-calendar text-center">
        <h4 class="sidebar-special-calendar-heading text-uppercase text-gray">Calendario</h4>
        <p class="sidebar-special-calendar-body text-gray">Consulte su calendario escolar de eventos del liceo 
            <?php if($calendar_link) :?>
                <a href="<?php echo $calendar_link; ?>">aquí</a>
            <?php endif; ?>
        </p>
    </div>
    <!-- <a href="#" class="sidebar-special-platform pt-sans-narrow-bold text-uppercase h4">Zone Utilisateur</a> -->
</div>