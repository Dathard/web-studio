<section class="customers_modal_wrapper wrapper_modal">
	<div id="customers_modal" class="wrapperPage modal">
		<h2 class="page_header">
			Клієнти
			<span class="close" onclick="closeModal('.customers_modal_wrapper')">X</span>
		</h2>
		<ul class="customers_list"></ul>
	</div>
</section>

<script>
	function showCustomersModal(disabled){
		if ( !$(disabled).hasClass('disabled') ) {

			$(disabled).addClass('disabled');

			if ( !$('.customers_modal_wrapper').hasClass('active') ) {

				$.get( "customers/ajax", function( data ) {
					$('#customers_modal .customers_list').html(data);
					$('.customers_modal_wrapper').toggleClass('active');
					$(disabled).removeClass('disabled');
				});

			}else{

				$('.customers_modal_wrapper').toggleClass('active');
				$(disabled).removeClass('disabled');

			}
		}
	}
</script>