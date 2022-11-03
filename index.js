console.log("WORKING")
const finder = document.getElementById("spaceFinder");
const owner = document.getElementById('spaceOwner')


function switchUser(e) {
    e.preventDefault();
    console.log("Swith user",e.target.value)
}

// finder.addEventListener('click', switchUser)


[finder, owner].forEach((item) => {
    // console.log("Item",item)
    item.addEventListener('click', switchUser)

})