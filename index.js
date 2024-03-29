window.onload = function () {
  // document.body.style.overflowY = "hidden";
  // navitems.style.display = "none"
};

const navitems = document.getElementById("navitems");
const finderText = document.getElementById("spaceFindertext");
const ownerText = document.getElementById("spaceOwnertext");
const finder = document.getElementById("spaceFinder");
const owner = document.getElementById("spaceOwner");

const spaceFinderForm = document.getElementById("spaceFinderForm");
const spaceOwnerForm = document.getElementById("spaceOwnerForm");

const body_content = document.getElementById("body_content");
const dialogue = document.getElementById("dialogue");

finderText.style.display = "block";
ownerText.style.display = "none";

spaceFinderForm.style.display = "block";
spaceOwnerForm.style.display = "none";

// CONSTANTS
spaceFinder = "spaceFinder";
spaceOwner = "spaceOwner";
var userType = 1;
var isNavOpen = false;
toggleDisplay = (eId) => {
  $(eId).is(":visible") ? $(eId).hide() : $(eId).show();
};

function navOpenClose(e) {
  console.log(isNavOpen);
  isNavOpen
    ? (navitems.style.display = "none")
    : (navitems.style.display = "flex");
  isNavOpen = !isNavOpen;
}

function switchUser(e) {
  e.preventDefault();
  userType = e.target.value === spaceOwner ? 1 : 0;
  console.log("Swith user", userType);

  if (userType != 1) {
    finderText.style.display = "block";
    ownerText.style.display = "none";
    spaceFinderForm.style.display = "block";
spaceOwnerForm.style.display = "none";
    finder.classList.add("activeUser");
    owner.classList.remove("activeUser");
  } else {
    finderText.style.display = "none";
    ownerText.style.display = "block";
    spaceFinderForm.style.display = "none";
spaceOwnerForm.style.display = "block";
    owner.classList.add("activeUser");
    finder.classList.remove("activeUser");
  }
}

function sendMessgae(event, flag) {
  event.preventDefault();
  console.log("Sent message", flag);

  if (flag) {
    // debugger
    body_content.classList.add("blur");
    dialogue.style.display = "block";
    window.scrollTo(0, 0);
    document.body.style.overflow = "hidden";
  }
}

function preventDefault(event){
  event.preventDefault();
}

function closePopup() {
  console.log("Close popup");
  body_content.classList.remove("blur");
  document.body.style.overflow = "visible";
  dialogue.style.display = "none";
}

// finder.addEventListener('click', switchUser)

// [finder, owner].forEach((item) => {
//     // console.log("Item",item)
//     item.addEventListener('click', switchUser)

// })

function myFunction() {
  // Put all your code here
  // And at the end run start() function
  console.log("fadfad");
}
