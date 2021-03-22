
<!-- solutions-sub -->

<!-- pricing section -->

<section>
    <div class="container-page py-5">
        <div class="row mx-auto">
            <div class="col-md-12 text-center py-5">
                <h1 class="">
                    <?php echo $solution_sub_one_update['title']?>
                </h1>
                <p class="">
                    <?php echo $solution_sub_one_update['description']?>
                </p>
                
            </div>
            <div class="col-md-12 my-4">
                <div class="row label-currency text-center justify-content-center">
                 <div class="col-md-6">
                     <ul class="d-flex list-unstyled">
                         <li>
                             <a href="">USD $</a>
                         </li>
                         <li>
                            <a href="">EUR €</a>
                        </li>
                        <li>
                            <a href="">GBP £</a>
                        </li>
                        <li>
                            <a href="">AUD $</a>
                        </li>
                        <li>
                            <a href="">CAD $</a>
                        </li>
                     </ul>
                 </div>
                 <div class="col-md-3">
                     <ul class="d-flex list-unstyled">
                         <li><a href="">MONTHLY</a></li>
                         <li><a href="">Yearly</a></li>

                     </ul>
                 </div>
                                    
            </div>
            </div>
            <?php foreach ($solution_sub_one as $h) {?>
            <div class="col-lg-3">

 
                <div class="card px-4 text-center">
                    <h5 class="py-4 text-danger">
                      <?= $h['tag']?>
                    </h5>
                    <p class="">
                    <?= $h['short_des']?>
                    </p>
                    <h5 class="pt-3">
                    <?= $h['amount']?>
                    </h5>
                    <p>
                    <?= $h['pckg_title']?>
                    </p>
                    <div class="prc-liner-bar">
                        <span></span>
                        <a href=""></a>
                    </div>
                    <div>
                       <a href=" <?= $h['button_url']?>">
                        <button class="btn btn-danger my-4">
                        <?= $h['button_text']?>
                        </button>
                        </a>
                    </div>
               </div>
            </div>
            <?php }?>
      
            </div>
    
          
        </div>
    </div>
</section>
<!-- pricing section -->


<!-- table -->
<section>
    <div class="container-page py-5">
        <div class="row mx-auto">
            <div class="col-md-12 text-center py-5">
               <h6>
                   Looking for a custom-tailored solution for your business?
                </h6>
                <a href="">
                    Get in touch!
                </a>
            </div>
            <div class="col-lg-12 ">
                <div class="row mx-auto ">

                    <div class="col-2"></div>
                    <div class="col-10 d-flex">
                        <div class="col-2 card text-center py-2 heading-tbl respons-sul">
                            <h6 class="text-danger">Essential</h6>
                            <h6>25$</h6>
                        </div>
                        <div class="col-4 card py-2 text-center mx-1 respons-sul">
                                <h6 class="text-danger">Essential</h6>
                                <div class="row">
                                    <div class="col-6 text-center respons-sul">
                                        <h6 class="text-danger">STANDARD</h6>
                                        <h6>25$</h6>  
                                    </div>
                                    <div class="col-6 respons-sul">
                                        <h6 class="text-danger">PRO</h6>
                                        <h6>25$</h6> 
                                    </div>
                                </div>
                        </div>
                        <div class="col-4 card py-2 text-center mr-1 respons-sul">
                            <h6 class="text-danger">Essential</h6>
                            <div class="row">
                                <div class="col-6 text-center respons-sul">
                                    <h6 class="text-danger">STANDARD</h6>
                                    <h6>25$</h6>  
                                </div>
                                <div class="col-6 respons-sul">
                                    <h6 class="text-danger">PRO</h6>
                                    <h6>25$</h6> 
                                </div>
                            </div>
                    </div>
                        <div class="col-2 card text-center py-2 heading-tbl respons-sul">
                            <h6 class="text-danger">Essential</h6>
                            <h6>25$</h6>
                        </div>
                    </div>

                </div>

            
            </div>
            <div class="col-lg-12">
                <table class="prc-table ">
                  <tbody>
                    <tr>
                        <th>WORK & COLLABORATION</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>
                    <tr>
                        <td>Personal & shared calendar</td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr>
                    <tr>
                        <td>Tasks </td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr>
                    <tr>
                        <td>Unassigned tasks</td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr> 
                    <tr>
                      <td>Task matrix</td>
                      <td>
                        $6 / user
                      </td>
                      <td>
                        $6 / user
                       </td>
                       <td>
                          <i class="icon ion-checkmark"></i>
                       </td>
                       <td>
                        $6 / user
                       </td>
                       <td>
                        $6 / user
                       </td>
                       <td>
                          <i class="icon ion-checkmark"></i>
                       </td>
                   
                    </tr> 
                    <tr>
                    <td>Project management</td>
                    <td>
                       <i class="icon ion-checkmark"></i>
                    </td>
                    <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                 
                    </tr> 
                    <tr>
                  <td>Contacts & customers</td>
                  <td>
                     <i class="icon ion-checkmark"></i>
                  </td>
                  <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
               
                    </tr> 
                    <tr>
                <td>Track non-billable time</td>
                <td>
                   <i class="icon ion-checkmark"></i>
                </td>
                <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
             
                    </tr> 
                    <tr>
              <td>Timesheet view</td>
              <td>
                $6 / user
              </td>
              <td>
                $6 / user
               </td>
               <td>
                  <i class="icon ion-checkmark"></i>
               </td>
               <td>
                $6 / user
               </td>
               <td>
                $6 / user
               </td>
               <td>
                  <i class="icon ion-checkmark"></i>
               </td>
           
                    </tr>            
                 </tbody>
                  
                </table>
                <table class="prc-table-two">
                  <tbody>
                    <tr>
                        <th>WORK & COLLABORATION</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>
                    <tr>
                        <td>Personal & shared calendar</td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr>
                    <tr>
                        <td>Tasks </td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr>
                    <tr>
                        <td>Unassigned tasks</td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr> 
                    <tr>
                      <td>Task matrix</td>
                      <td>
                        $6 / user
                      </td>
                      <td>
                        $6 / user
                       </td>
                       <td>
                          <i class="icon ion-checkmark"></i>
                       </td>
                       <td>
                        $6 / user
                       </td>
                       <td>
                        $6 / user
                       </td>
                       <td>
                          <i class="icon ion-checkmark"></i>
                       </td>
                   
                    </tr> 
                    <tr>
                    <td>Project management</td>
                    <td>
                       <i class="icon ion-checkmark"></i>
                    </td>
                    <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                 
                    </tr> 
                    <tr>
                  <td>Contacts & customers</td>
                  <td>
                     <i class="icon ion-checkmark"></i>
                  </td>
                  <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
               
                    </tr> 
                    <tr>
                <td>Track non-billable time</td>
                <td>
                   <i class="icon ion-checkmark"></i>
                </td>
                <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
             
                    </tr> 
                    <tr>
              <td>Timesheet view</td>
              <td>
                $6 / user
              </td>
              <td>
                $6 / user
               </td>
               <td>
                  <i class="icon ion-checkmark"></i>
               </td>
               <td>
                $6 / user
               </td>
               <td>
                $6 / user
               </td>
               <td>
                  <i class="icon ion-checkmark"></i>
               </td>
           
                    </tr>            
                 </tbody>
                  
                </table>
                <table class="prc-table-three">
                  <tbody>
                    <tr>
                        <th>WORK & COLLABORATION</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>
                    <tr>
                        <td>Personal & shared calendar</td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr>
                    <tr>
                        <td>Tasks </td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr>
                    <tr>
                        <td>Unassigned tasks</td>
                        <td>
                           <i class="icon ion-checkmark"></i>
                        </td>
                        <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                         <td>
                            <i class="icon ion-checkmark"></i>
                         </td>
                     
                    </tr> 
                    <tr>
                      <td>Task matrix</td>
                      <td>
                        $6 / user
                      </td>
                      <td>
                        $6 / user
                       </td>
                       <td>
                          <i class="icon ion-checkmark"></i>
                       </td>
                       <td>
                        $6 / user
                       </td>
                       <td>
                        $6 / user
                       </td>
                       <td>
                          <i class="icon ion-checkmark"></i>
                       </td>
                   
                    </tr> 
                    <tr>
                    <td>Project management</td>
                    <td>
                       <i class="icon ion-checkmark"></i>
                    </td>
                    <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                     <td>
                        <i class="icon ion-checkmark"></i>
                     </td>
                 
                    </tr> 
                    <tr>
                  <td>Contacts & customers</td>
                  <td>
                     <i class="icon ion-checkmark"></i>
                  </td>
                  <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                   <td>
                      <i class="icon ion-checkmark"></i>
                   </td>
                    </tr> 
                    <tr>
                <td>Track non-billable time</td>
                <td>
                   <i class="icon ion-checkmark"></i>
                </td>
                <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
                 <td>
                    <i class="icon ion-checkmark"></i>
                 </td>
             
                    </tr> 
                    <tr>
              <td>Timesheet view</td>
              <td>
                $6 / user
              </td>
              <td>
                $6 / user
               </td>
               <td>
                  <i class="icon ion-checkmark"></i>
               </td>
               <td>
                $6 / user
               </td>
               <td>
                $6 / user
               </td>
               <td>
                  <i class="icon ion-checkmark"></i>
               </td>
           
                    </tr>            
                 </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- table -->



<!-- middle heading -->

<section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-md-7 text-center mx-auto">
        <h1>
          Onboarding
        </h1>
        <p>
          Our Onboarding Experts have worked with hundreds of businesses worldwide. They will help you set up your Hybrid CMS site, optimise your team's workflow and get your company fully on board. Alternatively, you can choose a partner from our directory to assist with consultation on change management, implementation, training and integration.
        </p>

      </div>
    </div>
  </div>
</section>

<!-- middle heading -->

<!-- last table  -->
<section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-lg-12">
        <table class="last-tble ">
        <tbody>
           <tr>
             <th></th>
             <th>

               Self-onboarding $0
             </th>
             <th>
              Standard $899
             </th>
             <th>
              Pro $1,699
             </th>
             <th>
              Custom from $3,399
             </th>
           </tr>
           <tr>
             <td>Setting up the site and integrationsHybrid CMS tooltip icon</td>
             <td></td>
             <td>1h</td>
             <td>2h</td>
             <td></td>
           </tr>
           <tr>
            <td>
              Business process mappingHybrid CMS tooltip icon 
            </td>
            <td></td>
            <td>1h</td>
            <td>2h</td>
            <td></td>
          </tr>
          <tr>
            <td>Data import analysisHybrid CMS tooltip icon</td>
            <td></td>
            <td>1h</td>
            <td>2h</td>
            <td></td>
          </tr>
          <tr>
            <td>Configuration of PDF templatesHybrid CMS tooltip icon</td>
            <td></td>
            <td>1h</td>
            <td>2h</td>
            <td></td>
          </tr>
          <tr>
            <td>Admin and team trainings</td>
            <td></td>
            <td>1h</td>
            <td>2h</td>
            <td></td>
          </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- last table  -->


<!-- <section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-md-12 py-5 text-center">
        <h1>
          Frequently Asked Questions
        </h1>
      </div>
     <div class="col-lg-7 mx-auto">
      <a href="#" class="togglefaq"> Is Hybrid CMS for my company? <i class="icon ion-chevron-down"></i></a>  
      <div class="faqanswer">
        <p>
          Hybrid CMS is a cloud-based business management solution for professional and creative services. Hybrid CMS eliminates silos and simplifies professional services delivery through a single, unified platform. With complete visibility over your entire operation, including clients, projects, resources, financials, and business intelligence, you’re able to better execute, elevate client satisfaction, improve financial performance, and more easily forecast revenue and resource needs.
        </p>
      </div>

      <a href="#" class="togglefaq"> Can I try before I buy? <i class="icon ion-chevron-down"></i></a>
       <div class="faqanswer">
         <p>Yes. Get started now with a free, fully featured 14-day trial of Hybrid CMS, no credit card required. Or schedule some time to talk with one of our experts and they will show you exactly how Hybrid CMS can streamline the way your team works.
         </p>
       </div>

    <a href="#" class="togglefaq">How does your pricing work? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>Hybrid CMS is a tiered subscription service so the pricing depends on the number of people in your team as well as the plan that suits you the best.
      </p>
      </div>    
       <a href="#" class="togglefaq"> Which plan is right for me? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>Get an overview of the plans and offered features by checking out the plans’ comparison table above. Should you need any help figuring that out, our Consultants would be more than happy to help!
      </p>
      </div>
      <a href="#" class="togglefaq">How long will it take to get up and running? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>That depends on the size of your team and company, and your requirements. For most of our customers getting fully up and running with Hybrid CMS takes from a few days up to a few weeks – that includes importing your data (contacts, invoices, etc.), and getting to know the system.
      </p>
      </div>
      <a href="#" class="togglefaq"> How does your onboarding work? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>Our Onboarding team helps you with all aspects of getting started with Hybrid CMS and we are happy to tailor the onboarding package to your exact needs and business processes. An onboarding package may include help on setting up the site, business process mapping, help on importing data, help on setting up integrations, training for your team, etc. See more info about the onboarding packages here.
          <br>
          According to Hybrid CMS’s Onboarding team: “We’ve helped hundreds of companies in using Hybrid CMS and working more efficiently. When we’re doing team trainings for Hybrid CMS’s users, we can solve the questions and issues right away and show the new users all the tips and tricks on how to use the system.”
        </p>
      </div>
      <a href="#" class="togglefaq"> What is self-onboarding? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>The free self-onboarding package is available for teams of up to 9 people. You are free to use the self-onboarding materials such as videos and articles in our Help Center to set up your Hybrid CMS site. Self-onboarding is not suitable for teams of 10+ people – with bigger teams you will require our onboarding experts to help you set up your Hybrid CMS site, optimise your team’s workflow and get your entire company fully on board to get the most out of Hybrid CMS. Please note that the self-onboarding materials are only available in English.
      </p>
      <br>
      <p>Self-onboarding package is for you if:</p><br>
      <ul class="text-solution-m">
        <li>
          You are tech-savvy and feel confident about setting up the site by yourself using the self-onboarding materials in our Help Center.
        </li>
        <li>You have figured out the best workflow for your company and don’t need further in-person consultation on that.</li>
        <li>You have less than 10 people in your team. As soon as you have confirmed your payment plan, we will send over the first tips and tricks for self-onboarding.</li>
      </ul>
      </div>
      <a href="#" class="togglefaq"> Can I import my existing data? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>Yes, you can import your own contacts, products, images, invoices, receipts, and more.
      </p>
      </div>
      <a href="#" class="togglefaq"> How do you offer support? <i class="icon ion-chevron-down"></i></a> 
      <div class="faqanswer">
         <p>There’s a ton of useful support articles and videos available at our Help Center. We also have a dedicated Customer Support team in place that is happy to help you with any questions – feel free to email them, or if you’d prefer to have a chat with one of our Support Specialists, you can request a call-back by dialling  0207 237 3388.
      </p>
      </div>
      <a href="#" class="togglefaq"> How can I find a partner to assist us with our implementation? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>Contact any of our implementation partners to tailor a custom onboarding service for your company. Then contact your Hybrid CMS consultant to confirm your selection of partner and to finalise your subscription plan.
      </p>
      </div>
      <a href="#" class="togglefaq"> I have other questions! Who can help me? <i class="icon ion-chevron-down"></i></a>
      <div class="faqanswer">
         <p>If you have any questions about Hybrid CMS or the sign-up process please send us a note. We look forward to hearing from you!
      </p>
      </div>
     </div>
    </div>
  </div>
</section> -->



<!-- solutions-sub -->