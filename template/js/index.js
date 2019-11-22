$(window).on('load', function () {
	$(".expandCategory").on('click', function() {
		$("."+this.id).toggleClass("active");
	});


	$("form").on("submit",(function(e) {
		e.preventDefault();

		let formId = $(this).attr("id");

		let action = $("#"+formId).attr("action");
		let formData = new FormData(this);

		$.ajax({
			type:"POST",
			url: action,
			data: formData,
			cache:false,
			contentType: false,
			processData: false,
			success:function(data){
				switch (formId) {
					case 'new_project_form':
					$("#projects .show_new_project_modal").after(data);
					closeModal('.new_project_wrapper');
					break;

					case 'new_customer_form':
					$("#customers .show_new_customers_modal").after(data);
					closeModal('.new_customer_wrapper');
					break;

					case 'new_department_form':
					$("#departments .show_new_department_modal").after(data);
					closeModal('.new_department_wrapper');
					break;
				}

			}
		});

	}));
});