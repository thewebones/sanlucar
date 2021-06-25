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
