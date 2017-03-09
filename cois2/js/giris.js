(function ($) {

    jQuery.fn.giriskontrol = function (options) {


        return this.each(function () {

            $(this).bind('click', function (e) {
                e.preventDefault();
                if ($('#k_adi').val() != "" && $('#sifre').val() != "") {
                $.post("giris.php", { kullanici: $('#k_adi').val(), sifre: $('#sifre').val() }, function (xml) {
                    var durum = $(xml).find("Sonuc").find("durum").text();
                    var resim = $(xml).find("Sonuc").find("mesaj").text();
                    if (durum == '1') {
                        window.location = document.URL;
                    }else if (durum == '0') {
                        $('.hatared').animate({ opacity: 1 }, 300);
                        $('.hatared').animate({ opacity: 0 }, 300);
                    }
                }, "xml");
            }
                else if($('#k_adi').val() == ""){
                 $('.hatared').animate({ opacity: 1 }, 300);
                 $('.hatared').animate({ opacity: 0 }, 300);
             }
                else if($('#sifre').val() == ""){
                 $('.hatared').animate({ opacity: 1 }, 300);
                 $('.hatared').animate({ opacity: 0 }, 300);
                }
            });

        });
    }

})(jQuery);