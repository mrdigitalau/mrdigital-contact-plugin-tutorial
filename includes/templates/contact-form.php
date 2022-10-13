<?php if( get_plugin_options('contact_plugin_active') ):?>


<div id="form_success" style="background-color:green; color:#fff;"></div>
<div id="form_error" style="background-color:red; color:#fff;"></div>

<form id="enquiry_form">


      <?php wp_nonce_field('wp_rest');?>

      <label>Name</label><br />
      <input type="text" name="name"><br /><br />

      <label>Phone</label><br />
      <input type="text" name="phone"><br /><br />

      <label>Email</label><br />
      <input type="text" name="email"><br /><br />

      <label>Message</label><br />
      <textarea name="message"></textarea><br /><br />

      <button type="submit">Submit form</button>

</form>

<script>

      jQuery(document).ready(function($){


            $("#enquiry_form").submit( function(event){

                  event.preventDefault();

                  $("#form_error").hide();

                  var form = $(this);

                  $.ajax({


                        type:"POST",
                        url: "<?php echo get_rest_url(null, 'v1/contact-form/submit');?>",
                        data: form.serialize(),
                        success:function(res){

                              form.hide();

                              $("#form_success").html(res).fadeIn();


                        },
                        error: function(){

                              $("#form_error").html("There was an error submitting").fadeIn();
                        }


                  })


            });


      });

</script>

<?php else:?>

<p>This form is not active</p>

<?php endif;?>