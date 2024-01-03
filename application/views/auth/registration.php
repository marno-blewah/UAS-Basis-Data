   <div class="container">

       <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
           <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                   <div class="col-lg">
                       <div class="p-5">
                           <div class="text-center">
                               <h1>
                                   <img src="https://amikom.ac.id/theme/material/custom/images/logos/icon_text/icontext_amikom_100p.png" alt="">
                               </h1>
                           </div>
                           <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                               <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Fullname" value="<?= set_value('name'); ?>">
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                               </div>
                               <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">
                                       <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                   </div>
                                   <div class="col-sm-6">
                                       <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                   </div>
                               </div>
                               <button type="submit" class="btn btn-primary btn-user btn-block">
                                   Register Account
                               </button>
                           </form>
                           <hr>
                           <div class="text-center">
                               <a class="small" href="#">Forgot Password?</a>
                           </div>
                           <div class="text-center">
                               <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   </div>