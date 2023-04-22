
  //JVScript for chat list
  //search bar show - hide

  const searchBar = document.querySelector(".users .search input");
  const searchBtn = document.querySelector(".users .search button");
  const usersList =  document.querySelector(".users .users-list");
  
  searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
  }

  searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    if(searchTerm != "") {
      searchBar.classList.add("active");
    }else{
      searchBar.classList.remove("active");
    }
    //start Ajax
    let xhr = new XMLHttpRequest(); //creating XML obj
    xhr.open("POST", "php-code/search.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
          if(xhr.status === 200) {
            let data = xhr.response;
            usersList.innerHTML = data;
          }
        }
     }
     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhr.send("searchTerm=" + searchTerm);
  }
  
  setInterval(()=>{
    //start Ajax
    let xhr = new XMLHttpRequest(); //creating XML obj
    xhr.open("GET", "php-code/users-chatlist.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
          if(xhr.status === 200) {
            let data = xhr.response;
            //below code is to prevent ajax running twice
            if(!searchBar.classList.contains("active")) {
              usersList.innerHTML = data;
            }
            
          }
        }
     }
  xhr.send();
}, 500);
 //this function will run every 500mx