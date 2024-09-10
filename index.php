<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <form method="post" id="Student">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" 
                  id="completeName" placeholder="Enter your name"/>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"
                    id="completeEmail" placeholder="Enter your email"/>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Place</label>
                    <input type="text" class="form-control"
                    id="completePlace" placeholder="Enter your place"/>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" 
                    id="completeMobile" placeholder="Enter your mobile no"/>
                  </div>
              </form>
          </div>

          <div class="modal-footer">
          
            <button type="button" onclick="addUser()" class="btn btn-success">Submit</button>
            <button
            type="button"
            class="btn btn-primary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h3 class="text-center bg-dark text-white p-2">Students Data</h3>
      <button
        type="button"
        class="btn btn-dark"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
      >
        Add new user
      </button>  
      <div id="displayDataTable"> </div>
    </div>
    

<!-- Update Form -->

<div
      class="modal fade"
      id="UpdateModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update User Details</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body">
            <form method="post">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" 
                  id="UpdateName" placeholder="Enter your name"/>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"
                    id="UpdateEmail" placeholder="Enter your email"/>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Place</label>
                    <input type="text" class="form-control"
                    id="UpdatePlace" placeholder="Enter your place"/>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" 
                    id="UpdateMobile" placeholder="Enter your mobile no"/>
                  </div>
              </form>
          </div>

          <div class="modal-footer">
          
            <button type="button" class="btn btn-success" onclick="UpdateDetail()">Update</button>
            <button
            type="button"
            class="btn btn-primary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
          <input type="hidden" id="hiddendata" >
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <h6 class="text-center bg-dark text-white p-2">Made By Bablu</h6>
      <!-- <h6 class="text-center bg-dark text-white p-2">2024</h6> -->
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function()
        {
            displayData();
        });

        function displayData()
        {
            var displayData='true'
            $.ajax({
                url:"display.php",
                type:"POST",
                data:{
                    displaySend:displayData
                },
                success:function(data,status)
                {
                    $('#displayDataTable').html(data);
                }
              
            })
        }

        function addUser()
        {
            var addName =  $('#completeName').val()
            var addEmail =  $('#completeEmail').val()
            var addPlace =  $('#completePlace').val()
            var addMobile =  $('#completeMobile').val()
            if(!addName == '' && !addEmail == '' && !addPlace == '' && !addMobile == ''){
              $.ajax({
                  url:"insert.php",
                  type:'POST',
                  data:{
                      nameSend:addName,
                      emailSend:addEmail,
                      placeSend:addPlace,
                      mobileSend:addMobile
                  },
                  success:function (data,status)
                  {
                      // console.log(status);
                      $('#Student')[0].reset();
                      $('#exampleModal').modal('hide');
                      displayData();
                  }
              })
            }else{
              alert("All fields are required!");
            }
        }

        function DeleteUser(deleteid){
          if (confirm("Are you sure want to delete this User ? ")){
          $.ajax({
              url:"delete.php",
              type:'POST',
              data:{
                  deletesend:deleteid
              },
              success:function (data,status)
              {
                  // console.log(status);
                  displayData();
              }
          })
          }else {
         return null;
        }
        }

      function UserDetail(updateid){
        $('#hiddendata').val(updateid);
        $.post("update.php", {updateid:updateid}, function(data,status){
          var userid=JSON.parse(data);
          $('#UpdateName').val(userid.name);
          $('#UpdateEmail').val(userid.email);
          $('#UpdatePlace').val(userid.place);
          $('#UpdateMobile').val(userid.mobile);
        });
        $('#UpdateModal').modal('show');
      }

      function UpdateDetail(){
        var UpdateName =  $('#UpdateName').val();
        var UpdateEmail =  $('#UpdateEmail').val();
        var UpdatePlace =  $('#UpdatePlace').val();
        var UpdateMobile =  $('#UpdateMobile').val();
        var hiddendata = $('#hiddendata').val();
        if(!UpdateName == '' && !UpdateEmail == '' && !UpdatePlace == '' && !UpdateMobile == '' && !hiddendata == ''){
          $.post("update.php",{
          UpdateName:UpdateName,
          UpdateEmail:UpdateEmail,
          UpdatePlace:UpdatePlace,
          UpdateMobile:UpdateMobile,
          hiddendata:hiddendata,
        },function(data,status)
        {
          // console.log(status);
          $('#UpdateModal').modal('hide');
          displayData();
        });
      } else {
          alert("All fields are required!");
        }
      }
    </script>
  </body>
</html>
