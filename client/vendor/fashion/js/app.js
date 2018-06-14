const APIURL = 'http://localhost:8000/api/';

(function ($) {
	$('#progress').modal();

	var menu = $.sammy(function () {
		this.element_selector = '#slide-out';
		this.use('Template');

		this.get('', function (context) {
			loadView(context, api('sidenav'), 'sidenav');
		});
	});

	var app = $.sammy(function () {
		this.element_selector = '#container';
		this.use('Template');

		this.get('#/home', function (context) {
			loadView(context, api('home'), 'home');
		});

		this.get('#/product/:id', function (context) {
			loadView(context, api('product', this.params['id']), 'product');
		});

		this.get('#/purchase-product/:id', function (context) {
			loadView(context, api('purchase-product', this.params['id']), 'empty-view');
		});

		this.get('#/purchase-set/:id', function (context) {
			loadView(context, api('purchase-set', this.params['id']), 'empty-view');
		});

		this.get('#/category/:id', function (context) {
			loadView(context, api('category', this.params['id']), 'home');
		});

		this.post('#/rate/:product', function () {

			var ratingPreloader  = '';
				ratingPreloader += '<div class="valign-wrapper" id="rating-form-overlay">';
				ratingPreloader += '<div class="preloader-wrapper small active valign">';
				ratingPreloader += '<div class="spinner-layer spinner-green-only">';
				ratingPreloader += '<div class="circle-clipper left">';
				ratingPreloader += '<div class="circle"></div>';
				ratingPreloader += '</div><div class="gap-patch">';
				ratingPreloader += '<div class="circle"></div>';
				ratingPreloader += '</div><div class="circle-clipper right">';
				ratingPreloader += '<div class="circle"></div>';
				ratingPreloader += '</div>';
				ratingPreloader += '</div>';
				ratingPreloader += '</div></div>';

			$('#rating-form').append(ratingPreloader);

			var params = this.params;

			$.ajax({
				url: api('rate'),
				type: "post",
				data: params.toHash(),
				success: function (response) {
					$('span.rating').text(response);
					M.toast({ html: 'You rated this item with '+params['userRating'] });

					$('#rating-form').remove();
				}
			});

            return false;
		});
	});



	$(function(){
		$('.sidenav').sidenav();
		$('select').formSelect();

		app.run('#/home');
		menu.run();
	});


})(jQuery);


function showProgress(){
	$('#progress').modal('open');
}

function hideProgress(){
	$('#progress').modal('close');
}

function api (module, param) {
	
	var module = (typeof module == 'undefined') ? '' : module;
	var param = (typeof param == 'undefined') ? '' : '/'+param;

	return APIURL+module+param;
}

function loadView(context, api, view) {
	showProgress();
	$.getJSON(api, function (data) {
		context
		.render('views/'+view+'.template', { jsonData: data })
		.swap(context.$element());
	})
	.then(function() {
		hideProgress();
	});
}