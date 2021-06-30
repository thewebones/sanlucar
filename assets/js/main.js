/**
 * Created by pompi on 23/06/21.
 */
 const url=document.location.href;
 
 document.getElementsByClassName("imagenMenu")[0].children[0].href; 
  
 const ocultar=(event)=>{
    if(!event.currentTarget.children[0].children[0].classList.contains("ocultar")){
        event.currentTarget.children[0].children[0].classList.add("ocultar");
        event.currentTarget.children[0].children[1].classList.add("mostrar"); 
}
}
 const mostrar=(event)=>{ 
    event.currentTarget.children[0].children[0].classList.remove("ocultar");
    event.currentTarget.children[0].children[1].classList.remove("mostrar");
 }

 const submitForm=()=>{
     document.getElementsByClassName("selectContainer")[0].submit();
 }

 const goLink=(event)=>{
    event.currentTarget.children[0].click();
 }
    
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

