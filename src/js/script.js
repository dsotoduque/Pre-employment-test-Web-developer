$(function() {
$('#inputFilter').keyup(function() {
    var that = this;
    $.each($('tbody tr'),
    function(i, val) {
        if ($(val).text().indexOf($(that).val()) == -1) {
            $('tbody tr').eq(i).hide();
        } else {
            $('tbody tr').eq(i).show();
        }
    });
});

if($(window).width() <= 768){
	$('thead tr #age').hide();
	$.each($('tbody tr'),function(){
		$('.ages').hide();
	});
}

});