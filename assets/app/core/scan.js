
var arg = {
    resultFunction: function(result) {
        //$('.hasilscan').append($('<input name="id_karyawan" value=' + result.code + ' readonly><input type="submit" value="Cek"/>'));
       // $.post("../cek.php", { noijazah: result.code} );
        var redirect = 'scan1/cek_id';

        $.redirectPost(redirect, {id_karyawan: result.code});
    }
};

var decoder = $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery;
decoder.buildSelectMenu("select");
decoder.play();
  /*  Without visible select menu
      decoder.buildSelectMenu(document.createElement('select'), 'environment|back').init(arg).play();
  */
$('select').on('change', function(){
    decoder.stop().play();
});

// jquery extend function
$.extend(
{
    redirectPost: function(location, args)
    {
        var form = '';
        $.each( args, function( key, value ) {
            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
        });
        $('<form action="'+location+'" method="POST">'+form+'</form>').appendTo('body').submit();
    }
});
