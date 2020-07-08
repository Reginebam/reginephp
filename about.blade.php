@extends('layout.apps')

@section('contenta')
   

   
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

<style>


.section-title h2 {
  font-size: 28px;
  font-weight: 400;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::before {
  content: '';
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: rgb(221, 221, 221);
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #f88f04;
  bottom: 0;
  left: calc(50% - 20px);
}

h5{
  color: white;
  text-align: left;
}
</style>


<div class="contenair" >

  
  <div class="section-title" style="margin-right: 15%">
    <h2>About Us</h2>
  </div>

  <div class="skills" style="margin-right: 8%">
    <p>name means “maximal wisdom” and our logo – a classic Ghanaian Adinkra symbol -
       literally means “climbing the right tree”. This expression means: “He who works 
       for a good cause may expect the help of others”. It reflects our mission,which is 
       to give young Africans who are less fortunate a chance to be educated and equipp</p>
  </div>


  <div class="section-title" style="margin-right: 15%">
    <h2>Our Skills</h2>
  
  </div>
  
    <div class="skills" style="margin-right: 15%">
      <div class="row3">
      <div class="col-md-6">
      <div class="progress">
        <div class="progress-bar1" role="progressbar" aria-valuenow="85" arial-valuemin="0" aria-valuemax="100" style="width:75%">
          <h5>SKIN CARE 85%</h5>
        </div>
      </div>
       </div>
       </div>

       <div class="row3" >
        <div class="col-md-6">
        <div class="progress">
          <div class="progress-bar2" role="progressbar" aria-valuenow="95" arial-valuemin="0" aria-valuemax="100" style="width:95%">
            <h5>ESTETIC 95%</h5>
          </div>
        </div>
         </div>
         </div>

         
       <div class="row3" >
        <div class="col-md-6">
        <div class="progress">
          <div class="progress-bar3" role="progressbar" aria-valuenow="55" arial-valuemin="0" aria-valuemax="100" style="width:55%">
            <h5>Vente  55%</h5>
          </div>
        </div>
         </div>
         </div>

        
      </div>
   
      
      </div>
   
    @endsection












{{-- 
<div class="header">
 
  <div class="nav">
    <ul>
      <li><a href=""> HOME</a></li>
      <li><a href=""> SERVICE</a></li>
      <li><a href=""> ABOUT</a></li>
     <li><a class="active" href=""> CONTACT</a></li>
     
     
    
    </ul>
  </div>
</div> --}}
{{-- 
<div class="row">
  <div class="leftcolumn">
    
   <div class="row" >
    
    <div class="col-md-5" >
    
       <img style="width:95%" src="https://tendancespeoplemag.com/wp-content/uploads/2019/12/wafa-sarkis.jpg"
    alt="places">
    </div>
    <div class="col-md-6" >
      <h2> BR FASHION FOUNDER</h2>
      <p>Our name means “maximal wisdom” and our logo – a classic Ghanaian Adinkra symbol - literally means “climbing the right tree”. This expression means: “He who works for a good cause may expect the help of others”. It reflects our mission, which is to give young Africans who are less fortunate a chance to be educated and equipped for their professional lives. We believe they have great potential, but they can be helped by a little push to climb to the next branch of the tree of their personal development.
      
     </p>
      </div> 

    </div>

    <div class="row" >
    
      <div class="col-md-5" >
        <h1 style="text-align: center"> BR FASHION TEAM</h1>
         <img style="width:95%" style="height: 0%" src="https://tendancespeoplemag.com/wp-content/uploads/2019/12/wafa-sarkis.jpg"
      alt="places">
     
      <p>Our name means “maximal wisdom” and our logo – a classic Ghanaian Adinkra symbol - literally means “climbing the right tree”. This expression means: “He who works for a good cause may expect the help of others”. It reflects our mission, which is to give young Africans who are less fortunate a chance to be educated and equipped for their professional lives. We believe they have great potential, but they can be helped by a little push to climb to the next branch of the tree of their personal development.
      
      Maxim Nyansa stands for the best of two worlds in various ways:
      
      First, we are an NGO, and at the same time are also looking for sustainable business models to grow our work in West-Africa fast. Second, while we introduce various practices, values and technologies from Europe or the US, we also highly value the African sense of belonging. For us, Maxim Nyansa is an extended family. A circle of trust where family members know they will find the necessary support.</p>
      </div>
  
      </div> --}}
   {{--  <div class="card">
      <h2>FONDATRICE</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>EQUIPE BF</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div> --}}
  {{-- </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html> --}}
