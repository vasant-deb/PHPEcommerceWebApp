<?php ?>
<div class="container-fluid main-content">
    <div class="page-title">
      <h1> Update Product </h1>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
          <div class="heading"> <i class="fa fa-reorder"></i>Product Details </div>
          <div class="widget-content padded">
            <?php
			echo $this->Form->create('Product',array('enctype'=>'multipart/form-data','class' => 'form-horizontal'));
			 echo $this->Form->input('id');
		  ?>
		    
			
			 
		    
<div class="form-group">
<label for="site_name" class="col-sm-2 control-label">Select Category</label>
<div class="col-sm-4">
<?php echo $this->Form->input('category_id', array('class'=>'form-control col-md-3','label'=>'','empty' => true));?>	
</div> 

<label for="site_name" class="col-sm-2 control-label">Product Stock</label>
<div class="col-sm-4">
<?php echo $this->Form->input('product_stock', array('class'=>'form-control col-md-3','label'=>'','min' => '0'));?>	
</div>

</div>

<div class="form-group">
<label class="control-label col-md-2">Product Name</label>
<div class="col-md-4">
<?php echo $this->Form->input('name', array('class'=>'form-control col-md-3','label'=>''));?>	
</div>

<label class="control-label col-md-2">Title</label>
<div class="col-md-4">
<?php echo $this->Form->input('product_alt', array('class'=>'form-control col-md-3','label'=>''));?>	
</div>
</div>


<div class="form-group">
<label class="control-label col-md-2">Price</label>
<div class="col-md-4">
<?php echo $this->Form->input('price', array('class'=>'form-control col-md-3','label'=>'', 'min' => '1'));?>	
</div>

<label class="control-label col-md-2">Discounted Price</label>
<div class="col-md-4">
<?php echo $this->Form->input('discounted_price', array('class'=>'form-control col-md-3','label'=>'', 'min' => '0'));?>	
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2">Composition</label>
<div class="col-md-4">

<?php echo $this->Form->input('fit', array('class'=>'form-control col-md-3','label'=>'', 'min' => '1'));?>	
</div>

<label class="control-label col-md-2">Properties</label>
<div class="col-md-4">

<?php echo $this->Form->input('length', array('class'=>'form-control col-md-3','label'=>'', 'min' => '0'));?>	
</div>
</div>

<div class="form-group">


<label class="control-label col-md-2">STYLE </label>
<div class="col-md-4">

<?php echo $this->Form->input('style', array('class'=>'form-control col-md-3','label'=>'', 'min' => '0'));?>	
</div>


<label class="control-label col-md-2">Product Tag Line</label>
<div class="col-md-4">

<?php echo $this->Form->input('tagline', array('class'=>'form-control col-md-3','label'=>''));?>	
</div>


</div>
 

<div class="form-group">
<label class="control-label col-md-2">Size </label>
 
<div class="col-sm-6">  			 
<?php
    foreach ($sizes as $size_item):
  	$product_sizes = explode(',',$this->data['Product']['sizes']);
  ?>  
<label class="col-sm-2"><input type="checkbox" name="data[Product][sizes][]" value="<?php echo h($size_item['Size']['id']); ?>" <?php if(in_array($size_item['Size']['id'],$product_sizes)) { echo "checked"; } ?>>
<span><?php echo h($size_item['Size']['name']); ?></span>
</label>              
<?php endforeach;  ?>
	</div>
</div>

<div class="form-group">
<label class="control-label col-md-2">Materials </label>
 
<div class="col-sm-6">  			 

<?php echo $this->Form->input('material_id', array('class'=>'form-control col-md-3','label'=>'','empty' => true));?>	        

	</div>
</div>

<div class="form-group">
<label class="control-label col-md-2">Color</label>
 <div class="col-sm-6">  
<?php 
	foreach ($colors as $color_item):
 	$product_colors = explode(',',$this->data['Product']['colors']);
?>  
<label class="col-sm-2"><input type="checkbox" name="data[Product][colors][]" value="<?php echo h($color_item['Color']['id']); ?>" <?php if(in_array($color_item['Color']['id'],$product_colors)) { echo "checked"; } ?>>
<span><?php echo h($color_item['Color']['name']); ?></span>
</label>              
<?php endforeach;  ?>
</div>	
</div>	
	
<?php
				 
				$thumbImageurl = $this->Html->url('/images/products/'.$this->data['Product']['image']);
				$Imageurl = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
				
				$Imageurl = ($this->data['Product']['image'] != '')?$thumbImageurl:$Imageurl;
				
				 				
				$thumbbackImageurl = $this->Html->url('/images/products/'.$this->data['Product']['back_image']);
				$Imagebackurl = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
				
				$Imagebackurl = ($this->data['Product']['back_image'] != '')?$thumbbackImageurl:$Imagebackurl;
								
				?>

<div class="form-group">
 
<label class="control-label col-md-2">Image</label>
<div class="col-md-4">
<div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new img-thumbnail" style="width: 250px;"> <img src="<?php echo $Imageurl;?>" class="img-responsive"> </div>
                    <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                    <div> <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
 					  <input type="file" name="data[Product][image]" id="ServiceThumb">
                      </span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a> </div>
                  </div>
</div>   



<label class="control-label col-md-2">Back Image</label>
<div class="col-md-4">
<div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new img-thumbnail" style="width: 250px;"> <img src="<?php echo $Imagebackurl;?>" class="img-responsive"> </div>
                    <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                    <div> <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
 					  <input type="file" name="data[Product][back_image]" id="Serviceback_imageThumb">
                      </span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a> </div>
                  </div>
</div>  

</div>


<!--
<label class="control-label col-md-2">Weight ( In Grams) </label>
<div class="col-md-4">
<?php echo $this->Form->input('weight', array('class'=>'form-control col-md-3','label'=> '', 'min' => '0'));?>	
</div>
-->

			<div class="form-group">
			<label class="control-label col-md-2">Status</label>
			<div class="col-md-4">
			<label class="radio-inline">
			<input type="radio" name="data[Product][active]" value="1" <?php if($this->data['Product']['active'] == 1) { echo 'checked'; } ?>>
			<span>Active</span></label>
			<label class="radio-inline">
			<input type="radio" name="data[Product][active]" value="0" <?php if($this->data['Product']['active'] == 0) { echo 'checked'; } ?>>
			<span>Inactive</span></label>
			<label class="radio">
			</div>
			
			<label class="control-label col-md-2">New Arrival</label>
			<div class="col-md-4">
			<label class="radio-inline">
			<input type="radio" name="data[Product][newarrival]" value="1" <?php if($this->data['Product']['newarrival'] == 1) { echo 'checked'; } ?>>
			<span>New</span></label>
			<label class="radio-inline">
			<input type="radio" name="data[Product][newarrival]" value="0" <?php if($this->data['Product']['newarrival'] == 0) { echo 'checked'; } ?>>
			<span>Not New</span></label>
			<label class="radio">
			</div>
			
		
			<label class="control-label col-md-2">Feature Product</label>
			<div class="col-md-4">
			<label class="radio-inline">
			<input type="radio" name="data[Product][hot_product]" value="1" <?php if($this->data['Product']['hot_product'] == 1) { echo 'checked'; } ?>>
			<span>Yes</span></label>
			<label class="radio-inline">
			<input type="radio" name="data[Product][hot_product]" value="0" <?php if($this->data['Product']['hot_product'] == 0) { echo 'checked'; } ?>>
			<span>No</span></label>
			<label class="radio">
			</div>
			
			</div>
 
			  	 
			   <div class="form-group">
                
				  <label class="control-label col-md-2">Description</label>
                <div class="col-md-8">
				 
					 <?php echo $this->Form->input('description', array('class'=>'form-control ckeditor col-md-3','label'=>''));?>	
                </div>
              </div>
			  
			  <div class="form-group">
                
				  <label class="control-label col-md-2">HOW TO CARE?</label>
                <div class="col-md-8">
				 
					 <?php echo $this->Form->input('short_description', array('class'=>'form-control ckeditor col-md-3','label'=>''));?>	
                </div>
              </div>
			  
			  <div class="form-group">
            <label class="control-label col-md-2">Meta Title</label>
            <div class="col-md-8"> <?php echo $this->Form->input('meta_title', array('class'=>'form-control col-md-3','label'=>''));?> </div>
          </div>
		  
		  <div class="form-group">
            <label class="control-label col-md-2">Meta Description</label>
            <div class="col-md-8"> <?php echo $this->Form->input('meta_desc', array('class'=>'form-control col-md-3','label'=>''));?> </div>
          </div>
		  
          <div class="form-group">
            <label class="control-label col-md-2">Meta Keyword</label>
            <div class="col-md-8"> <?php echo $this->Form->input('meta_keyword', array('class'=>'form-control col-md-3','label'=>''));?> </div>
          </div>
			  
                  <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-5">
                  <button class="btn btn-primary" type="submit">Submit</button>
 				   <?php 
		   echo $this->Html->link("Cancel",
		   array( 'controller' => 'products', 'action' => 'index', 'admin' => true),
		    array('escape' => FALSE,'class' => 'btn btn-default-outline')); 
			?>
                </div>
              </div>
           <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>
	  </div>
  
   