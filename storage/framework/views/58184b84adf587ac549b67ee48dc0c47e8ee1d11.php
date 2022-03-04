

<?php $__env->startSection('content'); ?>
	
	<?php echo $__env->make('partials.guest.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
    <section class="InnerBanner" style="background-image: url(<?php echo e(asset('images/banner.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="InnerBannerTxt">
						<div class="TitleMn">
							<h2>Subscription</h2>
						</div>
						<p>Choose the plan that’s right for you</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_First" style="background-image: url(<?php echo e(asset('images/patteren.png')); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="PriceData_1">
						<div class="TitleMn">
							<h2>Select Plan</h2>
						</div>
                        <ul style="list-style-type: none;" class="text-center">
                            <li>Full unrestricted access to view details of all collection types.</li>
                            <li>Track your own collectibles with a plan that suits your collection size.</li>
                            <li>7 day free trial with all new subscriptions.</li>
                            <li>Change or cancel your plan anytime.</li>
                        </ul>
					</div>
					<div class="PriceData_2">
						<div class="row justify-content-center">
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
								<div class="Price1">
									<h2>$10.00</h2>
									<p>Per Month</p>
									<h4>Standard</h4>
									<ul>
										<li><b>1000</b> Products</li>
										
									</ul>
									<!--div class="PriceBtn">
										<a href="<?php echo e(route('register', [1,2])); ?>">Subscribe Now</a>
									</div-->
                                    <div class="PriceBtn">
										<a href="<?php echo e(route('register', [9, 2])); ?>">Sign Up</a>
									</div>
								</div>
							</div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
								<div class="Price1">
									<h2>$100.00</h2>
									<p>Per Year</p>
									<h4>Standard</h4>
									<ul>
										<li><b>1000</b> Products</li>
                                        
									</ul>
									<div class="PriceBtn">
										<a href="<?php echo e(route('register', [10, 2])); ?>">Sign Up</a>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
								<div class="Price1 Price2">
									<h2>$15.00</h2>
									<p>Per Month</p>
									<h4>Premium</h4>
									<ul>
										<li><b>Unlimited</b> Products</li>
										
									</ul>
									<div class="PriceBtn">
										<a href="<?php echo e(route('register', [11, 3])); ?>">Sign Up</a>
									</div>
								</div>
							</div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
								<div class="Price1 Price2">
									<h2>$150.00</h2>
									<p>Per Year</p>
									<h4>Premium</h4>
									<ul>
										<li><b>Unlimited</b> Products</li>
										
									</ul>
									<div class="PriceBtn">
										<a href="<?php echo e(route('register', [12, 3])); ?>">Sign Up</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="Plain_Second" style="background-image: url(<?php echo e(asset('images/price_bg.png')); ?>);"></section>
	<?php echo $__env->make('partials.guest.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/ultimatecollectionscompany.com/public_html/test123/resources/views/auth/pricing.blade.php ENDPATH**/ ?>