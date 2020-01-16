var frmvalidator  = new Validator("contact-form");
frmvalidator.addValidation("Name","req","Please provide your name");
frmvalidator.addValidation("Email","req","Please provide your email");
frmvalidator.addValidation("Email","email","Please enter a valid email address");