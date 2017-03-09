
(function ($) {

    jQuery.fn.aktifpasif = function (options) {

       
        return this.each(function () {

            $(this).bind('click', function (e) {
				e.preventDefault();
				var postid = this.id.replace("ap","");
				 $.ajax({
				url: "guncelle.php",
				type: "POST",
				data: {'postid':postid,durum:$('#ap' + postid).attr('rel')},
				success:function(data){
				if($('#ap' + postid).attr('rel') == "aktif"){
				$('#tr_' + postid).attr('class','listele aktif');
				$('#ap' + postid).attr('rel','pasif');
				$('#ap' + postid).text("Pasif Et");
				}
				else{
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