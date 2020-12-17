function sendData(name,successCall){
  $.get(
    `server.php?name=${name}`,
    //{'name':name},   //for post
     function(data){
     // alert(data);
      successCall(data);
    }
  );
}