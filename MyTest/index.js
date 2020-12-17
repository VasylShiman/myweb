
const name = document.querySelector("#idname");
const resultBlock = document.querySelector("#result");
const clickButton = document.querySelector("#click-me");
clickButton.addEventListener("click",()=>{
  
  if(name.value == ""){
    document.querySelector("#errorMess").innerText = "Введите имя!";
    return false;
  }
  console.log(name.value);
  document.querySelector("#errorMess").innerText = "";
  
  sendData(name.value,OndataReceived);
});

function OndataReceived(data){

  const idNumber = document.createElement("p");
  idNumber.innerHTML = "ID is : " + data;
  document.querySelector("#result").appendChild(idNumber);
  
;
}








