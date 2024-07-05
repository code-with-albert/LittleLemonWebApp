//Checks if the Card body text needs to be truncated

var btns = document.getElementsByClassName("link-truncate-5");
var textTruncate = document.getElementsByClassName("text-truncate-5");
for (var i = 0; i < btns.length; i++) {
    if (!(textTruncate[i].scrollHeight <= textTruncate[i].clientHeight)) {
        btns[i].addEventListener("click", function () {
            var truncClass = "text-truncate-container-5"
            if (this.parentElement.classList.contains(truncClass)) {
                this.parentElement.classList.remove(truncClass);
                this.innerHTML = "show less"
            } else {
                this.parentElement.classList.add(truncClass)
                this.innerHTML = "show more"
            }
        });
    } else {
        btns[i].innerHTML = "";
    }
};