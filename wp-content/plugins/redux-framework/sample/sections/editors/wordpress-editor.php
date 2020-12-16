<?php
/**
 * Redux Framework WordPress editor config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Текста раздела О нас', 'your-textdomain-here' ),
		'id'         => 'about-text',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="//docs.redux.io/core/fields/editor/" target="_blank">docs.redux.io/core/fields/editor/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-editor',
				'type'     => 'editor',
				'title'    => esc_html__( 'Попытайтесь красиво отформатировать свой текст', 'your-textdomain-here' ),
				'default'  => 'Ваш текст',
			),
		),
	)
);
