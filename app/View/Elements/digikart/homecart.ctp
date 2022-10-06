

		<?php ?>
 <?php echo $this->Html->script(['cart.js'], ['inline' => false]); ?>
<?php if($this->Session->read('Shop')) : ?>
			<ul class="show-div shopping-cart">
				    <?php $tabindex = 1; ?>
                           <?php foreach ($shop['OrderItem'] as $key => $item): ?>
                           <?php
                              $frontImageurl  = $this->Html->url('/images/products/'.$item['Product']['image']);
                                
                              $mods = 0;
                              if(isset($item['Product']['productmod_name'])) :
                              $mods = $item['Product']['productmod_id'];
                              
                             // $productmod_image = $item['Product']['productmod_image'];
                             // $frontImageurl  = $this->Html->url('/images/products/'.$productmod_image);
                              
                              ?>
                           <?php endif; ?>
                                            <li>
                                                <div class="media">
                                                    <a href="<?php echo $item['Product']['slug'];?>.html"><?php echo $this->Html->image('/images/products/' . $item['Product']['image'], ['class' => 'mr-3']); ?></a>
                                                    <div class="media-body">
                                                        <a href="<?php echo $item['Product']['slug'];?>.html">
                                                            <h4><?php echo $item['Product']['name'];?></h4>
                                                        </a>
                                                        <h4><span><?php echo $item['quantity']; ?> x $ <?php echo $item['price']; ?></span></h4>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                             <?php endforeach; ?>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span> <?php echo $shop['Order']['total']; ?></span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons"><a href="<?php echo $this->webroot;?>shop/cart" class="view-cart">view cart</a> <a href="<?php echo $this->webroot;?>" class="checkout">Continue Shopping</a></div>
                                            </li>
                                        </ul>
										<?php endif; ?>
										