// LAYOUT SIDE BAR
// LAYOUT SIDE BAR
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

let temp = false;

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});


// following are the code to change sidebar button(optional)
function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("la-bars", "la-times"); //replacing the iocns class
  } else {
    closeBtn.classList.replace("la-times", "la-bars"); //replacing the iocns class
  }
}

// LAYOUT SIDE BAR END
// LAYOUT SIDE BAR END