<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'MFernandes Cloud Computing Application',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'contact' => 'Contact',
	    'phpinfo' => 'PHP Information'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => false,
        'version' => 'Mark1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
