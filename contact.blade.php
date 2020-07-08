@extends('layout.apps')

@section('contenta')

    <div class="contenaire" style="margin-left: 5%">


    
      <div class="row" >
    
        <div class="col-md-6" >
        
<div class="form" style="margin-left:2%"   >
  <form action="/action_page.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">
    <label for="email">email</label>
    <input type="text" id="email" name="email" placeholder="Your email">
    <label for="subject">subject</label>
    <input type="text" id="subject" name="subject" placeholder="Your subject ..">
    <label for="message">Message</label>
    <input style="padding: 15%" type="text" id="message" name="message" placeholder="Your Message ..">


  
    <input type="submit" value="Submit">
    
  </form>
</div>
        </div>
        <div class="col-md-6" style="margin-left: 5%" >
          <div class="col-md-6" style="margin-top: 25%">
            <div class="co" style="border-style: solid" >
              
              <li style="list-style:none"> <img src="assets/images/email.png" style="width: 5%">
               brfashion@gmail.com
              </li>
              </div><br>
              <div class="co" style="border-style: solid" >
              
                <li style="list-style:none"> <img src="assets/images/phone.png" style="width: 5%">
                 <span>00226 71 91 14 40 </span>
                </li>
                </div><br>
                <div class="co" style="border-style: solid" >
              
                  <li style="list-style:none"> <img src="assets/images/location.png" style="width: 5%">
                  karpala, Av tensoba Ouaga 01 BP
                  </div><br>

        </div>
          </div> 
    
        </div>
  


</div>

  


<style>
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid rgb(238, 115, 14);
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: yellowgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #3828c4;
  }
  
  form {
    border-radius: 5px;
    /* background-color:rgb(238, 115, 14); */
    padding: 20px; 
  
  }
  
  
  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid rgb(238, 115, 14);
    border-radius: 4px;
    background-color: white;
    font-size: 16px;
    resize: none;
  }
  </style> 


<script>

window.onscroll = function() {myFunction()};
  
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
@endsection