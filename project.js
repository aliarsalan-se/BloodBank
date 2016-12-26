<script type="text/javascript">
var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "a.jpg" // set image object src property to an image's src, preloading that image in the process
slideimages[1] = new Image()
slideimages[1].src = "b.jpg"
slideimages[2] = new Image()
slideimages[2].src = "c.jpg"
slideimages[3] = new Image()
slideimages[3].src = "d.jpg"
slideimages[4] = new Image()
slideimages[4].src = "e.jpg"
slideimages[5] = new Image()
slideimages[5].src = "f.jpg"
//variable that will increment through the images
var step=0

function slide(){
 //if browser does not support the image object, exit.
if (step<5){
  document.getElementById('slider').src = slideimages[step].src;
  step++;
  }
else{
  step=0;
  }
setTimeout("slide()",3500)
}

slide()
</script>