<section class="pt-page pt-page-6" data-id="contact">
                        <div class="section-title-block">
                            <h2 class="section-title">Contact</h2>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 subpage-block">
                                <div class="block-title">
                                    <h3>Contact Form</h3>
                                </div>
                                <form id="contact-form" method="post" action="">

                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                            <div class="form-control-border"></div>
                                            <i class="form-control-icon fa fa-user"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                            <div class="form-control-border"></div>
                                            <i class="form-control-icon fa fa-envelope"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                            <div class="form-control-border"></div>
                                            <i class="form-control-icon fa fa-comment"></i>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <input type="button" ng-click="submitContact()" class="button btn-send" value="Send message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>