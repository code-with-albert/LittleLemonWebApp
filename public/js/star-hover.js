// fill the star on hover
var stars = document.getElementsByClassName("star");
for (var i = 0; i < 5; i++) {
    stars[i].addEventListener("click", function (){
        var stars = document.getElementsByClassName("star");
        //reset the stars to outline
        for(var j = 0; j < 5; j++) {
            starOutline = 'star-outline';
            starFull = 'star-full';
            if(stars[j].classList.contains(starFull)){
                stars[j].classList.remove(starFull);
                stars[j].classList.add(starOutline);
            }
        }

        starCount=this.id.split('-')[1]-1;
        for(var j = 0; j <= starCount; j++) {
            stars[j].classList.add(starFull);
        }
        document.getElementById("star-count").value=starCount+1
    })
    };