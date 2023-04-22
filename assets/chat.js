const form = document.querySelector(".typing-area");
const inputField = document.querySelector(".input-field");
const sendBtn = document.querySelector("form button");
const chatBox = document.querySelector(".chat-box");
const incoming_id = form.querySelector(".incoming_id").value;

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () =>{
    //start Ajax
    let xhr = new XMLHttpRequest(); //creating XML obj
    xhr.open("POST", "php-code/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
          if(xhr.status === 200) {
            inputField.value = ""; //once msg is inserted into database this will be blank
            scrollToBottom();
        }
        }
     }
     let formData = new FormData(form);
     xhr.send(formData);
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}

setInterval(()=>{
    //start Ajax
    let xhr = new XMLHttpRequest(); //creating XML obj
    xhr.open("POST", "php-code/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
          if(xhr.status === 200) {
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")) {
                scrollToBottom();
            }
          }
        }
     }
     xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhr.send("incoming_id="+incoming_id);
}, 500);

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}