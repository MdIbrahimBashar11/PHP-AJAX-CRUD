
//Post Data

$(".btn").click(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

     $.ajax({
        method: "POST",
        url: "insert.php",
          data: {name:name , email:email , pass:pass},
          success:function(data) {
            read();
          }
     })
})


//Show Data
read();
function read() {
     var read="";
     $.ajax({
        url:"read.php",
        method: "POST",
        data: {read:read},
        success:function(data) {
        $("#tbody").html(data);
        }
     })
}

//delete data

function Delete(userid) {
    $.ajax({
        url:"delete.php",
        method: "POST",
        data: {userid:userid},
        success:function() {
           alert("Are Sure")
           read();
        }
     })
}


//edit data

function Edit(userid) {
     $.ajax({
        method: "GET",
        url: "edit.php",
          data: {userid:userid},
          success:function(data) {
              $("body").html(data);
          }
     })
}

//Update

function UPDATE(id) {
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();

    $.ajax({
        method: "GET",
        url: "confirmUpdate.php",
        data: {name:name , email:email , pass:pass, id:id},
          success:function(data) {
              alert(data);
              window.location.href = "index.php";
          }
     })
}