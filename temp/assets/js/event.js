  
            // Get the modal
           // Get the modal
var modal = document.getElementById('myModal');

// Get the images and bind an onclick event on each to insert it inside the modal
// use its "alt" text as a caption
var images = document.querySelectorAll(".img-model");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
for(let i = 0; i < images.length; i++){
  images[i].onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
}

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("modal")[0];
            // Get the <span> element that closes the modal


            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
              modal.style.display = "none";
            }
              