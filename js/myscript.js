
$(function(){
	$('#moreItems').click(function(event) {
		$('#items').append('<div class="form-row"><div class="form-group col-md-2"><input name="product[]" type="text" class="form-control"></div><div class="form-group col-md-7"><input name="desc[]" type="text" class="form-control"></div><div class="form-group col-md-1"><input name="qty[]" type="number" class="form-control"></div><div class="form-group col-md-2"><input name="cost[]" type="number" class="form-control"></div></div>');
	});
});



