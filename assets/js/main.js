/**
 * Created by pompi on 23/06/21.
 */
    
 jQuery('.img-icohover').css("display", "none"); 

 jQuery('.item').hover(function () {
     var id=this.id;
     var id = id.replace("item-","");
     jQuery('#img-ico-'+id).css("display", "none");
     jQuery('#img-icohover-'+id).css("display", "block");
     jQuery('#item-nombre-'+id).css('color','#8BDDFC')
 }, function () {
    var id=this.id;
    var id = id.replace("item-","");
    jQuery('#img-ico-'+id).css("display", "block");
    jQuery('#img-icohover-'+id).css("display", "none");
    jQuery('#item-nombre-'+id).css('color','#021B5E')
 }
 
 )


