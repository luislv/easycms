<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<?php echo template('system/cslide.html'); ?>


<div class="container">

<div class="blank30"></div>

<div class="t_1">
<div>
<h3><?php echo lang(sitemap);?></h3>
<p>Site Map</p>
</div>
</div>



<div class="blank30"></div>

<!-- 正文 -->
<?php if(is_array($archive) && !empty($archive))
foreach($archive as $row) { ?>
<a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['catname'];?></a><br />
<?php } ?>
<div class="blank20"></div>

<?php if(hasflash()) { ?>
<div style="color:red;font-size:16px;"><?php echo showflash(); ?></div><?php } ?>

<div class="blank30"></div>

</div>


<?php echo template('footer.html'); ?>