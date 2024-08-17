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
        'image' => 'https://img.freepik.com/free-psd/3d-illustration-human-avatar-profile_23-2150671142.jpg?size=338&ext=jpg&ga=GA1.1.2008272138.1723766400&semt=ais_hybrid',
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
    


// copyright 
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







/**
 * 
 * Home Page Option
 * 
 */

 // home slider
 $slides = [
    [
        'img'   => 'https://cdn.create.vista.com/api/media/small/11007137/stock-photo-oriental-food',
        'title' => "Hazir Beriyani",
        'desc'  => 'Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo,quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl. '
    ],
    [
        'img'   => 'https://www.eatingwell.com/thmb/m5xUzIOmhWSoXZnY-oZcO9SdArQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/article_291139_the-top-10-healthiest-foods-for-kids_-02-4b745e57928c4786a61b47d8ba920058.jpg',
        'title' => "Babur Bari Teheri",
        'desc'  => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.'
    ],
    [
        'img'   => 'https://images.immediate.co.uk/production/volatile/sites/30/2023/06/Ultraprocessed-food-58d54c3.jpg?quality=90&resize=440,400',
        'title' => "Matir Bashon",
        'desc'  => 'At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.'
    ]
 ];

 // quations
 $quations = [
    'title' => '“Your awesome company slogan goes here, we have the best food around”',
    'desc'  => 'Unc elementum lacus in gravida pellentesque urna dolor eleifend felis eleifend'   
 ];

 //welcome menu
 $welcomeMenu = [
    'title' => 'Susagotom',
    'sub_title' => 'Unc elementum lacus in gravida pellentesque urna',
    'menu_items' => [
        [
            'ribbon'    => "Menu Card",
            'img'       => 'images/menu.jpg',
            'desc'      => 'The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!',
            'btn'      => [
                'title' => 'Details',
                'link'  => '#'
            ]
        ],
        [
            'ribbon'    => "Reservation<",
            'img'       => 'images/reservation.jpg',
            'desc'      => 'The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!',
            'btn'      => [
                'title' => 'Details',
                'link'  => '#'
            ]
        ],
        [
            'ribbon'    => "Chef",
            'img'       => 'images/chef.jpg',
            'desc'      => 'The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!',
            'btn'      => [
                'title' => 'Details',
                'link'  => '#'
            ]
        ],
        [
            'ribbon'    => "Preview",
            'img'       => 'images/preview.jpg',
            'desc'      => 'The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!',
            'btn'      => [
                'title' => 'Details',
                'link'  => '#'
            ]
        ],
        [
            'ribbon'    => "Text Heading",
            'img'       => 'images/reservation.jpg',
            'desc'      => 'The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!',
            'btn'      => [
                'title' => 'Details',
                'link'  => '#'
            ]
        ],
        [
            'ribbon'    => "Text Heading",
            'img'       => 'images/reservation.jpg',
            'desc'      => 'The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!',
            'btn'      => [
                'title' => 'Details',
                'link'  => '#'
            ]
        ]
    ]
];


/**
 * 
 * Location Page
 * 
 */

 // address
 $address = [
    'title' => 'Address',
    'desc'  => '1650 Monohardi, Narshingdi, Dhaka, Bangladesh(BD)'
 ];

 $workScedule = [
    'title' => 'Hours Of Operation',
    'scedule'   => [
        [
            'day'   => 'MONDAY-FRIDAY',
            'time'  => '8am-6pm'
        ],
        [
            'day'   => 'SATURDAY-SUNDAY',
            'time'  => '8am-10pm'
        ]
    ]
 ];


 $contactInfo = [
    'title' => 'Contact Info',
    'name'  => [
      [
        'title' => "EMAIL ADDRESS",
        'value' => 'pallab4842@gmail.com'
      ],
      [
        'title' => "TELEPHONE",
        'value' => '+8801713564842'
      ],
      [
        'title' => "FAX",
        'value' => '+8801713564842'
      ],
      [
        'title' => "WHATS APP",
        'value' => '+8801713564842'
      ]
    ]
];




/**
 * 
 * Staff Section
 */

 $staffs = [
    [
        'img'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkz9DAeOIb37VEhLbtNHIgFhBQhFVL3YBQ89MJkoXTThkVzFaUQe5RUu4XtQF-bQUY1b8&usqp=CAU',
        'name'  => 'Chef\'s Name',
        'socialInfo'    => [
            [
                'link' => 'https://x.com/',
                'icon'  => '<i class="fa fa-twitter"></i>'
            ],
            [
                'link' => 'https://www.facebook.com/',
                'icon'  => '<i class="fa fa-facebook"></i>'
            ],
            [
                'link' => 'https://www.linkedin.com/',
                'icon'  => '<i class="fa fa-linkedin"></i>'
            ],
            [
                'link' => 'https://www.instagram.com/',
                'icon'  => '<i class="fa fa-instagram"></i>'
            ]
        ]
        ],
        [
            'img'   => 'images/chef-1.jpg',
            'name'  => 'Chef\'s Name',
            'socialInfo'    => [
                [
                    'link' => 'https://x.com/',
                    'icon'  => '<i class="fa fa-twitter"></i>'
                ],
                [
                    'link' => 'https://www.facebook.com/',
                    'icon'  => '<i class="fa fa-facebook"></i>'
                ],
                [
                    'link' => 'https://www.linkedin.com/',
                    'icon'  => '<i class="fa fa-linkedin"></i>'
                ],
                [
                    'link' => 'https://www.instagram.com/',
                    'icon'  => '<i class="fa fa-instagram"></i>'
                ]
            ]
        ],
        [
            'img'   => 'https://cdn.vectorstock.com/i/preview-1x/77/17/chef-avatar-icon-vector-32077717.jpg',
            'name'  => 'Chef\'s Name',
            'socialInfo'    => [
                [
                    'link' => 'https://x.com/',
                    'icon'  => '<i class="fa fa-twitter"></i>'
                ],
                [
                    'link' => 'https://www.facebook.com/',
                    'icon'  => '<i class="fa fa-facebook"></i>'
                ],
                [
                    'link' => 'https://www.linkedin.com/',
                    'icon'  => '<i class="fa fa-linkedin"></i>'
                ],
                [
                    'link' => 'https://www.instagram.com/',
                    'icon'  => '<i class="fa fa-instagram"></i>'
                ]
            ]
        ]
        ,
        [
            'img'   => 'https://cdn2.iconfinder.com/data/icons/professions/512/cook_woman_user-512.png',
            'name'  => 'Chef\'s Name',
            'socialInfo'    => [
                [
                    'link' => 'https://x.com/',
                    'icon'  => '<i class="fa fa-twitter"></i>'
                ],
                [
                    'link' => 'https://www.facebook.com/',
                    'icon'  => '<i class="fa fa-facebook"></i>'
                ],
                [
                    'link' => 'https://www.linkedin.com/',
                    'icon'  => '<i class="fa fa-linkedin"></i>'
                ],
                [
                    'link' => 'https://www.instagram.com/',
                    'icon'  => '<i class="fa fa-instagram"></i>'
                ]
            ]
        ]
];


/**
 * Gallery Page
 */
$gallerys = [
    [
        'link'  => '#',
        'title' => 'img 1',
        'img'   => 'images/4.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 2',
        'img'   => 'images/5.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 3',
        'img'   => 'images/6.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 4',
        'img'   => 'images/7.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 5',
        'img'   => 'images/8.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 6',
        'img'   => 'images/9.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 7',
        'img'   => 'images/10.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 8',
        'img'   => 'images/11.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 9',
        'img'   => 'images/12.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 10',
        'img'   => 'images/13.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 11',
        'img'   => 'images/14.jpg'
    ],
    [
        'link'  => '#',
        'title' => 'img 12',
        'img'   => 'images/15.jpg'
    ]
];