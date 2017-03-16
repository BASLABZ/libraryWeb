$(document).ready(function () {
	loadProvinsi('#oriprovince');
	loadProvinsi('#desprovince');
	$('#oriprovince').change(function () {
           $('#oricity').show();
          var idprovince = $('#oriprovince').val();
          loadCity(idprovince,'#oricity');
		
	});
	$('#desprovince').change(function () {
		$('#descity').show();
        var idprovinces = $('#desprovince').val();
        loadCity(idprovinces,'#descity');
        
	});
});

function loadProvinsi(id) {
	$('#oricity').hide();
    $('#descity').hide();
    $(id).html('loading...');
        $.ajax({
      url:'process.php?act=showprovince',
      dataType:'json',
      success:function(response){
        $(id).html('');
        province = '';
            var result = jQuery.parseJSON(JSON.stringify(response['rajaongkir']['results']));
            $.each(result, function(i,n){
                province = '<option value="'+n['province_id']+'">'+n['province']+'</option>';
                province = province + '';
                $(id).append(province);
            });
    },
    error:function(){
        $(id).html('ERROR');
    }
  });
}

function loadCity(idprovince,id) {
    $.ajax({
        url:'process.php?act=showcity',
        dataType : 'json',
        data:{province:idprovince},
        success:function (response) {
            $(id).html('');
            city = '';
                var resultsCity = jQuery.parseJSON(JSON.stringify(response['rajaongkir']['results']));
                $.each(resultsCity, function(is,ns){
                    city = '<option value="'+ns['city_id']+'">'+ns['city_name']+'</option>';
                    city = city + '';
                    $(id).append(city);
                    console.log($(id).append(city))
                });
        },
        error:function () {
            $(id).html('ERROR');
        }

    });
}

