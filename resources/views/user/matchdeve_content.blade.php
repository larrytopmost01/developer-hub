 
<style>
 .btn-success:not(.btn-light) {
    color: #ebedf2;
}

button, [type='button'], [type='reset'], [type='submit'] {
    -webkit-appearance: button;
    background-color: #28a745;
    background-image: none;
}

#d1 {
  background-color: ;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  border: 1px solid black;

}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 1px solid black;
  background-color: #f8f9fa !important;
  /* background-color: #f8f8f8; */
  font-size: 16px;
  resize: none;
}

</style>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
              @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  <!-- alert alert-success -->
     @endif
       


 <!-- time select -->     

  <!-- <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
       <h2>About Me</h2>
      <h5>Photo of me:</h5> 
      <div class="fakeimg">
      <img src="/image/Jonathan-Headshot.jpg" alt="profile pic"  class="rounded-circle"  width="204" height="136" class="devAvatar" />
      </div>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Name: Olanrewaju Kabir</h2>
      <h5>Field: Fullstack Developer</h5>
      <h5>Languages: PHP CSS LARAVEL</h5>
      <div class="fakeimg">Content</div>
      <!-- <p>Some text..</p> -
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <button type="button" class="btn btn-success">AVAILABLE</button>
      <button type="button" class="btn btn-success">MATCH DEVELOPER</button>
      <button type="button" class="btn btn-success">CHAT</button>


      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
    <!-- </div>
  </div>
</div>  -->
  
@foreach( $matching as $match)
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <!-- <h2>About Me</h2>
      <h5>Photo of me:</h5> -->
      <div class="fakeimg">
      <img src="{{ asset($match->image)}}" alt="profile pic"  class="rounded-circle"  width="150" height="90" class="devAvatar" />
      </div>
    </div>
    <div class="col-sm-4">

      <h2>{{$match->firstname}}</h2>
      <h5>{{$match->lastname}}</h5>
      <h5> {{$match->language}}</h5>
      <h5>{{$match->email}}</h5>
      <div class="fakeimg">Last active 10 days ago</div>
      <h5>Lagos Nigeria</h5>

         </div>
    <div class="col-sm-4" id="d1">
   
    <textarea>Some text...</textarea>
  <button type="button" class="btn btn-primary">{{$match->invite}}</button>
  <button type="button" class="btn btn-primary">{{$match->saved}}</button>
  <button type="button" class="btn btn-primary">Skip</button>
  <button type="button" class="btn btn-primary">Hide</button>
    <p> ( you have 5 invite left the month) </p>

    </div>
    <div class="col-sm-12">
      <h2> Intro</h2>
      <p>{{$match->message}}</p>

       </div>
  </div>
</div>
@endforeach

           


  
          
              </div>
            </div> 
         </div> 