<div class="row stats">
        <?php 
            $students_number = get_field('students_number');
            $students_text = get_field('students_text'); 
        ?>
        <?php if($students_number): ?>
            <div class="col-12 col-lg-4">
                <div class="stats-eleve text-center">
                    <span class="stats-eleve-icon"></span>
                    <p class="h1 m-0"><span class="counter" data-number="<?php echo $students_number; ?>">0</span></p>
                    <p class="stats-margin"><?php echo $students_text; ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php 
            $abroad_number = get_field('abroad_number'); 
            $abroad_text = get_field('abroad_text');
        ?>
        <?php if($abroad_number): ?>
            <div class="col-12 col-lg-4">
                <div class="stats-abroad text-center">
                    <span class="stats-abroad-icon"></span>
                    <p class="h1 m-0"><span class="counter" data-number="<?php echo $abroad_number; ?>">0</span>%</p>
                    <p class="stats-margin"><?php echo $abroad_text; ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php 
            $personnel_number = get_field('personnel_number'); 
            $personnel_text = get_field('personnel_text');
        ?>
        <?php if($personnel_number): ?>
            <div class="col-12 col-lg-4">
                <div class="stats-personal text-center">
                    <span class="stats-personal-icon"></span>
                    <p class="h1 m-0"><span class="counter" data-number="<?php echo $personnel_number; ?>">0</span></p>
                    <p class="stats-margin"><?php echo $personnel_text; ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>