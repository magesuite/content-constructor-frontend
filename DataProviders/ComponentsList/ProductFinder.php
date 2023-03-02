<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class ProductFinder extends DataProviderComponents
{
    public function getBlocks(): array
    {
        return [
            [
                '_type' => '\MageSuite\ContentConstructorFrontend\Block\Component',
                '_data' => [
                    'section' => 'content',
                    'type' => 'headline',
                    'data' => [
                        'title' => 'Display mode'
                    ]
                ]
            ],
            [
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
            [
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
                        [
                            'id' => 'activity',
                            'additional_css_class' => '',
                            'title' => 'What do you want to do?',
                            'description' => 'Hiking, gym, climbing, yoga? With us you can find clothes for every activity',
                            'options' => [
                                [
                                    'label' => 'Running',
                                    'image' => $this->getDecodedImage('product_finder/running.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Running',
                                                'Outdoor',
                                                'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Yoga',
                                    'image' => $this->getDecodedImage('product_finder/yoga.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Yoga',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Gym',
                                    'image' => $this->getDecodedImage('product_finder/gym.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Crosstraining',
                                                'Post-workout',
                                                'Gym',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Fitness',
                                    'image' => $this->getDecodedImage('product_finder/fitness.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Hiking',
                                    'image' => $this->getDecodedImage('product_finder/hiking.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Hike',
                                                'Hiking',
                                                'Outdoor',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Cycling',
                                    'image' => $this->getDecodedImage('product_finder/cycling.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Cycling',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Athletic',
                                    'image' => $this->getDecodedImage('product_finder/athletic.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Athletic',
                                                'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Football',
                                    'image' => $this->getDecodedImage('product_finder/football.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Tennis',
                                    'image' => $this->getDecodedImage('product_finder/tennis.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Basketball',
                                    'image' => $this->getDecodedImage('product_finder/basketball.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Climbing',
                                    'image' => $this->getDecodedImage('product_finder/climbing.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Recreation',
                                    'image' => $this->getDecodedImage('product_finder/recreation.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Recreation',
                                                'Lounge',
                                                'Outdoor',
                                                'Travel',
                                                'School',
                                                'Urban',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                            ],
                        ],
                        [
                            'optionsPerRow' => [
                                'tablet' => '3',
                                'dektop' => '3',
                            ],
                            'id' => 'climate',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                [
                                    'label' => 'Indoor',
                                    'image' => $this->getDecodedImage('product_finder/indoor.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Indoor',
                                                'Warm',
                                                'Hot',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Warm',
                                                'Hot',
                                                'Mild',
                                                'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Cold',
                                                'Cool',
                                                'Rainy',
                                                'Windy',
                                                'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        [
                            'id' => 'climate2',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Warm',
                                                'Hot',
                                                'Mild',
                                                'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Cold',
                                                'Cool',
                                                'Rainy',
                                                'Windy',
                                                'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        [
                            'id' => 'category',
                            'additional_css_class' => '',
                            'title' => 'Do you need top, bottom or a set?',
                            'description' => 'Choose what type of clothes are you searching for.',
                            'options' => [
                                [
                                    'label' => 'Top',
                                    'image' => $this->getDecodedImage('product_finder/top.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => $this->getMainCategoryId(),
                                    'next_step' => 'material',
                                ],
                                [
                                    'label' => 'Bottom',
                                    'image' => $this->getDecodedImage('product_finder/bottom.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => $this->getMainCategoryId(),
                                    'next_step' => 'material',
                                ],
                                [
                                    'label' => 'Set',
                                    'image' => $this->getDecodedImage('product_finder/set.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => $this->getMainCategoryId(),
                                    'next_step' => 'material',
                                ],
                            ],
                        ],
                        [
                            'id' => 'material',
                            'additional_css_class' => '',
                            'title' => 'Do you sweat a lot?',
                            'description' => 'If your activity is intensive or you sweat a lot you may prefer breathable material in other cases we recommend natural fiber.',
                            'options' => [
                                [
                                    'label' => 'Yes',
                                    'image' => $this->getDecodedImage('product_finder/wet.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'material',
                                            'values' => [
                                                'Microfiber',
                                                'Mesh',
                                                'Nylon',
                                                'Polyester',
                                                'Synthetic',
                                                'Spandex',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'search',
                                ],
                                [
                                    'label' => 'No',
                                    'image' => $this->getDecodedImage('product_finder/dry.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'material',
                                            'values' => [
                                                'Organic Cotton',
                                                'Cotton',
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
            [
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
            [
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
                        [
                            'id' => 'activity',
                            'additional_css_class' => '',
                            'title' => 'What do you want to do?',
                            'description' => 'Hiking, gym, climbing, yoga? With us you can find clothes for every activity',
                            'options' => [
                                [
                                    'label' => 'Running',
                                    'image' => $this->getDecodedImage('product_finder/running.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Running',
                                                'Outdoor',
                                                'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Yoga',
                                    'image' => $this->getDecodedImage('product_finder/yoga.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Yoga',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Gym',
                                    'image' => $this->getDecodedImage('product_finder/gym.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Crosstraining',
                                                'Post-workout',
                                                'Gym',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Fitness',
                                    'image' => $this->getDecodedImage('product_finder/fitness.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Hiking',
                                    'image' => $this->getDecodedImage('product_finder/hiking.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Hike',
                                                'Hiking',
                                                'Outdoor',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Cycling',
                                    'image' => $this->getDecodedImage('product_finder/cycling.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Cycling',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Athletic',
                                    'image' => $this->getDecodedImage('product_finder/athletic.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Athletic',
                                                'Sports',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Football',
                                    'image' => $this->getDecodedImage('product_finder/football.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Tennis',
                                    'image' => $this->getDecodedImage('product_finder/tennis.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Basketball',
                                    'image' => $this->getDecodedImage('product_finder/basketball.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate',
                                ],
                                [
                                    'label' => 'Climbing',
                                    'image' => $this->getDecodedImage('product_finder/climbing.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                                [
                                    'label' => 'Recreation',
                                    'image' => $this->getDecodedImage('product_finder/recreation.png'),
                                    'attributes' => [
                                        [
                                            'code' => '',
                                            'values' => [
                                                'Recreation',
                                                'Lounge',
                                                'Outdoor',
                                                'Travel',
                                                'School',
                                                'Urban',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'climate2',
                                ],
                            ],
                        ],
                        [
                            'optionsPerRow' => [
                                'tablet' => '3',
                                'dektop' => '3',
                            ],
                            'id' => 'climate',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                [
                                    'label' => 'Indoor',
                                    'image' => $this->getDecodedImage('product_finder/indoor.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Indoor',
                                                'Warm',
                                                'Hot',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Warm',
                                                'Hot',
                                                'Mild',
                                                'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Cold',
                                                'Cool',
                                                'Rainy',
                                                'Windy',
                                                'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        [
                            'id' => 'climate2',
                            'additional_css_class' => '',
                            'title' => 'Where are you going to train?',
                            'description' => 'Are you going to train indoor, outdoor in warm climate or outdoor in cold climate?',
                            'options' => [
                                [
                                    'label' => 'Outdoor - warm climate',
                                    'image' => $this->getDecodedImage('product_finder/warm.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Warm',
                                                'Hot',
                                                'Mild',
                                                'Spring',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                                [
                                    'label' => 'Outdoor - cold climate',
                                    'image' => $this->getDecodedImage('product_finder/cold.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'climate',
                                            'values' => [
                                                'Cold',
                                                'Cool',
                                                'Rainy',
                                                'Windy',
                                                'Wintry',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'category',
                                ],
                            ],
                        ],
                        [
                            'id' => 'category',
                            'additional_css_class' => '',
                            'title' => 'Do you need top, bottom or a set?',
                            'description' => 'Choose what type of clothes are you searching for.',
                            'options' => [
                                [
                                    'label' => 'Top',
                                    'image' => $this->getDecodedImage('product_finder/top.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => $this->getMainCategoryId(),
                                    'next_step' => 'material',
                                ],
                                [
                                    'label' => 'Bottom',
                                    'image' => $this->getDecodedImage('product_finder/bottom.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => $this->getMainCategoryId(),
                                    'next_step' => 'material',
                                ],
                                [
                                    'label' => 'Set',
                                    'image' => $this->getDecodedImage('product_finder/set.png'),
                                    'attributes' => [
                                    ],
                                    'category_id' => $this->getMainCategoryId(),
                                    'next_step' => 'material',
                                ],
                            ],
                        ],
                        [
                            'id' => 'material',
                            'additional_css_class' => '',
                            'title' => 'Do you sweat a lot?',
                            'description' => 'If your activity is intensive or you sweat a lot you may prefer breathable material in other cases we recommend natural fiber.',
                            'options' => [
                                [
                                    'label' => 'Yes',
                                    'image' => $this->getDecodedImage('product_finder/wet.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'material',
                                            'values' => [
                                                'Microfiber',
                                                'Mesh',
                                                'Nylon',
                                                'Polyester',
                                                'Synthetic',
                                                'Spandex',
                                            ],
                                        ],
                                    ],
                                    'category_id' => '',
                                    'next_step' => 'search',
                                ],
                                [
                                    'label' => 'No',
                                    'image' => $this->getDecodedImage('product_finder/dry.png'),
                                    'attributes' => [
                                        [
                                            'code' => 'material',
                                            'values' => [
                                                'Organic Cotton',
                                                'Cotton',
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
    }
}
