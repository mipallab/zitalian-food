<?php
/**
 * 
 * Header section
 * 
 */
// theme options
$themeOption = [
    'title' => 'Itilian Food',
    'topBar'   => [
        'contactInfo'   => [ 'email' => 'pallab4842@gmail.com', 'phone'  => '+8801713564842'],
        'socialInfo'    => [
            [ 
                'link' => 'https://www.facebook.com/',
                'icon'  => '<i class="fa fa-facebook"></i>'
            
            ],
            [ 
                'link' => 'https://x.com/',
                'icon'  => '<i class="fa fa-twitter"></i>'
                
            ],
            [ 
                'link'  => 'https://github.com/',
                'icon'  => '<i class="fa fa-github"></i>'
             
            ], 
            [
                'link'  => 'https://www.linkedin.com/',
                'icon'  => '<i class="fa fa-linkedin"></i>'
                
            ],
        ],
    ],

    'logo'  => 'https://png.pngtree.com/png-clipart/20230401/original/pngtree-fast-food-logo-png-image_9018328.png',

    'qutation'  => '"😋😋😋 চাচা ভাতিজা বিরিয়ানি হাউস 😋😋😋" Khan Moja Pan'

    
];


// menu
$menus = [
    [
        'title' => 'Home',
        'link'  => 'index.php'
    ],
    [
        'title' => 'Food Menu',
        'link'  => 'menu.php'
    ],
    [
        'title' => 'Location',
        'link'  => 'location.php'
    ],
    [
        'title' => 'Blog',
        'link'  => 'archive.php'
    ],
    [
        'title' => 'Reservation',
        'link'  => 'reservation.php'
    ],
    [
        'title' => 'Our Staff',
        'link'  => 'staff.php'
    ],
    [
        'title' => 'News',
        'link'  => 'news.php'
    ],
    [
        'title' => 'Gallery',
        'link'  => 'gallery.php'
    ]
];



/**
 * 
 * 
 * Footer Section
 * 
 */

// widget

$widget = [
    'title' => 'Customer Testmonials',
    'testimonial' => [
        [
        'name' => 'Nick Roach',
        'image' => 'images/a-1.jpg',
        'desc'  => 'Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac, placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean lectus nisl, ellentesque in fermentum sit amet.'
        ]
    ],

    'location' => [
        'title' => 'Thikana',
        'mapLink'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58239.48560875607!2d90.66889616953122!3d24.172860253820538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37542a51234ce3f1%3A0xc418c4a0169c245f!2sMonohardi%20Upazila!5e0!3m2!1sen!2sbd!4v1723881170004!5m2!1sen!2sbd'
    ],
    'openDaily' => [
        'title' => 'Kholar din',
        'timeSedule'  => [
                [ "<span>mon.</span> 17:00 - 21:00" ], 
                [ "<span>tue.-wed.</span> 16:30 – 21:00" ],
                [ "<span>thu.-sat.</span> 16:30 – 21:00" ], 
                [ "<span>sun.</span> 11:00 – 21:00" ], 
                [ "<span>Need help getting home?</span></br> We will call a cab for you!" ]
            ]
        ]
];
    



$copyright = [
    'title' => 'Copyright 2024 - Designed by <a href="#">Khaw Moja Paw</a>',
    'pages' => [
        [
            'link'  => '#',
            'p_title'  => 'Privacy Policy'
        ],
        [
            'link'  => '#',
            'p_title'  => 'Terms of Use'
        ],
        [
            'link'  => '#',
            'p_title'  => 'About Us'
        ]
    ]
];