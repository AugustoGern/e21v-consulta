	$(document).ready(function(){
		$('.divCheck').click(function(){
			$(this).toggleClass('bg-success');
			var id = $(this).attr('data-id');

			  $.ajax({
                type: 'POST',
                url: 'botao_ajax.php',
                data: {
                	"id": id
                },
                success: function(response) {

                }
            });

		});
	});