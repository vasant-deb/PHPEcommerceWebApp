

   <?php   
if(count($banners) > 0) { 
?>
  <section class="p-0">
    <div class="slide-1 home-slider">
	<?php 

foreach ($banners as $banner):
 $thumbImageurl = 'images/banners/'.$banner['Banner']['image'];
$Imageurl = "http://www.placehold.it/1920x683/EFEFEF/AAAAAA&amp;text=no+image";
$Imageurl = ($banner['Banner']['image'] != '')?$thumbImageurl:$Imageurl;
$name= $banner['Banner']['name'];
$url= $banner['Banner']['page_url'];
 
?>
        <div>
            <div class="home  text-center">
                <img src="<?php echo $thumbImageurl; ?>" alt="<?php echo $name; ?>" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>welcome to fashion</h4>
                                    <h1>men fashion</h1>
                                    <a href="<?php echo $url; ?>" class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
  <?php } ?>