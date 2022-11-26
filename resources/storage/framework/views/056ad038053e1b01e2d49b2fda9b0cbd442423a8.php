<footer>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Call Labs</h5>
						<p>
							Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
						</p>
					</div>
				</div>
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Call Labs center</h5>
						<p>
							Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Sunday, 8am to 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +91-7893762020
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> info@calllabs.com
							</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>vasavi colony rood no 4. Kothapet Hyderabad, 300036.</p>

					</div>
				</div>
				<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
							<li class="social-facebook"><a href="https://www.facebook.com/calllabs/"><i class="fa fa-facebook"></i></a></li>
							<li class="social-twitter"><a href="https://youtube.com/channel/UC8OhD515exFS1PNYqvcQk5Q"><i class="fa fa-twitter"></i></a></li>
							<li class="social-google"><a href="https://www.linkedin.com/in/call-labs-437369191">
								<i class="fa fa-linkedin"></i></a></li>
						 	<li class="social-dribble"><a href="http://instagram.com/calllabs.kk"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
						<div class="text-left">
							<p>&copy;Copyright 2022 - Call Labs. All rights reserved.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
<script src="<?php echo e(('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(('js/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(('js/wow.min.js')); ?>"></script>
<script src="<?php echo e(('js/jquery.scrollTo.js')); ?>"></script>
<script src="<?php echo e(('js/jquery.appear.js')); ?>"></script>
<script src="<?php echo e(('js/stellar.js')); ?>"></script>
<script src="<?php echo e(('plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')); ?>"></script>
<script src="<?php echo e(('js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(('js/nivo-lightbox.min.js')); ?>"></script>
<script src="<?php echo e(('js/custom.js')); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
<script>
	jQuery(document).ready(function($) {
		var feedbackSlider = $(".feedback-slider");
		feedbackSlider.owlCarousel({
			items: 1,
			nav: true,
			dots: true,
			autoplay: true,
			loop: true,
			mouseDrag: true,
			touchDrag: true,
			navText: [
				"<i class='fa fa-long-arrow-left'></i>",
				"<i class='fa fa-long-arrow-right'></i>"
			],
			responsive: {
				// breakpoint from 767 up
				767: {
					nav: true,
					dots: false
				}
			}
		});

		feedbackSlider.on("translate.owl.carousel", function() {
			$(".feedback-slider-item h3")
				.removeClass("animated fadeIn")
				.css("opacity", "0");
			$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
				.removeClass("animated zoomIn")
				.css("opacity", "0");
		});

		feedbackSlider.on("translated.owl.carousel", function() {
			$(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
			$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
				.addClass("animated zoomIn")
				.css("opacity", "1");
		});
		feedbackSlider.on("changed.owl.carousel", function(property) {
			var current = property.item.index;
			var prevThumb = $(property.target)
				.find(".owl-item")
				.eq(current)
				.prev()
				.find("img")
				.attr("src");
			var nextThumb = $(property.target)
				.find(".owl-item")
				.eq(current)
				.next()
				.find("img")
				.attr("src");
			var prevRating = $(property.target)
				.find(".owl-item")
				.eq(current)
				.prev()
				.find("span")
				.attr("data-rating");
			var nextRating = $(property.target)
				.find(".owl-item")
				.eq(current)
				.next()
				.find("span")
				.attr("data-rating");
			$(".thumb-prev").find("img").attr("src", prevThumb);
			$(".thumb-next").find("img").attr("src", nextThumb);
			$(".thumb-prev")
				.find("span")
				.next()
				.html(prevRating + '<i class="fa fa-star"></i>');
			$(".thumb-next")
				.find("span")
				.next()
				.html(nextRating + '<i class="fa fa-star"></i>');
		});
		$(".thumb-next").on("click", function() {
			feedbackSlider.trigger("next.owl.carousel", [300]);
			return false;
		});
		$(".thumb-prev").on("click", function() {
			feedbackSlider.trigger("prev.owl.carousel", [300]);
			return false;
		});
	}); //end ready
</script>
<script>
	$(document).ready(function() {
		var slider = $("#slider");
		var thumb = $("#thumb");
		var slidesPerPage = 4; //globaly define number of elements per page
		var syncedSecondary = true;
		slider.owlCarousel({
			items: 1,
			slideSpeed: 2000,
			nav: false,
			autoplay: false,
			dots: false,
			loop: true,
			responsiveRefreshRate: 200
		}).on('changed.owl.carousel', syncPosition);
		thumb
			.on('initialized.owl.carousel', function() {
				thumb.find(".owl-item").eq(0).addClass("current");
			})
			.owlCarousel({
				items: slidesPerPage,
				dots: false,
				nav: true,
				item: 4,
				smartSpeed: 200,
				slideSpeed: 500,
				slideBy: slidesPerPage,
				navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
				responsiveRefreshRate: 100
			}).on('changed.owl.carousel', syncPosition2);

		function syncPosition(el) {
			var count = el.item.count - 1;
			var current = Math.round(el.item.index - (el.item.count / 2) - .5);
			if (current < 0) {
				current = count;
			}
			if (current > count) {
				current = 0;
			}
			thumb
				.find(".owl-item")
				.removeClass("current")
				.eq(current)
				.addClass("current");
			var onscreen = thumb.find('.owl-item.active').length - 1;
			var start = thumb.find('.owl-item.active').first().index();
			var end = thumb.find('.owl-item.active').last().index();
			if (current > end) {
				thumb.data('owl.carousel').to(current, 100, true);
			}
			if (current < start) {
				thumb.data('owl.carousel').to(current - onscreen, 100, true);
			}
		}

		function syncPosition2(el) {
			if (syncedSecondary) {
				var number = el.item.index;
				slider.data('owl.carousel').to(number, 100, true);
			}
		}
		thumb.on("click", ".owl-item", function(e) {
			e.preventDefault();
			var number = $(this).index();
			slider.data('owl.carousel').to(number, 300, true);
		});


		$(".qtyminus").on("click", function() {
			var now = $(".qty").val();
			if ($.isNumeric(now)) {
				if (parseInt(now) - 1 > 0) {
					now--;
				}
				$(".qty").val(now);
			}
		})
		$(".qtyplus").on("click", function() {
			var now = $(".qty").val();
			if ($.isNumeric(now)) {
				$(".qty").val(parseInt(now) + 1);
			}
		});
	});
</script>
<script>
	$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
		$(e.target)
			.prev()
			.find("i:last-child")
			.toggleClass("fa-minus fa-plus");
	});
</script>

<script type="text/javascript">
 
$(".cart_remove").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '<?php echo e(route('remove_from_cart')); ?>',
                method: "DELETE",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

	var path = "<?php echo e(route('getajaxTest')); ?>";

$('#search-text').typeahead({

    source: function(query, process){

        return $.get(path, {search:query}, function(data){

              return process(data);

        });

    }

});

	 
       
  
</script>

</body>

</html><?php /**PATH C:\xampp\htdocs\callabs\resources\views/layouts/partials/footer.blade.php ENDPATH**/ ?>