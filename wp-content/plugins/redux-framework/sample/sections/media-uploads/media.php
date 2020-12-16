<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Логотип', 'your-textdomain-here' ),
		'id'         => 'media-media',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'logo-main',
				'type'         => 'media',
				'url'          => true,
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
	)
);
