<section id="contact" class="ups-section">
        <div class="ups-content">
            <div class="uk-grid">
                <div class="uk-text-center uk-width-medium-1-1 uk-width-large-1-2">
                    <div class="title-container">
                        <h1 class="ups-title ups-title-mobile"><?php echo $site->contact_title()->title() ?></h1>
                        <h2 class="ups-sub-title ups-space-up-20"><?php echo $site->contact_text() ?></h2>
                    </div>
                </div>
                <div class="uk-width-medium-1-1 uk-width-large-1-2 uk-text-center">
                    <div class="title-container">
                        <div>
                            <?php if($site->phone_display()->isNotEmpty()): ?> 
                            <a class="ups-cont-details" href="tel:<?php echo $site->phone() ?>"><i class="uk-icon-phone"></i>
                                    <?php echo $site->phone_display() ?></a>
                            <?php endif ?>
                        </div>
                        <div class="ups-space-up-20">
                            <?php if($site->display_email()->isNotEmpty()):?>
                            <a class="ups-cont-details" href="mailto:<?php echo $site->display_email()?>"><i class="uk-icon-envelope"></i>
                                    <?php echo $site->display_email() ?></a>
                            <?php endif ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <form id="contactFrm" class="ups-form uk-text-center" action="">
                <div class="uk-grid">
                    <div class="uk-width-medium-1-1 uk-width-large-1-2">
                        <div class="ups-space-up-50">
                            <span class="ups-no-margin input input--kohana">
                                                    <input class="input__field input__field--kohana" name="name" type="text" id="text-name" />
                                                    <label class="input__label input__label--kohana" for="input-29">
                                                        <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                        <span class="input__label-content input__label-content--kohana">Name</span>
                            </label>
                            </span>
                        </div>
                        <div class="ups-space-up-40">
                            <span class="ups-no-margin input input--kohana">
                                                    <input class="input__field input__field--kohana" name="email" type="email" id="text-email" />
                                                    <label class="input__label input__label--kohana" for="email">
                                                        <i class="fa fa-fw uk-icon-envelope icon icon--kohana"></i>
                                                        <span class="input__label-content input__label-content--kohana">Email</span>
                            </label>
                            </span>
                        </div>
                        <div class="ups-space-up-40">
                            <span class="ups-no-margin input input--kohana">
                                                    <input class="input__field input__field--kohana" name="phone" type="text" id="text-phone" />
                                                    <label class="input__label input__label--kohana" for="email">
                                                        <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                                        <span class="input__label-content input__label-content--kohana">Phone</span>
                            </label>
                            </span>
                        </div>
                    </div>
                    <div class="uk-text-center uk-width-medium-1-1 uk-width-large-1-2">
                        <div class="ups-space-up-50">
                            <span class="ups-no-margin input input--kohana">
                            <textarea class="input__field input__field--kohana" name="message" id="text-message" cols="30" rows="10"></textarea>
                                        <label class="input__label input__label--kohana" for="message">
                                            <i class="fa fa-fw uk-icon-comment icon icon--kohana"></i>
                                            <span class="input__label-content input__label-content--kohana">Message</span>
                            </label>
                            </span>
                        </div>

                        <div class="ups-space-up-20">
                            <button type="submit" class="ups-button">
                                        Submit
                                    </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>


    <script>
    // AJAX FORM PROCESSING
    $('#contactFrm').on('submit',function(e){
		        e.preventDefault();
		        var form = $(this);
                var successMsg = $(this).data('success-msg');
		        $.ajax({
		            type: 'POST',
		            url: "api/form",
		            data: form.serialize(),
		            success: function(result){
		                // form data successfully reached form processor api
		                if(result.success){
		                    // message successfully sent
                       $('#text-name').val("");
                       $('#text-phone').val("");
                       $('#text-email').val("");
                       $('#text-message').val("");
                    UIkit.notify(successMsg, {status:'success', pos:'top-center'})
		                } else {
                        // an issue was encountered
		                    if(result.errors == undefined || result.errors == null || result.errors.length == 0){
		                        // no validation errors - an email sending error was encountered
                                UIkit.notify("Ooopss! Please fill in the fields correctly", {status:'danger', pos:'top-center'})
		                    } else {
		                        // a validation error was encountered
		                        var msg = "Please note: <br>";
		                        if(result.errors.indexOf('name') != -1){
		                            UIkit.notify(msg +="Field 'Your Name' must not be empty.", {status: 'danger', pos:'top-center'})
		                         }
		                        if(result.errors.indexOf('email') != -1){
		                            UIkit.notify(msg +="Field 'Your Email' must contain a valid email.", {status: 'danger', pos:'top-center'})
		                        }
		                        if(result.errors.indexOf('website') != -1){
		                            UIkit.notify(msg +="You seem to be a robot", {status: 'danger', pos:'top-center'})
		                        }
		                    }
		                }
		            },
		            error: function(result,statTxt){
		                //the form was unable to reach processor api
		                msg = 'Error '+ result.status + ' - unable to process form: ' + result.statusText + " (" + statTxt + ")";
		                alert(msg);
		            },
		            dataType: 'json'
		        });
		    }); 
    </script>