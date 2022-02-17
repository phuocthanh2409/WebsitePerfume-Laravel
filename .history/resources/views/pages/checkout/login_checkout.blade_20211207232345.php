@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
      <div class="row">
        <div class="col-md-5">
          <form role="form" method="post" action="register.php">
           <fieldset>							
             <p class="text-uppercase pull-center"> SIGN UP.</p>	
              <div class="form-group">
               <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
             </div>

             <div class="form-group">
               <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
             </div>
             <div class="form-group">
               <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
             </div>
               <div class="form-group">
               <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password2">
             </div>
             <div class="form-check">
               <label class="form-check-label">
                 <input type="checkbox" class="form-check-input">
                 By Clicking register you're agree to our policy & terms
               </label>
               </div>
              <div>
                    <input type="submit" class="btn btn-lg btn-primary   value="Register">
              </div>
           </fieldset>
         </form>
       </div>
       
       <div class="col-md-2">
         <!-------null------>
       </div>
       
       <div class="col-md-5">
             <form role="form">
           <fieldset>							
             <p class="text-uppercase"> Login using your account: </p>	
                
             <div class="form-group">
               <input type="email" name="username" id="username" class="form-control input-lg" placeholder="username">
             </div>
             <div class="form-group">
               <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
             </div>
             <div>
               <input type="submit" class="btn btn-md" value="Sign In">
             </div>
                
            </fieldset>
       </form>	
       </div>
      </div>
  </div>
</section>
@endsection