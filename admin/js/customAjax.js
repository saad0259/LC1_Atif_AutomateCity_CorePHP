$(document).ready(function(){	

	var itemData = $('#itemList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"../includes/functions.php",
			type:"POST",
			data:{action:'listItem'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 6, 7],
				"orderable":false,
			},
		],
		"pageLength": 10
	});		
	$('#addItem').click(function(){
		$('#itemModal').modal('show');
		$('#itemForm')[0].reset();
		$('#action').val('addItem');
		$('#save').val('Add');
	});		
	$("#itemList").on('click', '.update', function(){
		
			
		var id = $(this).attr("id");
		
		var action = 'getItem';
		
		$.ajax({
			url:'../includes/functions.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#itemModal').modal('show');
				$('#id').val(data.id);
				$("#image").attr("src",data.image);
				$('#title').val(data.title);
				$('#description').val(data.description);
				$('#date').val(data.date);				
				$('#purchases').val(data.purchases);
				$('#icon').val(data.icon);
				$('#price').val(data.price);
				$('#currency').val(data.currency);
				$('#status').val(data.status);
				$('#offered_by').val(data.offered_by);	
				$('#action').val('updateItem');
				$('#save').val('Save');
			}
		})
	});
	$("#itemModal").on('submit','#itemForm', function(event){
	
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = new FormData(this);
		
		$.ajax({
			url:"../includes/functions.php",
			method:"POST",
			data:formData,
			processData: false,
			cache:false,    
			contentType: false,


			success:function(data){				
				$('#itemForm')[0].reset();
				$('#itemModal').modal('hide');				
				$('#save').attr('disabled', false);
				$('#visible_image').attr('src', dp);
				itemData.ajax.reload();
			}
		})
	});		
	$("#itemList").on('click', '.delete', function(){
	
		var id = $(this).attr("id");		
		var action = "itemDelete";
		if(confirm("Are you sure you want to delete this item?")) {
			$.ajax({
				url:"../includes/functions.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					itemData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});