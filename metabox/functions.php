<?php 


	function register_about_meta_box(array $serviceitem){
		$serviceitem[] = array(
			'id'    => 'about-section',
			'title' => 'All Your about Section Information',
			'object_types' => array('about'),
			'fields'   => array(
				array(
					'name'  => 'About Heaing',
					'type'  => 'text',
					'id'    => 'about_heading'
				),
				array(
					'name'  => 'About Subheading',
					'type'  => 'text',
					'id'    => 'about_subheading'
				),
				array(
					'name'  => 'Add your image',
					'type'  => 'file',
					'id'    => 'about_img'
				),
				array(
					'name'  => 'Your Name',
					'type'  => 'text',
					'id'    => 'name'
				),
				array(
					'name'  => 'Your Birthday date',
					'type'  => 'text',
					'id'    => 'birthday'
				),
				array(
					'name'  => 'Your Email',
					'type'  => 'text_email',
					'id'    => 'email'
				),
				array(
					'name'  => 'Your Age',
					'type'  => 'text',
					'id'    => 'age'
				),
				array(
					'name'  => 'Your Phone number',
					'type'  => 'text',
					'id'    => 'phone'
				),
				array(
					'name'  => 'Your Interest',
					'type'  => 'text',
					'id'    => 'interest'
				),
				array(
					'name'  => 'Your Degreee',
					'type'  => 'text',
					'id'    => 'degree'
				),

			),
		);
		return $serviceitem;
	}
	add_filter('cmb2_meta_boxes','register_about_meta_box');


	function custom_meta_box(array $metaboxitem){
		$metaboxitem[] = array(
			'id'    => 'meta-section',
			'title' => 'What is this post all about?',
			'object_types' => array('slider'),
			'fields'   => array(
				array(
					'name'  => 'Portfolio Title',
					'type'  => 'text',
					'id'    => 'banner_title'
				),
				array(
					'name'  => 'Portfolio Designation',
					'type'  => 'text',
					'id'    => 'banner_desig'
				),
				array(
					'name'  => 'Portfolio Button link text',
					'type'  => 'text',
					'id'    => 'banner_button'
				),

			),
		);
		return $metaboxitem;
	}
	add_filter('cmb2_meta_boxes','custom_meta_box');

	function register_service_meta_box(array $serviceitem){
		$serviceitem[] = array(
			'id'    => 'service-section',
			'title' => 'What is this post all about?',
			'object_types' => array('service'),
			'fields'   => array(
				array(
					'name'  => 'Service Heaing',
					'type'  => 'text',
					'id'    => 'service_heading'
				),
				array(
					'name'  => 'Service Subheading',
					'type'  => 'text',
					'id'    => 'service_subheading'
				),
				array(
					'name'  => 'Service icon',
					'type'  => 'text',
					'id'    => 'service_icon'
				),

			),
		);
		return $serviceitem;
	}
	add_filter('cmb2_meta_boxes','register_service_meta_box');

	function register_process_meta_box(array $processitem){
		$processitem[] = array(
			'id'    => 'process-section',
			'title' => 'What is this post all about?',
			'object_types' => array('process'),
			'fields'   => array(
				array(
					'name'  => 'Process Heaing',
					'type'  => 'text',
					'id'    => 'process_heading'
				),
				array(
					'name'  => 'Process Subheading',
					'type'  => 'text',
					'id'    => 'process_subheading'
				),
				array(
					'name'  => 'Process icon',
					'type'  => 'text',
					'id'    => 'process_icon'
				),

			),
		);
		return $processitem;
	}
	add_filter('cmb2_meta_boxes','register_process_meta_box');
