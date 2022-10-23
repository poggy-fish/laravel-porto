<template>
	<div
		class="banner-product bg-grey banner-cat"
		v-lazy:background-image="
			$root.getUrl('client/images/banners/category_banner.jpg')
		"
		style="background-position: 50%;"
	>
		<div class="container">
			<div class="content-left text-lg-right">
				<h2>SMART</h2>
				<h3>Phone Deals</h3>
			</div>
			<div class="ml-3 content-right">
				<div class="skew-box-group">
					<span class="skew-box">Exclusive COUPON</span>
					<h3 class="sale-off skew-box"><span>$100</span>off</h3>
				</div>
				<button class="btn">View All Now</button>
			</div>
		</div>
	</div>
</template>