(function($) {
            // Give Faculty and Staff help text for choosing the correct email address
            // modified from city tech openlab
            function set_email_helper( accountType ) {
                var helper = '';
    
                if ( 'staff' === accountType ) {
                    helper = 'Example: firstname.lastname@oneonta.edu';
                } else if ( 'faculty' === accountType ) {
                    helper = 'Example: firstname.lastname@oneonta.edu.';
                }
    
                $('.email-requirements').fadeOut( function() {
                    $(this).html( helper ).fadeIn();
                } );
            }
		}
	);