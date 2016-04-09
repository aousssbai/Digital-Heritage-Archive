function hover(element) {
    element.setAttribute('src', 'img/b32.png');
}
function unhover(element) {
    element.setAttribute('src', 'img/b3.jpg');
}

function mousedown()
{
	var snd = new Audio("AboutUs_button/mouse clic.mp3");
	snd.play();
	snd.currentTime=0;
}

function imgbutton(gn,pn)
{
	document.getElementById("im").src = "img/g"+gn+"/"+pn+".jpg";
}

var g;
function group(group)
{
g = group;
}

	var numberofpics = 4;//it is the number of pictures in the picture gallery.
  	var counter=1;
        $().ready(function () {
            $("#left").click(function () {
                // $("#unit").stop(true, false).animate({"left": 0}, 500);
                // $("#unit").fadeIn();
                // $("#unit").fadeIn("slow");
                // $("#unit").fadeIn(3000);
                if (counter ==4)
                 {       
                 counter =1;  
                 $("#im").attr("src","img/g"+g+"/"+counter+".jpg");}   
                else
                {if (counter < 4)
                {
                counter=counter+1;
                 $("#im").attr("src","img/g"+g+"/"+counter+".jpg");}
                 }
                  
            
            });
            $("#right").click(function () {
                // $("#unit").stop(true, false).animate({"left": -1000}, 500);
                if(counter>1){
                counter=counter-1;
                 $("#im").attr("src","img/"+counter+".jpg");}
                  })
        });