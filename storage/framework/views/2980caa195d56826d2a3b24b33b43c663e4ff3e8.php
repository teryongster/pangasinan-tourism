<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pangasinan Tourism - Admin Panel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf_token" content="<?php echo e(csrf_token()); ?>">
		<link rel="stylesheet" type="text/css" href="/adminpanel/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/less" href="/adminpanel/css/cms.less">
		<link rel="stylesheet" type="text/less" href="/adminpanel/tippyjs-master/dist/tippy.css">
		<link rel="stylesheet" type="text/less" href="/adminpanel/font-awesome-4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="/adminpanel/tippyjs-master/dist/tippy.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/adminpanel/jQuery-Tags-Input/dist/jquery.tagsinput.min.css">
	</head>
	<body>
		<div class="leftnav">
			<div class="top">
				<h3 onclick="loadingModalShow()">Admin Panel</h3>
				<button class="toggle leftnavHider" title="Hide Left Navigation"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
			</div>
			<div class="main">
				<div class="options">
					<a href="/admin-panel/dashboard" class="option <?php echo e(adminSetActive('admin-panel/dashboard*')); ?>">Dashboard</a>
					<a href="/admin-panel/users" class="option <?php echo e(adminSetActive('admin-panel/users*')); ?>">Users</a>
					<div class="mydropdown <?php echo e(adminSetActive2('admin-panel/the-province*')); ?>">
						<span>The Province</span>
						<button class="dropdowntoggler" data-toggle="collapse" data-target="#dd_province"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						<button class="dropdowntoggler_active" data-toggle="collapse" data-target="#dd_province"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
						<div id="dd_province" class="collapse targets <?php echo e(adminSetActiveDropdown('admin-panel/the-province*')); ?>">
							<div class="options">
								<a href="/admin-panel/the-province/cities-and-municipalities" class="option <?php echo e(adminSetActive('admin-panel/the-province/cities-and-municipalities*')); ?>"><i class="fa fa-map-marker"></i> Cities and Municipalities</a>
								<a href="/admin-panel/the-province/festivals" class="option <?php echo e(adminSetActive('admin-panel/the-province/festivals*')); ?>"><i class="fa fa-asterisk" aria-hidden="true"></i> Festivals/Events</a>
								<a href="/admin-panel/the-province/photo-gallery" class="option <?php echo e(adminSetActive('admin-panel/the-province/photo-gallery*')); ?>"><i class="fa fa-picture-o"></i> Photo Gallery</a>
								
							</div>
						</div>
					</div>
					<div class="mydropdown <?php echo e(adminSetActive2('admin-panel/tourism*')); ?>">
						<span>Tourism</span>
						<button class="dropdowntoggler" data-toggle="collapse" data-target="#dd_tourism"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						<button class="dropdowntoggler_active" data-toggle="collapse" data-target="#dd_tourism"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
						<div id="dd_tourism" class="collapse targets <?php echo e(adminSetActiveDropdown('admin-panel/tourism*')); ?>">
							<div class="options">
								<a href="/admin-panel/tourism/tourist-attractions" class="option <?php echo e(adminSetActive('admin-panel/tourism/tourist-attractions*')); ?>"><i class="fa fa-ship" aria-hidden="true"></i> Tourist Attractions</a>
								<a href="/admin-panel/tourism/delicacies" class="option <?php echo e(adminSetActive('admin-panel/tourism/delicacies*')); ?>"><i class="fa fa-spoon"></i> Delicacies</a>
								<a href="/admin-panel/tourism/cafe-and-restaurants" class="option <?php echo e(adminSetActive('admin-panel/tourism/cafe-and-restaurants*')); ?>"><i class="fa fa-coffee"></i> Cafe & Restaurants</a>
								
							</div>
						</div>
					</div>
					<a href="/admin-panel/most-visiteds" class="option <?php echo e(adminSetActive('admin-panel/most-visiteds*')); ?>">Most Visited/Popular</a>
					<a href="/admin-panel/upcoming-events" class="option <?php echo e(adminSetActive('admin-panel/upcoming-events*')); ?>">Upcoming Events</a>
					<a href="/admin-panel/contact-us-messages" class="option <?php echo e(adminSetActive('admin-panel/contact-us-messages*')); ?>">"Contact Us" Messages</a>
					<a href="/" target="_blank" class="option" style="border-top: 1px solid #fff;"><i class="fa fa-television" aria-hidden="true"></i> Open Website in New Tab</a>
				</div>
			</div>
		</div>
		<div class="maincontainer">
			<div class="top">
				<button class="leftnavShower" title="Show Left Navigation"><i class="fa fa-bars" aria-hidden="true"></i></button>
				<h3><i class="<?php echo e($fontawesome); ?>" aria-hidden="true"></i> <?php echo e($title); ?></h3>
				<div class="userbutton">
					<button class="btn_userbutton"><i class="fa fa-user-circle-o" aria-hidden="true"></i></button>
					<div class="menu" id="usermenu">
						<img src="/adminpanel/img/dropdown_top_arrow.png" class="arrow">
						<a href="javascript:void(0);" data-target="#accountSettingsModal" data-toggle="modal"><i class="fa fa-wrench" aria-hidden="true"></i> Account Settings </a>
						<a href="javascript:void(0);" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a>
					</div>
				</div>
			</div>
			<div class="main">
				<?php if(session()->has('action')): ?>
				<?php if(session('action') == 'updated'): ?>
				<div class="alert alert-success alert-dismissable fade in text-center">
				    <a href="#" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Data has been updated.
				</div>
				<?php elseif(session('action') == 'added'): ?>
				<div class="alert alert-success alert-dismissable fade in text-center">
				    <a href="#" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Data has been added.
				</div>
				<?php elseif(session('action') == 'deleted'): ?>
				<div class="alert alert-success alert-dismissable fade in text-center">
				    <a href="#" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Data has been deleted.
				</div>
				<?php endif; ?>
				<?php endif; ?>
				<?php echo $__env->yieldContent('content'); ?>
			</div>
		</div>
		<?php if(session()->has('status')): ?>
		<form id="logoutForm" method="post" action="/admin-panel/logout">
			<?php echo e(csrf_field()); ?>

		</form>
		<div id="accountSettingsModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Account Settings</h4>
					</div>
					<div class="modal-body">
						<form method="post" action="/account-settings">
							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('patch')); ?>

							<div class="form-group">
								<label for="username">Username: </label>
								<input type="text" class="form-control" id="username" disabled>
							</div>
							<div class="form-group">
								<label for="password">Password: </label>
								<input required type="password" class="form-control" name="password" id="password">
							</div>
							<div class="form-group">
								<label for="password2">Retype Password: </label>
								<input required type="password" class="form-control" name="password2" id="password2">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" id="btnLinkSave">Save</button>
						</form>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="loading_modal">
			<div class="loading_container">
				<img src="/adminpanel/img/loading.svg">
				<!-- <p>Loading...</p> -->
			</div>
		</div>
		<script type="text/javascript" src="/adminpanel/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/less.min.js"></script>
		<script type="text/javascript" src="/adminpanel/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="/adminpanel/js/w3.js"></script>
		<script type="text/javascript" src="/adminpanel/jQuery-Tags-Input/dist/jquery.tagsinput.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/cms.js"></script>
	</body>
</html>