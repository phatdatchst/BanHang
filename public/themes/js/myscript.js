$(document).ready(function(){
	$(".update").click(function(){
		var id = $(this).attr('id');
		var qty = $(this).parent().parent().find(".qty").val();
		var token  = $("input[name='_token']").val();
		$.ajax({
			url:"capnhat/"+id+"/"+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":id,"qty":qty},
			success:function(data){
				if(data == "oke"){
					window.location = "gio-hang"
				}
			}
		});
	});
});