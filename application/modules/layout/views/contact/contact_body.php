
<!-- conatact page -->

<section>

    <div class="container-page py-5">
        <div class="row mx-auto">
        
        <?php foreach ($contact_update as $h) { ?>
            <div class="col-md-7">
                 <div class="">
                     <span>
                         <div class="logo">
                             <a href="">
                                 <img src="" alt="">
                             </a>
                             <a href="">
                             <?php echo $h['heading']?>
                             </a>
                         </div>
                     </span>
                     <h1 class="contact-title">
                     <?php echo $h['title']?>
                     </h1>
                     <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" class="my-5" alt="">
                    
                     <?php echo $h['description']?>
                     <p class="py-3 contact-add">
                        Simply fill out the form or call us at 
                         <a href="tel:0207 237 3388">
                        0207 237 3388
                    </a>
                     </p>
                 </div>
            </div>


            <?php }?>
            <div class="col-md-5">
              <div class="row mx-auto bg-light">
                  <div class="col-md-12 ">
                      <h6 class="p-3">Submit your contact info below, and we’ll get in touch ASAP.
                        Please fill out all fields.
                     </h6>
                     <p class="px-3">
                        Please fill out all fields.
                     </p>
                  </div>
                  <form action="" class="row mx-auto pb-3 form form-style-js" method="post"  id="form">
                    <div class="col-md-6 my-2">
                      <div class="form-control">
                        <input type="text" name="email" id="email" />
                        <label for="email">First Name</label>
                        <small>Error Message</small>
                      </div>
                    </div>
                    <div class="col-md-6 my-2">
                      <div class="form-control">
                        <input type="text" name="email" id="email" />
                        <label for="email">Last Name</label>
                        <small>Error Message</small>
                      </div>
                    </div>
                    <div class="col-md-12 my-2">
                      <div class="form-control">
                        <input type="text" name="email" id="email" />
                        <label for="email" class="ful-wd">Job Title</label>
                        <small>Error Message</small>
                      </div>
                    </div>
                    <div class="col-md-12 my-2">
                      <div class="form-control">
                        <input type="text" name="email" id="email" />
                        <label for="email" class="ful-wd">email</label>
                        <small>Error Message</small>
                      </div>
                    </div>
                    <div class="col-md-12 my-2">
                      <div class="form-control">
                        <input type="text" name="email" id="email" />
                        <label for="email" class="ful-wd">Phone</label>
                        <small>Error Message</small>
                      </div>
                    </div>
                    <div class="col-md-12 my-2">
                      <div class="form-control">
                        <input type="text" name="email" id="email" />
                        <label for="email" class="ful-wd">Company</label>
                        <small>Error Message</small>
                      </div>
                    </div>
             
                   
                    <div class="col-md-12">
                      <div class="form-group my-2"> 
                          <div class="form-control">
                          <div class="input-group">
                          <select name="state" class="selectpicker">
                            <option value=" " >Employees</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option >Arizona</option>
                            <option >Arkansas</option>
                            <option >California</option>
                          </select>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group my-2"> 
                        <div class="form-control">
                          <div class="input-group">

                          <select name="state" class="selectpicker" >
                            <option value=" " >Country</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option >Arizona</option>
                            <option >Arkansas</option>
                            <option >California</option>
                          </select>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group my-2"> 
                        <div class="form-control">
                          <div class="input-group">
                          <select name="state" class="selectpicker" >
                            <option value=" " >Product Interest</option>
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option >Arizona</option>
                            <option >Arkansas</option>
                            <option >California</option>
                          </select>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12 my-2">
                      <div class="form-control mb-5">
                        <textarea class="selectpicker" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 my-2">
                      <div class="form-control">
                        <p>
                            By registering, you confirm that you agree to the processing of your personal data by Salesforce as described in the Privacy Statement.
                        </p>
                      </div>
                    </div>
                  
                    <div class="col-md-12 my-2">
                      <div class="form-control">
                        <button class="btn btn-info w-100 m-0">
                            Submit
                        </button>
                        </div>
                    </div>
                  </form>
              </div>
            </div>
        </div>
    </div>
</section>

<!-- conatact  page -->