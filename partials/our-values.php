<div class="row bg-dark-blue values-section">
    <div class="col-12">
        <p class="h2 text-center text-white pt-sans-narrow-bold">Misión – Visión – Valores</p>
    </div>

    <?php $first_value = get_field('first_value'); ?>
    <?php if($first_value): ?>
    <div class="col-6 col-lg-4 text-center">
        <span class="text-white values-section-item"><?php echo $first_value; ?></span>
    </div>
    <?php endif; ?>
    <?php $second_value = get_field('second_value'); ?>
    <?php if($second_value): ?>
    <div class="col-6 col-lg-4 text-center">
        <span class="text-white values-section-item"><?php echo $second_value; ?></span>
    </div>
    <?php endif; ?>
    <?php $third_value = get_field('third_value'); ?>
    <?php if($third_value): ?>
    <div class="col-6 col-lg-4 text-center">
        <span class="text-white values-section-item"><?php echo $third_value; ?></span>
    </div>
    <?php endif; ?>
    <?php $fourth_value = get_field('fourth_value'); ?>
    <?php if($fourth_value): ?>
    <div class="col-6 col-lg-4 text-center">
        <span class="text-white values-section-item"><?php echo $fourth_value; ?></span>
    </div>
    <?php endif; ?>
    <?php $fifth_value = get_field('fifth_value'); ?>
    <?php if($fifth_value): ?>
    <div class="col-6 col-lg-4 text-center">
        <span class="text-white values-section-item"><?php echo $fifth_value; ?></span>
    </div>
    <?php endif; ?>
    <?php $sixth_value = get_field('sixth_value'); ?>
    <?php if($sixth_value): ?>
    <div class="col-6 col-lg-4 text-center">
        <span class="text-white values-section-item"><?php echo $sixth_value; ?></span>
    </div>
    <?php endif; ?>
</div>