<?php
// xem_arr($data);
?>
	<style>
	.page-banner-area {
		background: rgba(0, 0, 0, 0) url(http://localhost/laptopbaongoc_mvc/file/1920-400-1.jpg) no-repeat scroll center center;
	}
	</style>
	
		<section class="page-content">
			<!-- PAGE-BANNER START -->
			<div class="page-banner-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-banner-menu">
								<h2 class="page-banner-title">Shop</h2>
								<ul>
									<li><a href="">Home</a></li>
									<li><a href="">Shop Grid</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- PAGE-BANNER END -->
			<!-- SHOP-AREA START -->
			<div class="shop-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<span class="shop-border"></span>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<!-- widget-categories start -->
							<aside class="widget widget-categories">
								<h5>Search</h5>
								<ul>
									<li><a href="#">Mens</a></li>
									<li><a href="#">Womens</a></li>
									<li><a href="#">T-shirt</a></li>
									<li><a href="#">Hoodies</a></li>
									<li><a href="#">Tops</a></li>
									<li><a href="#">Basics</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Modern Classics</a></li>
								</ul>
							</aside>
							<!-- widget-categories end -->
							<!-- shop-filter start -->
							<aside class="widget shop-filter">
								<h3 class="sidebar-title">price</h3>
								<div class="info_widget">
									<div id="slider-range"></div>
									<div id ="amount">
										<input type ="text" name ="first_price" class="first_price" />
										<input type ="text" name ="last_price" class="last_price"/>
									</div>
									<button class="shop-now">Filter</button>
								</div>						
							</aside>
							<!-- shop-filter end -->
							<!-- widget-color start -->
							<aside class="widget widget-color">
								<h5 class="sidebar-title">colore</h5>
								<ul>
									<li><a class="color-1" href="#"></a></li>
									<li><a class="color-2" href="#"></a></li>
									<li><a class="color-3" href="#"></a></li>
									<li><a class="color-4" href="#"></a></li>
									<li><a class="color-5" href="#"></a></li>
								</ul>
							</aside>
							<!-- widget-color end -->
							<!-- widget-brand start -->
							<aside class="widget widget-brand">
								<h5 class="sidebar-title">Brand</h5>
								<ul>
									<li><input type="checkbox" /><a href="#">Country Road</a></li>
									<li><input type="checkbox" /><a href="#">H&M Home</a></li>
									<li><input type="checkbox" /><a href="#">Urban outfitters</a></li>
									<li><input type="checkbox" /><a href="#">Zara home</a></li>
								</ul>
							</aside>
							<!-- widget-brand end -->
							<!-- widget-top-brand start -->
							<aside class="widget top-rated hidden-sm">
								<h5 class="sidebar-title">top rated</h5>
								<div class="sidebar-product">
									<!-- Single-product start -->
									<div class="single-product">
										<div class="product-photo">
											<a href="#">
												<img class="primary-photo" src="<?=template_user3_path?>/img/sidebar/1.png" alt=""/> 
											</a>
										</div>
										<div class="product-brief">
											<h2><a href="#">Randomised Words</a></h2>
											<h3>$500.00 <span>$244.00</span></h3>
										</div>
									</div>	
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="single-product">
										<div class="product-photo">
											<a href="#">
												<img class="primary-photo" src="<?=template_user3_path?>/img/sidebar/2.png" alt=""/> 
											</a>
										</div>
										<div class="product-brief">
											<h2><a href="#">CLEO POURER</a></h2>
											<h3>$500.00 <span>$244.00</span></h3>
										</div>
									</div>	
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="single-product">
										<div class="product-photo">
											<a href="#">
												<img class="primary-photo" src="<?=template_user3_path?>/img/sidebar/3.png" alt=""/> 
											</a>
										</div>
										<div class="product-brief">
											<h2><a href="#">TAM SPREADER</a></h2>
											<h3>$500.00 <span>$244.00</span></h3>
										</div>
									</div>	
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="single-product">
										<div class="product-photo">
											<a href="#">
												<img class="primary-photo" src="<?=template_user3_path?>/img/sidebar/4.png" alt=""/> 
											</a>
										</div>
										<div class="product-brief">
											<h2><a href="#">MARCEL THROW</a></h2>
											<h3>$500.00 <span>$244.00</span></h3>
										</div>
									</div>	
									<!-- Single-product end -->
									<!-- Single-product start -->
									<div class="single-product">
										<div class="product-photo">
											<a href="#">
												<img class="primary-photo" src="<?=template_user3_path?>/img/sidebar/5.png" alt=""/> 
											</a>
										</div>
										<div class="product-brief">
											<h2><a href="#">RLIE EXTRA SMALL</a></h2>
											<h3>$500.00 <span>$244.00</span></h3>
										</div>
									</div>	
									<!-- Single-product end -->
								</div>
							</aside>
							<!-- widget-top-brand end -->
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<!-- Shop-Content start -->
							<div class="shop-content">
								<!-- product-toolbar start -->
								<div class="product-toolbar">
									<!-- Shop-menu -->
									<div class="shop-menu view-mode">
										<a class="grid-view active" href="#grid-view" data-toggle="tab"><i class="sp-grid-view"></i></a>
										<a class="list-view" href="#list-view" data-toggle="tab"><i class="sp-list-view"></i></a>
									</div>
									<div class="short-by hidden-xs">
										<span>short by</span>
										<select class="shop-select">
											<option value="1">default</option>
											<option value="1">default</option>
											<option value="1">default</option>
											<option value="1">default</option>
											<option value="1">default</option>
										</select>
									</div>
									<div class="short-by showing hidden-xs">
										<span>showing</span>
										<select class="shop-select">
											<option value="1">9</option>
											<option value="1">15</option>
											<option value="1">24</option>
											<option value="1">30</option>
											<option value="1">45</option>
										</select>
									</div>
									<!-- pagination -->
									<div class="shop-pagination">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="sp-arrow-bold-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- product-toolbar end -->
								<!-- Shop-product start -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="grid-view">
										<div class="row shop-grid">
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/1.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/9.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/2.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/5.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/3.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/8.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/4.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/5.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/5.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/1.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/6.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/2.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/7.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/3.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/8.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/4.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-4  hidden-md  hidden-sm col-xs-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop/9.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop/5.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Randomised Words</a></h2>
														<h3>$500.00</h3>
													</div>
												</div>
											</div>		
											<!-- Single-product end -->
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="list-view"> 
										<div class="row shop-list">
											<!-- Single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop-list/1.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop-list/5.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Lacina Linen Pant</a></h2>
														<h3>$500.00</h3>
														<div class="porduct-desc">
															<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, temporamet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
														</div>
														<div class="pro-quick-view">
															<div class="quick-view">
																<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View">Quick View</a>
															</div>
															<div class="pro-rating">
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-2"></i></a>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop-list/5.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop-list/1.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Lacina Linen Pant</a></h2>
														<h3>$500.00</h3>
														<div class="porduct-desc">
															<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, temporamet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
														</div>
														<div class="pro-quick-view">
															<div class="quick-view">
																<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View">Quick View</a>
															</div>
															<div class="pro-rating">
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-2"></i></a>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop-list/2.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop-list/3.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Lacina Linen Pant</a></h2>
														<h3>$500.00</h3>
														<div class="porduct-desc">
															<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, temporamet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
														</div>
														<div class="pro-quick-view">
															<div class="quick-view">
																<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View">Quick View</a>
															</div>
															<div class="pro-rating">
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-2"></i></a>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-md-12">
												<div class="single-product">
													<div class="product-photo">
														<a href="#">
															<img class="primary-photo" src="<?=template_user3_path?>/img/shop-list/3.jpg" alt="" />
															<img class="secondary-photo" src="<?=template_user3_path?>/img/shop-list/2.jpg" alt="" />
														</a>
														<div class="pro-action">
															<a href="#" class="action-btn"><i class="sp-heart"></i><span>Wishlist</span></a>
															<a href="#" class="action-btn"><i class="sp-shopping-cart"></i><span>Add to cart</span></a>
															<a href="#" class="action-btn"><i class="sp-compare-alt"></i><span>Compare</span></a>
														</div>
													</div>
													<div class="product-brief">
														<h2><a href="#">Lacina Linen Pant</a></h2>
														<h3>$500.00</h3>
														<div class="porduct-desc">
															<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, temporamet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
														</div>
														<div class="pro-quick-view">
															<div class="quick-view">
																<a href="#" data-toggle="modal"  data-target="#productModal" title="Quick View">Quick View</a>
															</div>
															<div class="pro-rating">
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-1"></i></a>
																<a href="#"><i class="sp-star rating-2"></i></a>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<!-- Single-product end -->
										</div>
									</div>
								</div>
								<!-- Shop-product end -->
								<!-- product-toolbar start -->
								<div class="product-toolbar btm-border">
									<!-- Shop-menu -->
									<div class="shop-menu view-mode">
										<a class="grid-view active" href="#grid-view" data-toggle="tab"><i class="sp-grid-view"></i></a>
										<a class="list-view" href="#list-view" data-toggle="tab"><i class="sp-list-view"></i></a>
									</div>
									<div class="short-by hidden-xs">
										<span>short by</span>
										<select class="shop-select">
											<option value="1">default</option>
											<option value="1">default</option>
											<option value="1">default</option>
											<option value="1">default</option>
											<option value="1">default</option>
										</select>
									</div>
									<div class="short-by showing hidden-xs">
										<span>showing</span>
										<select class="shop-select">
											<option value="1">9</option>
											<option value="1">15</option>
											<option value="1">24</option>
											<option value="1">30</option>
											<option value="1">45</option>
										</select>
									</div>
									<!-- Pagination -->
									<div class="shop-pagination">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#"><i class="sp-arrow-bold-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- product-toolbar end -->
							</div>
							<!-- Shop-Content end -->
						</div>
					</div>
				</div>
			</div>
			<!-- SHOP-AREA END -->
			<!-- BANNER-AREA START -->
			<div class="banner-area fix margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="best-product-banner">
								<a href="#"><img src="<?=template_user3_path?>/img/banner/best-product-banner.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BANNER-AREA END -->
			<!-- BANNER-AREA START -->
			<div class="banner-area fix margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="banner-photo">
								<a href="#"><img src="<?=template_user3_path?>/img/banner/4.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="banner-6">
								<div class="section-title-2">
									<h2 class="border-left-rights">product description</h2>
								</div>
								<h3><a href="#">Slim Oxford Shirt</a></h3>
								<span class="main-price">$144.44</span> <span class="old-price-2">$288.00</span>
								<p>An oxford shirt sharp and reliable essential. durable woven texture in premium two-ply cotton, it is the perfect complement to suiting and urban knits. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BANNER-AREA END -->
			<!-- SERVICE-AREA START -->
			<div class="service-area margin-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-transport"></i>
								</div>
								<div class="service-brief">
									<h3>free shipping</h3>
									<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-head-phone"></i>
								</div>
								<div class="service-brief">
									<h3>help line</h3>
									<p>(+112) 1925184203 - call any time for any support Lorem Ipsum available, alteration </p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-service">
								<div class="service-icon">
									<i class="sp-business"></i>
								</div>
								<div class="service-brief">
									<h3>money back guarantee</h3>
									<p>There are many variations of passages of Lorem Ipsum available, alteration</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SERVICE-AREA END -->
		</section>

		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		   <!-- Modal -->
		   <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			    <div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="#" src="<?=template_user3_path?>/img/quickview-photo.jpg"/>
									</div>
								</div>
								<!-- .product-images -->

								<div class="product-info">
									<h1>Aenean eu tristique</h1>
									<div class="price-box-3">
										<hr />
										<div class="s-price-box">
											<span class="new-price">$160.00</span>
											<span class="old-price">$190.00</span>
										</div>
										<hr />
									</div>
									<a href="shop.html" class="see-all">See all features</a>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="numbers-row">
												<input type="number" id="french-hens" value="3">
											</div>
											<button class="single_add_to_cart_button" type="submit">Add to cart</button>
										</form>
									</div>
									<div class="quick-desc">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="sp-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="sp-twitter"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="sp-google"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="sp-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
			    </div><!-- .modal-dialog -->
		   </div>
		   <!-- END Modal -->
		</div>
		<!-- END QUICKVIEW PRODUCT -->
