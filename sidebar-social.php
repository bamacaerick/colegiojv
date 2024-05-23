 <?php global $HOMEID; ?>
 <div class="sidebar-social-wrapper">
     <div class="sidebar-social">
         <p class="pt-sans-narrow-bold sidebar-social-heading">SÍGANOS</p>
         <?php 
             $homeId = $HOMEID;
             $fb_link = get_field('facebook_page_link', $homeId);
             $tw_link = get_field('x_twitter_profile_link', $homeId);
             $lin_link = get_field('linkedin_profile_link', $homeId);
             $ig_link = get_field('instagram_profile_link', $homeId);
             $yt_link = get_field('youtube_profile_link', $homeId);
         ?>
         <?php if ($tw_link): ?>
             <a href="<?php echo $tw_link; ?>" class="social-icon-sidebar social-icon-sidebar-x"><span class="sr-only">X</span></a>
         <?php endif; ?>
         <?php if ($lin_link): ?>
             <a href="<?php echo $lin_link; ?>" class="social-icon-sidebar social-icon-sidebar-lin"><span class="sr-only">LinkedIn</span></a>
         <?php endif; ?>
         <?php if ($ig_link): ?>
             <a href="<?php echo $ig_link; ?>" class="social-icon-sidebar social-icon-sidebar-ig"><span class="sr-only">Instagram</span></a>
         <?php endif; ?>
         <?php if ($yt_link): ?>
             <a href="<?php echo $yt_link; ?>" class="social-icon-sidebar social-icon-sidebar-yt"><span class="sr-only">YouTube</span></a>
         <?php endif; ?>
     </div>
 </div>