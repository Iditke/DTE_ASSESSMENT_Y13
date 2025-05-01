function myFunction() {
    var input, filter, ul, li, h5, i, txtValue;
    input = document.querySelector(".search-input");
    filter = input.value.toUpperCase();
    ul = document.querySelector(".search-list");
    li = ul.querySelectorAll(".search-item");
    for (i = 0; i < li.length; i++) {
        h5 = li[i].querySelector(".search-link");
        txtValue = h5.textContent || h5.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

document.addEventListener("DOMContentLoaded", function() {
	myFunction();
});

