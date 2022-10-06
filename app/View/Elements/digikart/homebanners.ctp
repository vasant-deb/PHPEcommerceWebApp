<?php ?>

<section class="pb-0 ratio2_1">
    <div class="container">
        <div class="row partition2">
		 <?php foreach($homepages1 as $home1): ?>
            <div class="col-md-6">
                <a href="#">
                    <div class="collection-banner p-right text-center">
                        <div class="img-part">
                            <img src="images/homepages/<?php echo $home1['Homepage']['image']; ?>" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner">
                            <div>
							
                                <h4><?php echo $home1['Homepage']['text1']; ?></h4>
                                <h2><?php echo $home1['Homepage']['text2']; ?></h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
			<?php endforeach ;?>
			 <?php foreach($homepages2 as $home2): ?>
            <div class="col-md-6">
                <a href="#">
                    <div class="collection-banner p-right text-center">
                        <div class="img-part">
                            <img src="images/homepages/<?php echo $home2['Homepage']['image']; ?>" class="img-fluid blur-up lazyload bg-img" alt="">
                        </div>
                        <div class="contain-banner">
                            <div>
							<h3><?php echo $home2['Homepage']['text1']; ?></h3>
                                <h4><?php echo $home2['Homepage']['text2']; ?></h4>
                                <h2><?php echo $home2['Homepage']['text3']; ?></h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
			<?php endforeach;?>
        </div>
    </div>
</section>



