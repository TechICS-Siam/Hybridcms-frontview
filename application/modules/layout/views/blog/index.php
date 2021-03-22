<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('layout/include/header_link.php'); ?>

    </head>

    <body>

        <?php $this->load->view('layout/include/header.php'); ?>
        <?php $this->load->view('layout/include/body_fst_sec.php'); ?>
  <section class="container-fluid leatest-product-section section-padding ">
    <!-- Jumbotron -->
    
    <div class="text-center">
      <div class="section-title">
      </div>

      <div class="w-100 w-lg-75 mx-auto px-3" id="something">
        
        <?php 
          $class1 = "order-first";
          $class2 ="order-2";
        

        foreach ($blogs as $key => $blogsArray):

          if ($key%2==0 && $key>0){
              $temp = $class1; 
              $class1 = $class2;
              $class2 =$temp;
          } 

          if($key%2 == 0){
            echo "<div class='row'>";
          } 


          if (count($blogsArray) == 1): 
            $blog_data['new_data'] = $blogsArray[0]; 
            $blog_data['new_count'] = 1;  
            $this->load->view('single_blog_grid', $blog_data);

            elseif (count($blogsArray) > 1): ?>
              <div class="col-sm-12 col-md-6 my-2 <?=$class1?>">
                 <div class="row">
                  <?php foreach ($blogsArray as $key2 => $singleBlog):

                      $blog_data['data'] = $blogsArray[0];
                      $blog_data['new_data'] = $singleBlog; 
                      $blog_data['new_count'] = count($blogsArray);
                    ?>
                    <?php $this->load->view('single_blog_grid', $blog_data); ?>
                  <?php endforeach ?>
                 </div>
              </div>
            <?php endif; 

          if($key%2 == 1){
            echo '</div>';
          }
          
        endforeach ?>
       
      </div>
      <div id="data_loader" style="display:none;">
        <div class="text-center mt-3">
          <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-light" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>

        <input type="hidden" id="load_more_button_id" value="1">
      
      <!-- Grid row -->
    </div>
    <!-- Jumbotron -->
  </section>

  

        <?php $this->load->view('layout/include/footer.php'); ?>

        <?php $this->load->view('layout/include/footer_link.php'); ?>

    </body>
    
    
</html>