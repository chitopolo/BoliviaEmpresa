/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 
$(function(){
	$('#brow.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).show();
    $(this).addClass('open');
}, 	function() {
  	$(this).find('.dropdown-menu').stop(true, true).hide();
    $(this).removeClass('open');
	});
});*/
$(function(){
	$('#regiscompany.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).show();
    $(this).addClass('open');
}, 	function() {
  	$(this).find('.dropdown-menu').stop(true, true).hide();
    $(this).removeClass('open');
	});
});
$(document).ready(function () {
	$("#ola").bind("click", function (event) {
            alert('ols');
})});
$(document).ready(function () {
	$("#formItem").bind("submit", function (event) {
            event.preventDefault();
		$.ajax({
			async:true, 
			data:$("#formItem").serialize(), 
			dataType:"html", 
			success:function (data, textStatus) {
                               
                               $("#itemsdiv").html(data);   
                               $('#ajax').remove();
                                LoadJSajax();
                            },                                    
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/companiesitems"
		});
});});
//se hace la validacion correspondiente desde ajax en el modelo
$(document).ready(function () {
	$("#comitems").bind("submit", function (event) {
            event.preventDefault();
		$.ajax({
			async:true, 
			data:$("#comitems").serialize(), 
			dataType:"html", 
			success:function (data, textStatus) {                               
				//$("#mm").html(data);                                
                                //alert('companies item');
                         },                                    
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/registercompaniesitems"
		});
});});

$(document).click(function (event) {      
     $('#brow.dropdown').find('.dropdown-menu').stop(true, true).hide();
     $('#brow.dropdown').removeClass('open')
});


$(document).ready(function () {
	$("#bolivia_companiesBrowser").bind("keyup", function (event) {              
            var val = $(this).val();

              $('#brow.dropdown').find('.dropdown-menu').stop(true, true).hide();
    $('#brow.dropdown').removeClass('open');
		$.ajax({
			async:true, 
			data:{id:'#bolivia_companiesBrowser',ul:'#browsers',value:val},  
			dataType:"html", 
			success:function (data, textStatus) {
				$("#browsers").html(data);
 $('#brow.dropdown').find('.dropdown-menu').stop(true, true).show();
    $('#brow.dropdown').addClass('open');
      }, 
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/tags"
		});
        });
});


$(document).ready(function () {
 $("#bolivia_companiesBrowser").bind("hover", function () {          
             $('#brow.dropdown').find('.dropdown-menu').stop(true, true).show();
             $('#brow.dropdown').addClass('open');    
                 
});
});



$(document).ready(function () {
	$("#registercompanytag").bind("keyup", function (event) {
              var val = $(this).val();
		$.ajax({
			async:true, 
			data:{id:'#registercompanytag',ul:'#registertag',value:val}, 
			dataType:"html", 
			success:function (data, textStatus) {
				$("#registertag").html(data);}, 
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/tags"
		});
});});

 $("#pais").change(function() {
                $("#pais option:selected").each(function() {
                   var pais = $(this).val();
                     $.ajax({
                        url: "http://localhost/people/otros/mostrar_ciudades",
                        type: 'POST',
                        data: {pais: pais},                       
                        //dataType: "json",
                        // dataType: "html",
                        //  beforeSend: function(){alert('cargando..');},
                        success:  function(dato) {
                            var res = JSON.parse(dato);
                            $("#ciudad").html(res.dato);                        
                        }
                    });
               });
           });      

$(document).ready(function () {
	$("#Category").bind("change", function () {
            $("#Category option:selected").each(function() {
                 var val = $(this).val();
                // alert(val);
                 $.ajax({
			async:true, 
			data: {category: val},   
			dataType:"html", 
			success:function (data, textStatus) {
                        $("#SubCategorySubCategory").html(data); 
                            },                                    
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/subcategories_option"
		});
         
});});});

$(document).ready(function () {
	$("#CompanyRegistercompanyForm").bind("submit", function (event) {
            event.preventDefault();
              if($('#registercompanytag').val()){
		$.ajax({
			async:true, 
			data:$("#CompanyRegistercompanyForm").serialize(), 
			dataType:"html", 
			success:function (data, textStatus) {
				$("#con1").html(data); 
                            },                                    
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/registercompany"
		});
              }else{
                  alert('tienes que insertar por lo menos 1 tag');
              }
});});

$(document).ready(function () {
    
          $('#UserRegisteruserForm').bind("submit",function(event) {
          event.preventDefault();
          if($('#GroupGroup').val()){
            $.ajax({
            async:true,            
            data:$("#UserRegisteruserForm").serialize(),
            dataType: 'html', 
            success:function (data, textStatus) {
                //$("#img").html(data);  // LoadJS();
            }, 
            type:"post", 
            url:"\/BoliviaEmpresa\/bolivia_companies\/registeruser"
              });   
          }else{
              alert('seleccione por lo menos 1 tipo de usu');
          }
         
});});    

$(document).ready(function () {
    
          $('#BranchRegisterBranchesForm').bind("submit",function(event) {
          event.preventDefault();
          
            $.ajax({
            async:true,            
            data:$("#BranchRegisterBranchesForm").serialize(),
            dataType: 'html', 
            success:function (data, textStatus) {
                //$("#img").html(data);  // LoadJS();
            }, 
            type:"post", 
            url:"\/BoliviaEmpresa\/bolivia_companies\/registerBranches/"
              });   
         
});});
//editar sucursal
$(document).ready(function () {    
          $('#BranchViewEditBranchForm').bind("submit",function(event) {
          event.preventDefault();
          
            $.ajax({
            async:true,            
            data:$("#BranchViewEditBranchForm").serialize(),
            dataType: 'html', 
            success:function (data, textStatus) {
                //$("#img").html(data);  // LoadJS();
            }, 
            type:"post", 
            url:$(this).attr("action")
              });   
         
});});

$(document).ready(function () {
    
          $('#DealRegisterDealsForm').bind("submit",function(event) {
          event.preventDefault();
          
            $.ajax({
            async:true,            
            data:$("#DealRegisterDealsForm").serialize(),
            dataType: 'html', 
            success:function (data, textStatus) {
                //$("#img").html(data);  // LoadJS();
            }, 
            type:"post", 
            url:"\/BoliviaEmpresa\/bolivia_companies\/registerDeals"
              });   
         
});}); 
$(document).ready(function () {
    
          $('#loginusersLoginusersForm').bind("submit",function(event) {
          event.preventDefault();          
            $.ajax({
            async:true,            
            data:$("#loginusersLoginusersForm").serialize(),
            dataType: 'html', 
            success:function (data, textStatus) {
                $('#con1').html(data);
                 $('#ajax').remove();
                 LoadJSajax(); 
            }, 
            type:"post", 
            url:$(this).attr("action")
              });   
         
});}); 





    function subir_img(id,can){

        var inputFileImage = document.getElementById(id);
        var name = inputFileImage.name;
        var dir = $("#dir").val();
        var file = inputFileImage.files[0];
        if(file){
        var data = new FormData();
        
        data.append('archivo',file);
        data.append('name',name);
        data.append('dir',dir);
        data.append('can',can);
        var url = "\/BoliviaEmpresa\/bolivia_companies\/image";

        $.ajax({

        url:url,

        type:'POST',

        contentType:false,
        data:data,
        beforeSend: function () {
         $('#'+name).html('<img src="/BoliviaEmpresa/img/loading.gif" /> Cargando...');
        },
        success:function (data, textStatus) {
         $('#'+name).html(data);                               
         // LoadJS();
        }, 
        processData:false,

        cache:false});
       }
    }
    function eliminar_img(url,sname,remov,id){
        //
        $.ajax({
			async:true, 
			data:{dir:url,sname:sname,id:id}, 
			dataType:"html", 
			success:function (data, textStatus) {
				$(remov).remove(); 
                                alert(remov);
                            },
			type:"post", 
			url:"\/BoliviaEmpresa\/bolivia_companies\/img_remove"
		});
    }
    function LoadJS() {
            var tagjs = document.createElement("script");
            tagjs.setAttribute("type", "text/javascript");
            tagjs.setAttribute("id", "map1");
            tagjs.setAttribute("src", "/BoliviaEmpresa/js/map.js");
            document.getElementsByTagName("head")[0].appendChild(tagjs);
    }
    function LoadJSajax() {
            var tagjs = document.createElement("script");
            tagjs.setAttribute("type", "text/javascript");
            tagjs.setAttribute("id", "ajax");
            tagjs.setAttribute("src", "/BoliviaEmpresa/js/ajax.js");
            document.getElementsByTagName("head")[0].appendChild(tagjs);
    }
    function datos_marker(lat, lng, marker){
     var mi_marker = new google.maps.LatLng(lat, lng);
     map.panTo(mi_marker);
     google.maps.event.trigger(marker, 'click');
    }
    //se usara para todos los forms q se piensan cargar
    function cargarForm(url,cont){
		$.ajax({
			async:true, 
			//data:$(id).serialize(),
                        //revisar su antecesor y no el actual la primera ves
                        //eliminar solucion map.js 1 
			dataType:"html", 
			success:function (data, textStatus) {                               
                               
                                $("#map1").remove();
                                LoadJS();
                                $("#"+cont).html(data);                                                                
                                $('#ajax').remove();
                                LoadJSajax();                                 
                            },                                    
			type:"get", 
			url:url
		});
    }
    function cargarFormSM(url,cont){
		$.ajax({
			async:true, 
			//data:$(id).serialize(),
                        //revisar su antecesor y no el actual la primera ves
                        //eliminar solucion map.js 1 
			dataType:"html", 
			success:function (data, textStatus) {                               
                                $("#"+cont).html(data);                                                                
                                $('#ajax').remove();
                                LoadJSajax(); 
                            },                                    
			type:"get", 
			url:url
		});
    }
    function addressMap(lat,lng){
    	var latt = lat;
    	var lngg = lng;
    	 $.ajax({
                           async:true, 
                           data:{lat:latt,lng:lngg}, 
                           dataType:"html", 
                           success:function (data, textStatus) {
                                   $("#BranchAddress").val(data);  
                                   $("#BranchLatitude").val(latt);  
                                   $("#BranchLength").val(lngg);  
                               },                                    
                           type:"post", 
                           url:"\/BoliviaEmpresa\/bolivia_companies\/marcaMap"
           });
    }

$(document).ready(function () {
	$("#BranchCityId").bind("change", function () {
            $("#BranchCityId option:selected").each(function() {
                 var val = $(this).val();
                 if(val){
                    $.ajax({
                           async:true, 
                           data:{id:val}, 
                           dataType:"html", 
                           success:function (data, textStatus) {
                             //  alert('cargar');
                                 $("#map1").remove();
                                   LoadJS();
                                   $("#city").html(data); 
                                  

                               },                                    
                           type:"post", 
                           url:"\/BoliviaEmpresa\/bolivia_companies\/viewCityMap"
                   });
                 }else{
                     alert('Seleccione un pais');
                 }
            });
        });
    });
    
    
function edituser(id){
    $.ajax({
            async:true, 
            data:{id:id,val:'edit'}, 
            dataType:"html", 
            success:function (data, textStatus) {
                    $("#admin").html(data); 
                    $("#ajax").remove();
                    LoadJSajax()();

                },                                    
            type:"post", 
            url:"\/BoliviaEmpresa\/bolivia_companies\/editUsers"
    });
}

$(document).ready(function () {
     $('#UserViewEditUserForm').bind("submit",function(event) {
          event.preventDefault();
                    $.ajax({
                           async:true, 
                           data:$("#UserViewEditUserForm").serialize(),
                           dataType:"html", 
                           success:function (data, textStatus) {                                   
                                   $("#ajax").remove();
                                   LoadJSajax()();
                               },                                    
                           type:"post",
                           url: $(this).attr("action")
                   });
                
            });
        });
$(document).ready(function () {
     $('#CompanyViewEditCompanyForm').bind("submit",function(event) {
          event.preventDefault();
                    $.ajax({
                           async:true, 
                           data:$("#CompanyViewEditCompanyForm").serialize(),
                           dataType:"html", 
                           success:function (data, textStatus) {                                   
                                   $("#ajax").remove();
                                   LoadJSajax()();
                               },                                    
                           type:"post",
                           url: $(this).attr("action")
                   });
                
            });
        });     

       
