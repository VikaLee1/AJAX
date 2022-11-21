<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   
    <style>
      .card {
                margin: 0 auto;
                background-color: #BF785E;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                
            }   
       
button {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
a:hover,
button:hover {
  transform: scale(1.1);
}
    </style>
</head>
<body style="background: #F2CBBD">
    
<div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: 100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-3">Registration Form</h2>
          <div class="text-center mb-3">
         
       
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="fname" class="form-control" />
                  <label class="form-label" for="form3Example1">First name</label>
                  <span class="text-danger">  </span>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text"  name="lname" class="form-control" />
                  <label class="form-label" for="form3Example2">Last name</label>
                  <span class="text-danger"> </span>
                </div>
              </div>
            </div>

            

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
              <span class="text-danger"> </span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="pass" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
              <span class="text-danger">  </span>
            </div>

           

            <!-- Submit button -->
            <button type="submit" class="btn btn-block mb-4 text-white" name="btn-signup" style="background: #733B36">
              Register
            </button>
           
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Design Block -->  

</body>
</html>