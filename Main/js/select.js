const selectedAll = document.querySelectorAll(".selected");
selectedAll.forEach(selected=>{
const optionsContainer = selected.previousElementSibling;
const searchBox = selected.nextElementSibling;

const optionsList = optionsContainer.querySelectorAll(".option");
/*სელექთზე დაკლიკებით რომ ჩამოიშალოს */
  selected.addEventListener("click", () => {
    // მეორე სელექტის ჩამოშლისას წინა სელექტი აქტივზე რომ არ დარჩეს
  if(optionsContainer.classList.contains("active")){
    optionsContainer.classList.remove("active");
  }else{
    let currentActive = document.querySelector(".options-container.active");
    if(currentActive){
      currentActive.classList.remove("active");
    }
    optionsContainer.classList.add("active");
  }

  searchBox.value = "";
  filterList("");

  if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
  }
});
/*როცა სელექთში რამეს მოვნიშნავთ მთავარ ბოქსში რომ ჩაჯდეს რასაც მოვნიშნავთ*/
optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});

searchBox.addEventListener("keyup", function(e) {
  filterList(e.target.value);
});

const filterList = searchTerm => {
    // case sensitive რომ არ იყოს
  searchTerm = searchTerm.toLowerCase();
  optionsList.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
        // თუ ვერ მოძებნა ცარიელი რომ დააბრუნოს
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};
});
