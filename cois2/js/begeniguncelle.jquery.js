
(function ($) {

    jQuery.fn.begeniguncelle = function (options) {

       
        return this.each(function () {

            $(this).bind('click', function (e) {
				e.preventDefault();
				var postid = this.id;
				 $.ajax({
				url: "guncelle.php",
				type: "POST",
				data: { 'posturl':this.href , 'postid':postid},
				success:function(data){
				$('#span_' + postid).text(" " + data);
				if(data.indexOf("Alınamadı!") >= 0){
				$('#tr_' + postid).attr('class','listele pasif');
				$('#ap' + postid).attr('rel','aktif');
				$('#ap' + postid).text("Aktif Et");
				}
				}
				});
            });

        });
    }

})(jQuery);