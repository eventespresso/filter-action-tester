<?php
/*
  Plugin Name:		Filter/Action tester
  Plugin URI:  		http://eventespresso.com
  Description: 		Just a utility plugin for testing various filters/actions
  Version: 		      1.0.0
  Author: 		      Darren Ethier
  Author URI: 		http://eventespresso.com
  License: 		      MIT
  TextDomain: 		doodly
  Copyright 		(c) 2008-2014 Event Espresso  All Rights Reserved.
  */


 /**
  * Filter for testing https://events.codebasehq.com/projects/event-espresso/tickets/7056
  * This filter tests different date and time formats used for the ticket editor in the event editor.
  * To use:
  * 1. Activate this plugin
  * 2. Modify the date and time formats in the callback to be various things for testing
  * 3. Visit the event editor and see that dates are dispayed in the set format, also verify the datepicker uses that format.
  * 4. Verify that functionality with this format for creating, editing, and saving dates and times in this format works as expected.
  */
function ee_new_dtt_formats( $formats ) {
	return array(
		'date' => 'd/m/Y',
		'time' => 'H:i'
		);
}
add_filter( 'FHEE__espresso_events_Pricing_Hooks___set_hooks_properties__date_format_strings', 'ee_new_dtt_formats' );


/**
 * Filter for testing https://events.codebasehq.com/projects/event-espresso/tickets/7595
 * This is used to add a bogus message type to the default message types array when a messenger is
 * activated.  It helps verify that activating the messages system does not result in errors on activation.
 * To use:
 * 1. Start with an install of WordPress where EE has never been active (or the db is wiped of all traces of EE).
 * 2. Activate this plugin.
 * 3. Activate Event Espresso.
 * 4. Deactivate and reactivate Event Espresso.
 * 5. There should be no errors.
 */
add_filter( 'FHEE__EE_messenger__get_default_message_types__default_types', function( $default_types, $messenger ) {
      $default_types[] = 'bogus_message_type';
      return $default_types;
    }, 10, 2);
