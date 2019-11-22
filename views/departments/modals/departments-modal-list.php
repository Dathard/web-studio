<section class="departments_modal_wrapper modal">
	<div id="departments_modal" class="wrapperPage">
		<h2 class="page_header">
			Відділення
			<span class="close" onclick="closeModal('.departments_modal_wrapper')">X</span>
		</h2>
		<ul class="departments_list"></ul>
	</div>
</section>

<script>
	function showDepartmentsModal(disabled){
		if ( !$(disabled).hasClass('disabled') ) {

			$(disabled).addClass('disabled');

			if ( !$('.departments_modal_wrapper').hasClass('active') ) {

				$.get( "departments/ajax", function( data ) {
					$('#departments_modal .departments_list').html(data);
					$('.departments_modal_wrapper').toggleClass('active');
					$(disabled).removeClass('disabled');
				});

			}else{

				$('.departments_modal_wrapper').toggleClass('active');
				$(disabled).removeClass('disabled');

			}
		}
	}
</script>