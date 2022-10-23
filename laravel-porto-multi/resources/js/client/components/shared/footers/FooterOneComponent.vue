<template>
	<footer class="footer footer-one">
		<div class="footer-top align-items-center">
			<div class="container">
				<div class="row row-sm align-items-center">
					<div class="col-lg-3">
						<a href="javascript:;" class="widget-newsletter-title"
							>Sign Up to Newsletter</a
						>
					</div>
					<div class="col-lg-4">
						<p class="widget-newsletter-content">
							<span>
								Get all the latest information on Events, Sales
								and Offers.</span
							><br />
							<span class="widget-newsletter-content"
								>Receive $10 coupon for first shopping.</span
							>
						</p>
					</div>
					<div class="col-lg-5">
						<form action="#" class="m-0">
							<div class="footer-submit-wrapper">
								<input
									type="email"
									class="form-control"
									placeholder="Enter your Email address..."
									required
								/>
								<button type="submit" class="btn">
									Subscribe
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="footer-middle">
				<div class="row row-sm">
					<div class="col-lg-4">
						<router-link to="/">
							<img
								class="logo"
								:src="
									$root.getUrl('client/images/logo-black.png')
								"
								alt="Porto Logo"
								width="220"
								height="80"
							/>
						</router-link>
						<div class="row row-sm">
							<div class="col-sm-6 pr-sm-0">
								<div class="contact-widget">
									<h4 class="widget-title">ADDRESS:</h4>
									<a href="#"
										>123 Street Name, City, England</a
									>
								</div>
							</div>
							<div class="col-sm-6 pl-sm-0">
								<div class="contact-widget">
									<h4 class="widget-title">PHONE:</h4>
									<a href="#">Toll Free (123) 456-7890</a>
								</div>
							</div>
							<div class="col-sm-6 pr-sm-0">
								<div class="contact-widget">
									<h4 class="widget-title">EMAIL:</h4>
									<a href="mailto:mail@example.com"
										>mail@example.com</a
									>
								</div>
							</div>
							<div class="col-sm-6 pl-sm-0">
								<div class="contact-widget">
									<h4 class="widget-title">
										WORKING DAYS/HOURS:
									</h4>
									<a href="#">Mon - Sun / 9:00AM - 8:00PM</a>
								</div>
							</div>
						</div>
						<div class="social-icons">
							<a
								href="#"
								class="social-icon social-facebook"
								target="_blank"
								><i class="fab fa-facebook-f"></i
							></a>
							<a
								href="#"
								class="social-icon social-twitter"
								target="_blank"
								><i class="fab fa-twitter"></i
							></a>
							<a
								href="#"
								class="social-icon social-linkedin"
								target="_blank"
								><i class="fab fa-linkedin-in"></i
							></a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h4 class="widget-title">Account</h4>
							<ul class="row row-sm links link-lg link-parts">
								<div class="col-6 link-part">
									<li>
										<router-link to="/pages/account"
											>My Account</router-link
										>
									</li>
									<li><a href="#">Track Your Order</a></li>
									<li><a href="#">Payment Methods</a></li>
									<li><a href="#">Shipping Guide</a></li>
									<li><a href="#">FAQs</a></li>
									<li><a href="#">Product Support</a></li>
									<li><a href="#">Privacy</a></li>
								</div>
								<div class="col-6 link-part">
									<li>
										<router-link to="/pages/account/orders"
											>Orders History</router-link
										>
									</li>
									<li><a href="#">Advanced Search</a></li>
									<li><a href="#">Affiliate Program</a></li>
								</div>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h4 class="widget-title">About</h4>
							<ul class="links">
								<li>
									<router-link to="/pages/about"
										>About Porto</router-link
									>
								</li>
								<li><a href="#">Our Guarantees</a></li>
								<li><a href="#">Terms And Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Return Policy</a></li>
								<li>
									<a href="#">Intellectual Property Claims</a>
								</li>
								<li><a href="#">Site Map</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="widget">
							<h4 class="widget-title">Features</h4>
							<ul class="links">
								<li><a href="#">Powerful Admin Panel</a></li>
								<li>
									<a href="#">Mobile & Retina Optimized</a>
								</li>
								<li>
									<a href="#">Super Fast Magento Theme</a>
								</li>
								<li>
									<a href="#">1st Fully working Ajax Theme</a>
								</li>
								<li>
									<a href="#">10 Unique Homepage Layouts</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div
				class="footer-bottom d-flex justify-content-between align-items-center flex-wrap"
			>
				<p class="footer-copyright">
					&copy; Porto eCommerce. {{ year }}. All Rights Reserved
				</p>
				<img
					:src="$root.getUrl('client/images/payments_long.png')"
					width="246"
					height="33"
					style="max-width: 200px;"
				/>
			</div>
		</div>
	</footer>
</template>

<script>
export default {
	data: function (){
		return {
			year: new Date().getFullYear()
		}
	}
};
</script>