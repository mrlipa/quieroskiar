<?php
/*
Title: Include a new resort
Post Type: resort
*/
/*piklist('field',array(
	'type' => 'text'
	,'field' => 'station_name'
	,'label' => 'Station name'
	,'required' => true
	,'columns' => 12
	,'attributes' => array(
		'placeholder' => 'Enter the station name'
		)
	)
);*/
/*
  Basic Information
*/
piklist('field', array(
    'type' => 'group'
    ,'label' => 'Tourism Office'
    ,'description' => 'Select y the contact type (Want2Ski or Tourist contact)'
    ,'fields' => array(
      array(
          'type' => 'text'
          ,'field' => 'address'
          ,'label' => 'Address'
          ,'required' => true
          ,'columns' => 12
          ,'attributes' => array(
              'placeholder' => 'Enter the addres here'
            )
      )
      ,array(
          'type' => 'text'
          ,'field' => 'npa'
          ,'label' => 'NPA'
          ,'required' => true
          ,'columns' => 2
      )
      ,array(
          'type' => 'text'
          ,'field' => 'location'
          ,'label' => 'Location'
          ,'required' => true
          ,'columns' => 5
      )
      ,array(
        'type' => 'select'
        ,'scope' => 'taxonomy'
        ,'field' => 'region'
        ,'label' => 'Region'
        ,'columns' => 5
        ,'choices' => piklist(
          get_terms('Regions', array(
            'hide_empty' => false
          ))
          ,array(
            'term_id'
            ,'name'
          )
        )
      )
      ,array(
          'type' => 'text'
          ,'field' => 'phone'
          ,'label' => 'Phone Number'
          ,'required' => true
          ,'columns' => 6
          ,'attributes' => array(
              'placeholder' => '+41 xx xxx xx xx'
          )
      )
      ,array(
          'type' => 'text'
          ,'field' => 'fax'
          ,'label' => 'Fax'
          ,'required' => true
          ,'columns' => 6
          ,'attributes' => array(
              'placeholder' => '+41 xx xxx xx xx'
            )
      )
        ,array(
        'type' => 'text'
        ,'field' => 'email'
        ,'label' => 'Email Address'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
            'placeholder' => 'mail@want2ski.ch'
          )
      ,'validate' => array(
          array(
            'type' => 'email'
          )
          ,array(
            'type' => 'email_domain'
          )
        ))
        ,array(
        'type' => 'text'
        ,'field' => 'website'
        ,'label' => 'Website'
        ,'required' => true
        ,'columns' => 6
        ,'attributes' => array(
            'placeholder' => 'Example: www.wan2ski.ch'
          )
        )
      )

  ));
/*piklist('field', array(
  'type' => 'group'
  ,'label' => 'Contact Information'
  ,'fields' => array(
      array(
      'type' => 'text'
      ,'field' => 'location'
      ,'label' => 'Location'
      ,'required' => true
      ,'columns' => 6
      )

      )
));*/

/*piklist('field', array(
    'type' => 'post-relate'
    ,'scope' => 'domaine'
    ,'template' => 'field'
  ));*/
/*
  Contact Information
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Contact Information'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'contact'
      ,'label' => 'Contact'
      ,'required' => false
      ,'columns' => 6
    )
    ,array(
      'type' => 'text'
      ,'field' => 'job_title'
      ,'label' => 'Job Title'
      ,'required' => false
      ,'columns' => 6
    )
    ,array(
        'type' => 'text'
        ,'field' => 'phone_contact'
        ,'label' => 'Phone'
        ,'required' => true
        ,'columns' => 4
        ,'attributes' => array(
            'placeholder' => '+41 xx xxx xx xx'
        )
    )
    ,array(
        'type' => 'text'
        ,'field' => 'mobile_contact'
        ,'label' => 'Mobile'
        ,'required' => true
        ,'columns' => 4
        ,'attributes' => array(
            'placeholder' => '+41 xx xxx xx xx'
        )
    )
    ,array(
        'type' => 'text'
        ,'field' => 'fax_contact'
        ,'label' => 'Fax'
        ,'required' => true
        ,'columns' => 4
        ,'attributes' => array(
            'placeholder' => '+41 xx xxx xx xx'
        )
    )
  )
));

/*
  Social Media Information
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Social Media Information'
  ,'add_more' => true
  ,'fields' => array(
    array(
      'type' => 'text'
      ,'field' => 'social_url'
      ,'label' => 'Social Media URL'
      ,'required' => false
      ,'columns' => 6
    )
    ,array(
      'type' => 'select'
      ,'field' => 'social_type'
      ,'value' => '1' // Sets default to Option 2
      ,'label' => 'Social Type'
      ,'columns' => 6
      ,'attributes' => array(
        'class' => 'text'
      )
      ,'choices' => array(
        '1' => 'Facebook'
        ,'2' => 'Twitter'
        ,'3' => 'Instagram'
      )
    )
  )
));
/*

*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Photo Gallery'
  ,'fields' => array(
     array(
      'type' => 'file'
      ,'field' => 'upload_photos'
      ,'scope' => 'post_meta'
      ,'label' => __('Add File(s)','piklist')
      ,'options' => array(
        'modal_title' => __('Add File(s)','piklist')
        ,'button' => __('Add Photos Here','piklist')
      )
    )
  )
));
/*

*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Opening/Close Hours'
  ,'fields' => array(
    array(
      'type' => 'select'
      ,'field' => 'open_hour'
      ,'label' => 'Opening Hours'
      ,'required' => false
      ,'columns' => 6
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
      ,'choices' => array(
        '1' => '06:00'
        ,'2' => '07:00'
        ,'3' => '08:00'
        ,'4' => '09:00'
        ,'5' => '10:00'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
    ,array(
      'type' => 'select'
      ,'field' => 'close_hour'
      ,'label' => 'Close Hours'
      ,'required' => false
      ,'columns' => 6
      ,'attributes' => array(
        'multiple' => 'multiple'
      )
      ,'choices' => array(
        '1' => '16:00'
        ,'2' => '17:00'
        ,'3' => '18:00'
        ,'4' => '19:00'
        ,'5' => '20:00'
        ,'6' => '21:00'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
  )
));

piklist('field', array(
  'type' => 'group'
  ,'label' => 'Seasonal dates'
  ,'columns' => 12
  ,'fields' => array(
    array(
      'type' => 'checkbox'
      ,'field' => 'seasonal'
      ,'label' => 'If yes then add opening and closing dates'
      ,'choices' => array(
        'show' => 'Yes'
      )
      ,'on_post_status' => array(
          'value' => 'lock'
        )
    )
    , array(
      'type' => 'datepicker'
      ,'field' => 'opening_date'
      ,'label' => 'Opening Date'
      ,'columns' => 6
      ,'options' => array(
        'dateFormat' => 'M d, yy'
      )
      ,'conditions' => array(
        array(
          'field' => 'seasonal'
          ,'value' => 'show'
        )
      )
      ,'attributes' => array(
        'size' => 12
      )
      ,'value' => date('M d, Y', time())
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
    , array(
      'type' => 'datepicker'
      ,'field' => 'closing_date'
      ,'label' => 'Closing Date'
      ,'columns' => 6
      ,'options' => array(
        'dateFormat' => 'M d, yy'
      )
      ,'conditions' => array(
        array(
          'field' => 'seasonal'
          ,'value' => 'show'
        )
      )
      ,'attributes' => array(
        'size' => 12
      )
      ,'value' => date('M d, Y', time())
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
  )
));
/*
  Parking
*/
piklist('field', array(
  'type' => 'radio'
  ,'field' => 'parking'
  ,'label' => 'Parking'
  ,'value' => 'y'
  ,'choices' => array(
    'y' => 'Yes'
    ,'n' => 'No'
  )
  ,'on_post_status' => array(
    'value' => 'lock'
  )
));
/*
  Altitude Range
*/
piklist('field', array(
    'type' => 'text'
    ,'label' => 'Altitude Range (Top - Bottom)'
    ,'description' => 'Village - Top of ski area'
    ,'required' => false
    ,'columns' => 12
    ,'attributes' => array(
      'placeholder' => 'Insert the altitude range (xxxx m. - xxxx m.)'
    )
  )
);
/*
  Hotel Acomodation
*/
piklist('field', array(
  'type' => 'group'
  ,'label' => 'Hotel / Accomodation'
  ,'fields' => array(
    array(
      'type' => 'radio'
      ,'field' => '5stars'
      ,'label' => '5 Stars'
      ,'columns' => 3
      ,'value' => 'y'
      ,'choices' => array(
        'y' => 'Yes'
        ,'n' => 'No'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
     )
     ,array(
       'type' => 'radio'
       ,'field' => '4star'
       ,'label' => '4 Stars'
       ,'columns' => 3
       ,'value' => 'y'
       ,'choices' => array(
         'y' => 'Yes'
         ,'n' => 'No'
       )
       ,'on_post_status' => array(
         'value' => 'lock'
       )
     )
     ,array(
       'type' => 'radio'
       ,'field' => '3stars'
       ,'label' => '3 Stars'
       ,'columns' => 3
       ,'value' => 'y'
       ,'choices' => array(
         'y' => 'Yes'
         ,'n' => 'No'
       )
       ,'on_post_status' => array(
         'value' => 'lock'
       )
     )
    ,array(
      'type' => 'radio'
      ,'field' => 'hostel'
      ,'label' => 'Hostel'
      ,'columns' => 3
      ,'value' => 'y'
      ,'choices' => array(
        'y' => 'Yes'
        ,'n' => 'No'
      )
      ,'on_post_status' => array(
        'value' => 'lock'
      )
    )
  )
));
/*
	##
	piklist('field', array(
		'type' => 'group'
		,'label' => 'General Information'
		,'fields' => array(
		array(
			'type' => 'text'
			,'field' => 'altitude_range'
			,'label' => 'Altitude Range (Top - Bottom)'
			,'description' => 'Village - Top of ski area'
			,'required' => false
			,'columns' => 12
			,'attributes' => array(
			  'placeholder' => 'Insert the altitude range (xxxx m. - xxxx m.)'
			)
		)
		, array(
			'type' => 'datepicker'
			,'field' => 'ski_season'
			,'label' => 'Ski Season opening date'
			,'description' => '(Stimate)'
			,'options' => array(
				'dateFormat' => 'M d, yy'
			)
			,'attributes' => array(
				'size' => 12
			)
			,'value' => date('M d, Y', time())
			,'on_post_status' => array(
				'value' => 'lock'
			)
		)
		, array(
			'type' => 'group'
			,'field' => 'want2ski_contact_group'
			,'label' => 'Price range for one day ski pass'
			,'list' => false
			,'description' => '(Full day - Cheapest)'
			,'fields' => array(
			  array(
				'type' => 'text'
				,'field' => 'adult_price'
				,'label' => 'For Adult'
				,'columns' => 6
				)
			  ,array(
				'type' => 'text'
				,'field' => 'children_price'
				,'label' => 'For Children'
				,'columns' => 6
				)
			)
		)
		, array(
			'type' => 'radio'
			,'field' => 'family_discount'
			,'label' => 'Family discounts'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		))
	));
	###
	piklist('field', array(
		'type' => 'group'
		,'label' => 'Hotel / Accomodation'
		,'fields' => array(
			array(
				'type' => 'radio'
				,'field' => 'place'
				,'label' => '5* / Place'
				,'value' => 'y'
				,'choices' => array(
				  'y' => 'Yes'
				  ,'n' => 'No'
				)
				,'on_post_status' => array(
				  'value' => 'lock'
				)
			 )
			,array(
				'type' => 'radio'
				,'field' => 'yhostel'
				,'label' => 'Youth hostel/ 2*'
				,'value' => 'y'
				,'choices' => array(
				  'y' => 'Yes'
				  ,'n' => 'No'
				)
				,'on_post_status' => array(
				  'value' => 'lock'
				)
			)
		)
	));
	####
	piklist('field', array(
		'type' => 'group'
		,'label' => 'Entertainment'
		,'fields' => array(
			array(
			'type' => 'radio'
			,'field' => 'discoteque'
			,'label' => 'Discoteque / Club'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		  ,array(
			'type' => 'radio'
			,'field' => 'bars'
			,'label' => 'Bars'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		  ,array(
			'type' => 'radio'
			,'field' => 'apres_ski'
			,'label' => 'Apres-Ski'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))

		  ,array(
			'type' => 'radio'
			,'field' => 'festival'
			,'label' => 'Festival'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))

		  ,array(
			'type' => 'radio'
			,'field' => 'cinema'
			,'label' => 'Cinema'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			))
		)
	));

	piklist('field', array(
		'type' => 'group'
		,'label' => 'Services'
		,'fields' => array(
		array(
			'type' => 'radio'
			,'field' => 'babysitter'
			,'label' => 'Babysitter'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		 )
		, array(
			'type' => 'radio'
			,'field' => 'spa'
			,'label' => 'Spa'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		)
		,array(
			'type' => 'radio'
			,'field' => 'pool'
			,'label' => 'Swimming pool'
			,'value' => 'y'
			,'choices' => array(
			  'y' => 'Yes'
			  ,'n' => 'No'
			)
			,'on_post_status' => array(
			  'value' => 'lock'
			)
		)
		)
	));*/
?>
