<?php $__env->startSection('content'); ?>
<!-- Header -->
<header class="masthead">
	<div class="container">
		<div class="intro-text">
			<div class="intro-lead-in">Welcome To Pangasinan!</div>
			<div class="intro-heading text-uppercase">COME AND EXPLORE PANGASINAN!</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/the-province">Tell Me More</a>
		</div>
	</div>
</header>
<section class="portfoliooo">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading text-uppercase redfont">What's Hot?</h1>
			</div>
		</div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Places</h2>
				<h3 class="section-subheading text-muted">Edit this description.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $mvs->where('category', 'place'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/<?php echo e($mv->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($mv->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($mv->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<button class="load-more">LOAD MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Cafe</h2>
				<h3 class="section-subheading text-muted">Edit this description.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $mvs->where('category', 'cafe'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/<?php echo e($mv->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($mv->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($mv->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<button class="load-more">LOAD MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Beaches</h2>
				<h3 class="section-subheading text-muted">Edit this description.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $mvs->where('category', 'beaches'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/<?php echo e($mv->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($mv->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($mv->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<button class="load-more">LOAD MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Popular Delicacies</h2>
				<h3 class="section-subheading text-muted">Edit this description.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $mvs->where('category', 'delicacies'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/<?php echo e($mv->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($mv->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($mv->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<button class="load-more">LOAD MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Restaurants</h2>
				<h3 class="section-subheading text-muted">Edit this description.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $mvs->where('category', 'restaurant'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/<?php echo e($mv->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($mv->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($mv->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<button class="load-more">LOAD MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Upcoming Events</h2>
				<h3 class="section-subheading text-muted">Edit this description.</h3>
			</div>
		</div>
		<div class="row">
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th>WHAT</th>
			            <th>WHERE</th>
			            <th>DATE</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td>John</td>
			            <td>Doe</td>
			            <td>john@example.com</td>
			        </tr>
			    </tbody>
			</table>
		</div>
	</div>
</section>

<div class="portfolio-modal modal fade" id="delicaciesModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="modal-body delicacy-modal">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
        $('.row-parent').each(function(i){
			$(this).find('.home-box').not('.home-box-active').slice(0, 4).addClass('home-box-active');
			var boxCount = $(this).find('.home-box').length;
			if(boxCount <= 4){
				$(this).closest('.row-parent').find('.load-more').css('display', 'none');
			}
		});
    });

    $('.load-more').click(function () {
	    var me = $(this);
	    setTimeout(function () {
	        me.closest('.row-parent').find('.home-box').not('.home-box-active').addClass('home-box-active');
	        me.addClass('load-more-disabled')
	    }, 300);
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>