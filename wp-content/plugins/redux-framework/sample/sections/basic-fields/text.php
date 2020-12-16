<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Ссылки на социальные сети: Шапка сайта', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Вставьте полную ссылки в соответствии с социальной сетью: ', 'your-textdomain-here' ),
		'id'               => 'basic-social',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'url-telegram',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на Telegram', 'your-textdomain-here' ),
				'default'  => 'http://t.me/glavkaper',
			),
			array(
				'id'       => 'url-instagram',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на Instagram', 'your-textdomain-here' ),
				'default'  => 'http://Instagram.com/glavkaper',
			),
			array(
				'id'       => 'url-youtube',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на YouTube', 'your-textdomain-here' ),
				'default'  => 'https://www.youtube.com/c/TimurTimurovich',
			),
		),
	)
);
