// oculta el Dropdown en costos
$( "a.dropdown-item" ).click(function() {
  $( "#btnM" ).toggleClass( "collapsed" );
  $( "#btnM" ).attr("aria-expanded", "false");
  $( "#navbarNavDropdownA" ).toggleClass( "show" );
});
//Oculta nav al abrir foto
$(document).ready(function(){
    $(".img-thumbnail").click(function(){
        $("nav").hide();
    });
    $("#cierra").click(function(){
        $("nav").show();
    });
});
// reveal
window.sr = ScrollReveal();
sr.reveal('.animDer', {
	duration: 2000,
	origin: 'right',
	distance: '75px'
});
window.sr = ScrollReveal();
sr.reveal('.animIzq', {
	duration: 2000,
	origin: 'left',
	distance: '75px'
});

//Funciones de galeria
function obtenerID(elemento)
{
 	console.log(elemento.id);
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById(elemento.id);
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	//img.onclick = function(){
	function prueba(){
		console.log("llega");
	    modal.style.display = "block";
	    modalImg.src = img.src.replace("_tmb","");
	    captionText.innerHTML = this.alt;
	}
	prueba();
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	    modal.style.display = "none";
	}	 
}

