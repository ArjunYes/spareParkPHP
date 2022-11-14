// console.log("WORKING")
const finderText = document.getElementById("spaceFindertext");
const ownerText = document.getElementById('spaceOwnertext')
const finder = document.getElementById("spaceFinder");
const owner = document.getElementById('spaceOwner')

finderText.style.display = "block";
ownerText.style.display = "none";

// CONSTANTS
spaceFinder = "spaceFinder";
spaceOwner = "spaceOwner"

var userType = 1;

function switchUser(e) {
    e.preventDefault();
    userType = e.target.value === spaceOwner ? 1 : 0
    console.log("Swith user", userType);


    if (userType != 1) {
        finderText.style.display = "block";
        ownerText.style.display = "none";
        finder.classList.add('activeUser');
        owner.classList.remove('activeUser');

    } else {
        finderText.style.display = "none";
        ownerText.style.display = "block";
        owner.classList.add('activeUser');
        finder.classList.remove('activeUser');
    }
}

function sendMessgae(event){
    event.preventDefault();
    console.log("gsfg");
}

// finder.addEventListener('click', switchUser)


// [finder, owner].forEach((item) => {
//     // console.log("Item",item)
//     item.addEventListener('click', switchUser)

// })



window.onload = (event) =>{
    
}