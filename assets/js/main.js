/**
 * Created by pompi on 23/06/21.
 */
    
 jQuery('.img-icohover').hide();

 jQuery('.img-ico').hover(function () {
     var id=this.id;
     var idhover=id.replace("img-ico-","img-icohover-")

    jQuery('#'+idhover).show();
    
 })
