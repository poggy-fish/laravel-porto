<template>
	<main class="main">
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<router-link to="/">
							<i class="icon-home"></i>
						</router-link>
					</li>
					<li class="breadcrumb-item active">Store List</li>
				</ol>
			</div>
		</nav>

		<div class="container">
			<div class="toolbox toolbox-store">
				<div class="toolbox-left">
					<div class="toolbox-item">
						<label>Total store showing: {{ vendorCount }}</label>
					</div>
				</div>
				<div class="toolbox-item toolbox-filter mr-0">
					<a
						href="#"
						class="btn"
						@click.prevent="filterSlide = !filterSlide"
						><svg
							data-name="Layer 3"
							id="Layer_3"
							viewBox="0 0 32 32"
							xmlns="http://www.w3.org/2000/svg"
						>
							<line
								class="cls-1"
								x1="15"
								x2="26"
								y1="9"
								y2="9"
							></line>
							<line
								class="cls-1"
								x1="6"
								x2="9"
								y1="9"
								y2="9"
							></line>
							<line
								class="cls-1"
								x1="23"
								x2="26"
								y1="16"
								y2="16"
							></line>
							<line
								class="cls-1"
								x1="6"
								x2="17"
								y1="16"
								y2="16"
							></line>
							<line
								class="cls-1"
								x1="17"
								x2="26"
								y1="23"
								y2="23"
							></line>
							<line
								class="cls-1"
								x1="6"
								x2="11"
								y1="23"
								y2="23"
							></line>
							<path
								class="cls-2"
								d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
							></path>
							<path
								class="cls-2"
								d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z"
							></path>
							<path
								class="cls-3"
								d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z"
							></path>
							<path
								class="cls-2"
								d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
							></path></svg
						>Filter</a
					>
				</div>
				<div class="toolbox-item toolbox-sort">
					<label>Sort by:</label>
					<div class="select-custom">
						<select
							class="form-control"
							v-model="sortOption"
							@change="sortVendors"
						>
							<option value="recent">Most Recent</option>
							<option value="rating">Most Popular</option>
						</select>
					</div>
				</div>
				<div class="layout-modes">
					<router-link
						to="/vendors/grid"
						class="layout-btn btn-grid"
						exact-active-class="active"
						title="Grid"
					>
						<i class="icon-mode-grid"></i>
					</router-link>
					<router-link
						to="/vendors/list"
						class="layout-btn btn-list"
						exact-active-class="active"
						title="List"
					>
						<i class="icon-mode-list"></i>
					</router-link>
				</div>
			</div>

			<vue-slide-toggle
				:open="filterSlide"
				:duration="500"
				class="filter-form-container mt-0 mb-0 pb-0 pt-0"
			>
				<form
					class="mb-2"
					action="#"
					method="GET"
					@submit.prevent="filterVendors"
				>
					<div class="row">
						<div class="input-group col-lg-7 col-xl-5">
							<input
								type="text"
								class="form-control"
								placeholder="Search Vendors"
								v-model="searchTerm"
								required
							/>
							<div class="input-group-append">
								<button
									type="submit"
									class="btn btn-primary btn-submit"
								>
									Search
								</button>
							</div>
						</div>
					</div>
				</form>
			</vue-slide-toggle>

			<template v-if="filteredUsers.length > 0">
				<div
					v-for="user in filteredUsers"
					:key="user.id"
					class="store store-list"
					:class="{ 'no-banner': !user.vendor.banner }"
				>
					<div class="store-info">
						<figure>
							<img
								v-lazy="
									$root.getUrl(
										user.vendor.banner.copy_link,
										true
									)
								"
								:ratio="220 / 380"
								v-if="user.vendor.banner"
								alt="Store"
								:width="user.vendor.banner.width"
								:height="user.vendor.banner.height"
							/>
							<img
								v-lazy="
									$root.getUrl(
										'client/images/vendors/banner-3.png'
									)
								"
								v-else
								alt="Store"
								width="453"
								height="220"
							/>
						</figure>
						<div class="store-content">
							<h3 class="store-title">
								{{ user.vendor.store_name }}
							</h3>
							<div class="ratings-container">
								<div
									class="store-ratings"
									:title="'Rated ' + user.rating + 'out of 5'"
								>
									<span
										class="ratings"
										:style="{
											width: setRating(user.rating),
										}"
									></span>
								</div>
							</div>
							<p class="store-address">
								{{
									getLocation(
										user.vendor.country,
										user.vendor.state
									)
								}}
							</p>
						</div>
					</div>
					<div class="store-footer">
						<div class="seller-avatar">
							<img
								v-lazy="
									$root.getUrl(
										user.vendor.profile.copy_link,
										true,
										100
									)
								"
								v-if="user.vendor.profile"
								alt="vendor"
								width="100"
								height="100"
							/>
							<img
								v-lazy="
									$root.getUrl(
										'server/images/placeholder-img-100x100.png'
									)
								"
								v-else
								alt="vendor"
								width="100"
								height="100"
							/>
						</div>
						<router-link
							:to="'/vendors/' + user.id"
							class="btn btn-primary btn-round"
						></router-link>
					</div>
				</div>
			</template>
			<div class="info-box with-icon py-3 px-1 skel-hide" v-else>
				<p class="porto-info">No vendor matching your selection.</p>
			</div>
		</div>
		<div class="mb-6"></div>
	</main>
</template>
<script>
import { VueSlideToggle } from "vue-slide-toggle";

import { COUNTIRES, STATES, COUNTRIES } from "../../../data/constant";

export default {
	components: {
		VueSlideToggle,
	},
	data: function () {
		return {
			users: [],
			filteredUsers: [],
			filterSlide: false,
			sortOption: "recent",
			searchTerm: null,
		};
	},
	watch: {
		$route: function () {},
	},
	computed: {
		vendorCount: function () {
			return this.users.length;
		},
	},
	created: function () {
		this.getVendors();
	},
	methods: {
		getVendors: async function () {
			await window.axios
				.get("/web/vendors/")
				.then((response) => {
					this.users = response.data.vendors;
					this.filteredUsers = response.data.vendors;
				})
				.catch((error) => {
					this.$router.push("/pages/404");
				});
		},
		getLocation: function (country, state) {
			let tempCountry = COUNTRIES.find((item) => item.id == country);

			let tempState = { text: "Unknown" };
			if (!tempCountry) {
				tempCountry = { text: "Unknown" };
			} else {
				tempState = STATES[country].find((item) => item.id == state);

				if (!tempState) {
					tempState = { text: "Unknown" };
				}
			}

			return tempState.text + ", " + tempCountry.text;
		},
		sortVendors: function () {
			if (this.sortOption == "recent") {
				this.filteredUsers = this.users.sort(function (a, b) {
					return a.created < b.created ? 1 : -1;
				});
			} else if (this.sortOption == "rating") {
				this.filteredUsers = this.users.sort(function (a, b) {
					return a.rating < b.rating ? 1 : -1;
				});
			}
		},
		filterVendors: function () {
			this.filteredUsers = this.users.filter(
				(user) =>
					user.vendor.store_name &&
					user.vendor.store_name.includes(this.searchTerm)
			);
		},
		setRating: function (rating) {
			return rating * 20 + "%";
		},
	},
};
</script>