
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
     <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

     <style type="text/css">

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand';
  font-weight: 900;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: url(bglogin.jpg);
  background-size: cover;
  
}
.container{
  margin-top: 50px;
  max-width: 1500px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 900;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 50%;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(50% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 900;
  margin-bottom: 5px;
}

.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}


.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}



 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 900;
 }
 form .category{
   display: flex;
   width: 30%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 10%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #male:checked ~ .category label .one,
 #female:checked ~ .category label .two{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, rgba(9,224,138,1) 25%, rgba(5,231,183,1) 50%, rgba(0,212,255,1) 100%);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, rgba(9,224,138,1) 25%, rgba(5,231,183,1) 50%, rgba(0,212,255,1) 100%);
  }
 @media(max-width: 1500px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 1500px){
  .container .content .category{
    flex-direction: row;
  }
}</style>

   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      
      <form action="register-check.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="pname" class="pname" placeholder="Enter your name" required>
          </div>
          
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname" class="uname" placeholder="Enter your username" required>
          </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" class="email" placeholder="Enter your email" required>
          </div>
          
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="pnumber" class="pnumber" placeholder="Enter your number" required>
          </div>
          
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="userpass" class="userpass" placeholder="Enter your password" required>
          </div>
          
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpass" class="cpass" placeholder="Confirm your password" required>
          </div>
          
          
          
          <div class="input-box">
          <span class="details">Address 1</span>
          <input type="text" name="address1" class="address1" placeholder="Enter Address" required>
          </div>

        

        </div>
        
        <div class="gender-details">
          <input type="radio" name="gender" class="gender" value="-Male" id="male">
          <input type="radio" name="gender" class="gender" value="Female" id="female">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="male">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="female">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="submit" value="Register">

          

        </div>
     
      </form>

      <form action="loginstudent.php">
          
          <button type="submit">Back</button>

      </form>    

    </div>
  </div>

</body>
</html>