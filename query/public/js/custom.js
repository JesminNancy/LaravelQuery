 
 
 function SendData(){
 
  var myName=  document.getElementById('myName').value;
  
  var myClass=  document. getElementById('myClass').value;
  
  var myRoll=  document. getElementById('myRoll').value;
  
  
  var url="/insertData";
  
  var data={name:myName, class:myClass, roll:myRoll};
  
  axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });

}


function SendDelete(){

  var myID=  document.getElementById('myID').value;
  
  var url="/deleteData";
  
  var data={id:myID};
  
  axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });
}

function updateData(){

  var myId=  document.getElementById('myId').value;
  var myName=  document.getElementById('myName').value; 
  var myClass=  document. getElementById('myClass').value;
  var myRoll=  document. getElementById('myRoll').value;
  
  var url="/updateData";
  
  var data={id:myId, name:myName, class:myClass, roll:myRoll};
  
  axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });

}