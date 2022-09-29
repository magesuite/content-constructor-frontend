<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductFinder extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component29821nj3dec',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => '',
                        'columns' => 'none',
                        'content' => '<p>Desktop/tablet: ON<br>Mobile: OFF</p>',
                        'scenarios' =>
                            [
                                'reading' =>
                                    [
                                        'name' => 'Container width',
                                        'iconId' => 'tw_content-width-text',
                                        'id' => 'full',
                                    ],
                            ],
                        'migrated' => true,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            1 => [
                'id' => 'component2bd94',
                'section' => 'content',
                'type' => 'product-finder',
                'data' => [
                    'optionsPerRow' => [
                        'mobile' => '3',
                        'tablet' => '3',
                        'desktop' => '6',
                    ],
                    'steps' => [
                        0 => [
                            'id' => 'activity',
                            'additional_css_class' => '',
                            'title' => 'What do you want to do?',
                            'description' => 'Hiking, gym, climbing, yoga? With us you can find clothes for every activity',
                            'options' => [
                                0 => [
                                    'label' => 'Running',
                                    'image' => $this->getDecodedImage('product_finder/running.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Running',
                                                1 => 'Outdoor',
                                                2 => 'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                1 => [
                                    'label' => 'Yoga',
                                    'image' => $this->getDecodedImage('product_finder/yoga.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Yoga',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                2 => [
                                    'label' => 'Gym',
                                    'image' => $this->getDecodedImage('product_finder/gym.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Crosstraining',
                                                1 => 'Post-workout',
                                                2 => 'Gym',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                3 => [
                                    'label' => 'Fitness',
                                    'image' => $this->getDecodedImage('product_finder/fitness.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                4 => [
                                    'label' => 'Hiking',
                                    'image' => $this->getDecodedImage('product_finder/hiking.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Hike',
                                                1 => 'Hiking',
                                                2 => 'Outdoor',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                5 => [
                                    'label' => 'Cycling',
                                    'image' => $this->getDecodedImage('product_finder/cycling.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Cycling',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                6 => [
                                    'label' => 'Athletic',
                                    'image' => $this->getDecodedImage('product_finder/athletic.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Athletic',
                                                1 => 'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                7 => [
                                    'label' => 'Football',
                                    'image' => $this->getDecodedImage('product_finder/football.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                8 => [
                                    'label' => 'Tennis',
                                    'image' => $this->getDecodedImage('product_finder/tennis.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                9 => [
                                    'label' => 'Basketball',
                                    'image' => $this->getDecodedImage('product_finder/basketball.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                10 => [
                                    'label' => 'Climbing',
                                    'image' => $this->getDecodedImage('product_finder/climbing.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                11 => [
                                    'label' => 'Recreation',
                                    'image' => $this->getDecodedImage('product_finder/recreation.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Recreation',
                                                1 => 'Lounge',
                                                2 => 'Outdoor',
                                                3 => 'Travel',
                                                4 => 'School',
                                                5 => 'Urban',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                            ],
                        ],
                        1 => [
                            'optionsPerRow' => [
                                'tablet' => '3',
                                'dektop' => '3',
                            ],
                            'id' => 'climate',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                0 => [
                                    'label' => 'Indoor',
                                    'image' => $this->getDecodedImage('product_finder/indoor.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Indoor',
                                                1 => 'Warm',
                                                2 => 'Hot',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                1 => [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Warm',
                                                1 => 'Hot',
                                                2 => 'Mild',
                                                3 => 'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                2 => [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Cold',
                                                1 => 'Cool',
                                                2 => 'Rainy',
                                                3 => 'Windy',
                                                4 => 'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        2 => [
                            'id' => 'climate2',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                0 => [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Warm',
                                                1 => 'Hot',
                                                2 => 'Mild',
                                                3 => 'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                1 => [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Cold',
                                                1 => 'Cool',
                                                2 => 'Rainy',
                                                3 => 'Windy',
                                                4 => 'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        3 => [
                            'id' => 'category',
                            'additional_css_class' => '',
                            'title' => 'Do you need top, bottom or a set?',
                            'description' => 'Choose what type of clothes are you searching for.',
                            'options' => [
                                0 => [
                                    'label' => 'Top',
                                    'image' => $this->getDecodedImage('product_finder/top.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '21',
                                    'next_step' => 'material',
                                ],
                                1 => [
                                    'label' => 'Bottom',
                                    'image' => $this->getDecodedImage('product_finder/bottom.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '22',
                                    'next_step' => 'material',
                                ],
                                2 => [
                                    'label' => 'Set',
                                    'image' => $this->getDecodedImage('product_finder/set.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '20',
                                    'next_step' => 'material',
                                ],
                            ],
                        ],
                        4 => [
                            'id' => 'material',
                            'additional_css_class' => '',
                            'title' => 'Do you sweat a lot?',
                            'description' => 'If your activity is intensive or you sweat a lot you may prefer breathable material in other cases we recommend natural fiber.',
                            'options' => [
                                0 => [
                                    'label' => 'Yes',
                                    'image' => $this->getDecodedImage('product_finder/wet.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'material',
                                            'values' => [
                                                0 => 'Microfiber',
                                                1 => 'Mesh',
                                                2 => 'Nylon',
                                                3 => 'Polyester',
                                                4 => 'Synthetic',
                                                5 => 'Spandex',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'search',
                                ],
                                1 => [
                                    'label' => 'No',
                                    'image' => $this->getDecodedImage('product_finder/dry.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'material',
                                            'values' => [
                                                0 => 'Organic Cotton',
                                                1 => 'Cotton',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'search',
                                ],
                            ],
                        ],
                    ],
                    'isError' => '',
                    'componentVisibility' => [
                        'mobile' => '0',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'type' => 'paragraph',
                'name' => 'Paragraph',
                'id' => 'component29821nj3dec',
                'section' => 'content',
                'data' =>
                    [
                        'customCssClass' => '',
                        'title' => '',
                        'columns' => 'none',
                        'content' => '<p>Desktop/tablet: OFF<br>Mobile: ON</p>',
                        'scenarios' =>
                            [
                                'reading' =>
                                    [
                                        'name' => 'Container width',
                                        'iconId' => 'tw_content-width-text',
                                        'id' => 'full',
                                    ],
                            ],
                        'migrated' => true,
                        'cc_css_classes' => '',
                        'componentVisibility' =>
                            [
                                'mobile' => true,
                                'desktop' => true,
                            ],
                    ],
            ],
            3 => [
                'id' => 'component2bd94',
                'section' => 'content',
                'type' => 'product-finder',
                'data' => [
                    'optionsPerRow' => [
                        'mobile' => '3',
                        'tablet' => '3',
                        'desktop' => '6',
                    ],
                    'steps' => [
                        0 => [
                            'id' => 'activity',
                            'additional_css_class' => '',
                            'title' => 'What do you want to do?',
                            'description' => 'Hiking, gym, climbing, yoga? With us you can find clothes for every activity',
                            'options' => [
                                0 => [
                                    'label' => 'Running',
                                    'image' => $this->getDecodedImage('product_finder/running.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Running',
                                                1 => 'Outdoor',
                                                2 => 'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                1 => [
                                    'label' => 'Yoga',
                                    'image' => $this->getDecodedImage('product_finder/yoga.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Yoga',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                2 => [
                                    'label' => 'Gym',
                                    'image' => $this->getDecodedImage('product_finder/gym.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Crosstraining',
                                                1 => 'Post-workout',
                                                2 => 'Gym',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                3 => [
                                    'label' => 'Fitness',
                                    'image' => $this->getDecodedImage('product_finder/fitness.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                4 => [
                                    'label' => 'Hiking',
                                    'image' => $this->getDecodedImage('product_finder/hiking.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Hike',
                                                1 => 'Hiking',
                                                2 => 'Outdoor',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                5 => [
                                    'label' => 'Cycling',
                                    'image' => $this->getDecodedImage('product_finder/cycling.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Cycling',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                6 => [
                                    'label' => 'Athletic',
                                    'image' => $this->getDecodedImage('product_finder/athletic.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Athletic',
                                                1 => 'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                7 => [
                                    'label' => 'Football',
                                    'image' => $this->getDecodedImage('product_finder/football.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                8 => [
                                    'label' => 'Tennis',
                                    'image' => $this->getDecodedImage('product_finder/tennis.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                9 => [
                                    'label' => 'Basketball',
                                    'image' => $this->getDecodedImage('product_finder/basketball.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                10 => [
                                    'label' => 'Climbing',
                                    'image' => $this->getDecodedImage('product_finder/climbing.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                11 => [
                                    'label' => 'Recreation',
                                    'image' => $this->getDecodedImage('product_finder/recreation.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => '',
                                            'values' => [
                                                0 => 'Recreation',
                                                1 => 'Lounge',
                                                2 => 'Outdoor',
                                                3 => 'Travel',
                                                4 => 'School',
                                                5 => 'Urban',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                            ],
                        ],
                        1 => [
                            'optionsPerRow' => [
                                'tablet' => '3',
                                'dektop' => '3',
                            ],
                            'id' => 'climate',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                0 => [
                                    'label' => 'Indoor',
                                    'image' => $this->getDecodedImage('product_finder/indoor.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Indoor',
                                                1 => 'Warm',
                                                2 => 'Hot',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                1 => [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Warm',
                                                1 => 'Hot',
                                                2 => 'Mild',
                                                3 => 'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                2 => [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Cold',
                                                1 => 'Cool',
                                                2 => 'Rainy',
                                                3 => 'Windy',
                                                4 => 'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        2 => [
                            'id' => 'climate2',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                0 => [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Warm',
                                                1 => 'Hot',
                                                2 => 'Mild',
                                                3 => 'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                1 => [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'climate',
                                            'values' => [
                                                0 => 'Cold',
                                                1 => 'Cool',
                                                2 => 'Rainy',
                                                3 => 'Windy',
                                                4 => 'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        3 => [
                            'id' => 'category',
                            'additional_css_class' => '',
                            'title' => 'Do you need top, bottom or a set?',
                            'description' => 'Choose what type of clothes are you searching for.',
                            'options' => [
                                0 => [
                                    'label' => 'Top',
                                    'image' => $this->getDecodedImage('product_finder/top.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '21',
                                    'next_step' => 'material',
                                ],
                                1 => [
                                    'label' => 'Bottom',
                                    'image' => $this->getDecodedImage('product_finder/bottom.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '22',
                                    'next_step' => 'material',
                                ],
                                2 => [
                                    'label' => 'Set',
                                    'image' => $this->getDecodedImage('product_finder/set.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '20',
                                    'next_step' => 'material',
                                ],
                            ],
                        ],
                        4 => [
                            'id' => 'material',
                            'additional_css_class' => '',
                            'title' => 'Do you sweat a lot?',
                            'description' => 'If your activity is intensive or you sweat a lot you may prefer breathable material in other cases we recommend natural fiber.',
                            'options' => [
                                0 => [
                                    'label' => 'Yes',
                                    'image' => $this->getDecodedImage('product_finder/wet.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'material',
                                            'values' => [
                                                0 => 'Microfiber',
                                                1 => 'Mesh',
                                                2 => 'Nylon',
                                                3 => 'Polyester',
                                                4 => 'Synthetic',
                                                5 => 'Spandex',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'search',
                                ],
                                1 => [
                                    'label' => 'No',
                                    'image' => $this->getDecodedImage('product_finder/dry.png'),
                                    'attributes' => [
                                        0 => [
                                            'code' => 'material',
                                            'values' => [
                                                0 => 'Organic Cotton',
                                                1 => 'Cotton',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'search',
                                ],
                            ],
                        ],
                    ],
                    'isError' => '',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '0',
                    ],
                ],
            ],
        ];

        return $blocks;
    }
}
