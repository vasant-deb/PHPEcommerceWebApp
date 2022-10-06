
<?php ?>

<section class="p-0">
 <?php foreach($homepages3 as $home1): ?>
    <div class="full-banner parallax text-center p-left">
        <img src="images/homepages/<?php echo $home1['Homepage']['image']; ?>" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2><?php echo $home1['Homepage']['text1']; ?></h2>
                        <h3><?php echo $home1['Homepage']['text2']; ?></h3>
                        <h4><?php echo $home1['Homepage']['text3']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php endforeach ;?>
</section>
