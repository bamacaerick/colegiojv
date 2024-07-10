<div class="row bg-dark-blue values-section justify-content-center">
    <div class="col-12">
        <p class="h2 text-center text-white pt-sans-narrow-bold">Misión – Visión – Valores</p>
    </div>

    <?php $first_value = get_field('first_value'); ?>
    <?php if($first_value): ?>
    <div class="col-10 col-sm-6 col-lg-4 d-flex align-items-center mb-2 mb-lg-0 values-section-col">
        <?php $first_value_image = get_field('first_value_image'); ?>
        <?php if($first_value_image): ?>
            <img src="<?php echo $first_value_image; ?>" alt="" class="values-section-image">
        <?php endif; ?>
        <?php $first_value_link = get_field('first_value_link'); ?>
        <?php if($first_value_link): ?>
            <a href="<?php echo $first_value_link; ?>" class="text-white values-section-item"><?php echo $first_value; ?></a>
        <?php else: ?>
            <span class="text-white values-section-item"><?php echo $first_value; ?></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php $second_value = get_field('second_value'); ?>
    <?php if($second_value): ?>
    <div class="col-10 col-sm-6 col-lg-4 d-flex align-items-center mb-2 mb-lg-0 values-section-col">
        <?php $second_value_image = get_field('second_value_image'); ?>
        <?php if($second_value_image): ?>
            <img src="<?php echo $second_value_image; ?>" alt="" class="values-section-image">
        <?php endif; ?>
        <?php if($second_value_link): ?>
            <a href="<?php echo $second_value_link; ?>" class="text-white values-section-item"><?php echo $second_value; ?></a>
        <?php else: ?>
            <span class="text-white values-section-item"><?php echo $second_value; ?></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php $third_value = get_field('third_value'); ?>
    <?php if($third_value): ?>
    <div class="col-10 col-sm-6 col-lg-4 d-flex align-items-center mb-2 mb-lg-0 values-section-col">
        <?php $third_value_image = get_field('third_value_image'); ?>
        <?php if($third_value_image): ?>
            <img src="<?php echo $third_value_image; ?>" alt="" class="values-section-image">
        <?php endif; ?>
        <?php if($third_value_link): ?>
            <a href="<?php echo $third_value_link; ?>" class="text-white values-section-item"><?php echo $third_value; ?></a>
        <?php else: ?>
            <span class="text-white values-section-item"><?php echo $third_value; ?></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php $fourth_value = get_field('fourth_value'); ?>
    <?php if($fourth_value): ?>
    <div class="col-10 col-sm-6 col-lg-4 d-flex align-items-center mb-2 mb-lg-0 values-section-col">
        <?php $fourth_value_image = get_field('fourth_value_image'); ?>
        <?php if($fourth_value_image): ?>
            <img src="<?php echo $fourth_value_image; ?>" alt="" class="values-section-image">
        <?php endif; ?>
        <?php if($fourth_value_link): ?>
            <a href="<?php echo $fourth_value_link; ?>" class="text-white values-section-item"><?php echo $fourth_value; ?></a>
        <?php else: ?>
            <span class="text-white values-section-item"><?php echo $fourth_value; ?></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php $fifth_value = get_field('fifth_value'); ?>
    <?php if($fifth_value): ?>
    <div class="col-10 col-sm-6 col-lg-4 d-flex align-items-center mb-2 mb-lg-0 values-section-col">
        <?php $fifth_value_image = get_field('fifth_value_image'); ?>
        <?php if($fifth_value_image): ?>
            <img src="<?php echo $fifth_value_image; ?>" alt="" class="values-section-image">
        <?php endif; ?>
        <?php if($fifth_value_link): ?>
            <a href="<?php echo $fifth_value_link; ?>" class="text-white values-section-item"><?php echo $fifth_value; ?></a>
        <?php else: ?>
            <span class="text-white values-section-item"><?php echo $fifth_value; ?></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php $sixth_value = get_field('sixth_value'); ?>
    <?php if($sixth_value): ?>
    <div class="col-10 col-sm-6 col-lg-4 d-flex align-items-center mb-2 mb-lg-0 values-section-col">
        <?php $sixth_value_image = get_field('sixth_value_image'); ?>
        <?php if($sixth_value_image): ?>
            <img src="<?php echo $sixth_value_image; ?>" alt="" class="values-section-image">
        <?php endif; ?>
        <?php if($sixth_value_link): ?>
            <a href="<?php echo $sixth_value_link; ?>" class="text-white values-section-item"><?php echo $sixth_value; ?></a>
        <?php else: ?>
            <span class="text-white values-section-item"><?php echo $sixth_value; ?></span>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>