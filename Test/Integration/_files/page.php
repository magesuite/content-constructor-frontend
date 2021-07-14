<?php

declare(strict_types=1);

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

/**
 * @var $page \Magento\Cms\Model\Page
 * @var $pageRepository \Magento\Cms\Api\PageRepositoryInterface
 */
$page = $objectManager->create(\Magento\Cms\Model\Page::class);
$pageRepository = $objectManager->create(\Magento\Cms\Api\PageRepositoryInterface::class);

$page->setTitle('Cms Page 100')
    ->setIdentifier('page-test')
    ->setStores([0])
    ->setIsActive(1)
    ->setContentConstructorContent(
        '[
  {
    "type": "hero-carousel",
    "name": "Hero Carousel",
    "id": "component7426",
    "section": "content",
    "data": {
      "mobileDisplayVariant": {
        "name": "Slider",
        "iconId": "ml_slider",
        "id": "slider"
      },
      "items": [
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvV2hhdHNBcHBfSW1hZ2VfMjAyMS0wNi0wNV9hdF8xNS4xNi4zNi5qcGVnIn19",
            "decoded": "{{media url=\"wysiwyg\/magento_image.png\"}}",
            "aspect_ratio": "4:3",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test",
          "description": "test",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full"
        }
      ],
      "ignoredItems": [],
      "scenario": {
        "teaserWidth": [],
        "desktopLayout": [],
        "contentPlacement": [],
        "mobileLayout": []
      },
      "componentVisibility": {
        "mobile": true,
        "desktop": true
      }
    }
  },
  {
    "type": "image-teaser-2",
    "name": "Image Teaser",
    "id": "componentf52e",
    "section": "content",
    "data": {
      "customCssClass": "",
      "items": [
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvV2hhdHNBcHBfSW1hZ2VfMjAyMS0wNi0wNV9hdF8xNS4xNi4zNi5qcGVnIn19",
            "decoded": "{{media url=\"wysiwyg\/magento_image_second.png\"}}",
            "aspect_ratio": "4:3",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test2",
          "description": "test2",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full",
          "cc_css_classes": ""
        }
      ],
      "ignoredItems": [],
      "scenario": {
        "teaserWidth": {
          "name": "Content width",
          "iconId": "tw_content-width",
          "disabled": false,
          "id": "container"
        },
        "desktopLayout": {
          "name": "1 in row",
          "iconId": "dl_1",
          "disabled": false,
          "teasersNum": 1,
          "id": "1"
        },
        "contentPlacement": {
          "name": "Text over image",
          "iconId": "tl_over",
          "disabled": false,
          "contentPlacement": true,
          "id": "over"
        },
        "mobileLayout": {
          "name": "Teasers in column",
          "iconId": "ml_col",
          "disabled": false,
          "id": "mobile-in-columns"
        }
      },
      "isError": false,
      "componentVisibility": {
        "mobile": true,
        "desktop": true
      }
    }
  },
  {
    "type": "mosaic",
    "name": "Mosaic",
    "id": "component22b5",
    "section": "content",
    "data": {
      "customCssClass": "",
      "items": [
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvV2hhdHNBcHBfSW1hZ2VfMjAyMS0wNi0wNV9hdF8xNS4xNi4zNi5qcGVnIn19",
            "decoded": "{{media url=\"wysiwyg\/magento_image_third.png\"}}",
            "aspect_ratio": "4:3",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test3",
          "description": "test3",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full",
          "cc_css_classes": ""
        },
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvU2NyZWVuc2hvdF8yMDIxLTA1LTE3X2F0XzEzLjI5LjEzLnBuZyJ9fQ",
            "decoded": "{{media url=\"wysiwyg\/magento_image_third.png\"}}",
            "aspect_ratio": "84:83",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test4",
          "description": "test4",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full",
          "cc_css_classes": ""
        }
      ],
      "ignoredItems": [],
      "scenario": {
        "teaserWidth": {
          "id": "container"
        },
        "proportions": {
          "id": "1"
        },
        "contentPlacement": {
          "id": "over"
        },
        "desktopLayout": {
          "id": "2"
        },
        "mobileLayout": {
          "id": "mobile-in-columns"
        }
      },
      "isError": false,
      "componentVisibility": {
        "mobile": false,
        "desktop": true
      }
    }
  }
]
'
    );
$pageRepository->save($page);

$page = $objectManager->create(\Magento\Cms\Model\Page::class);
$page->setTitle('Cms Page with headline at the beginning')
    ->setIdentifier('page-with-headline')
    ->setStores([0])
    ->setIsActive(1)
    ->setContentConstructorContent(
        '[
{
    "name": "Headline",
    "type": "headline",
    "id": "component3e7e",
    "section": "content",
    "data": {
    "title": "test headline",
      "subtitle": "",
      "headingTag": "h2",
      "componentVisibility": {
        "mobile": true,
        "desktop": true
      }
    }
  },
  {
    "type": "image-teaser-2",
    "name": "Image Teaser",
    "id": "componentf52e",
    "section": "content",
    "data": {
      "customCssClass": "",
      "items": [
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvV2hhdHNBcHBfSW1hZ2VfMjAyMS0wNi0wNV9hdF8xNS4xNi4zNi5qcGVnIn19",
            "decoded": "{{media url=\"wysiwyg\/magento_image_second.png\"}}",
            "aspect_ratio": "4:3",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test2",
          "description": "test2",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full",
          "cc_css_classes": ""
        }
      ],
      "ignoredItems": [],
      "scenario": {
        "teaserWidth": {
          "name": "Content width",
          "iconId": "tw_content-width",
          "disabled": false,
          "id": "container"
        },
        "desktopLayout": {
          "name": "1 in row",
          "iconId": "dl_1",
          "disabled": false,
          "teasersNum": 1,
          "id": "1"
        },
        "contentPlacement": {
          "name": "Text over image",
          "iconId": "tl_over",
          "disabled": false,
          "contentPlacement": true,
          "id": "over"
        },
        "mobileLayout": {
          "name": "Teasers in column",
          "iconId": "ml_col",
          "disabled": false,
          "id": "mobile-in-columns"
        }
      },
      "isError": false,
      "componentVisibility": {
        "mobile": true,
        "desktop": true
      }
    }
  },
  {
    "type": "mosaic",
    "name": "Mosaic",
    "id": "component22b5",
    "section": "content",
    "data": {
      "customCssClass": "",
      "items": [
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvV2hhdHNBcHBfSW1hZ2VfMjAyMS0wNi0wNV9hdF8xNS4xNi4zNi5qcGVnIn19",
            "decoded": "{{media url=\"wysiwyg\/magento_image_third.png\"}}",
            "aspect_ratio": "4:3",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test3",
          "description": "test3",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full",
          "cc_css_classes": ""
        },
        {
          "image": {
            "raw": "http:\/\/magesuite.me\/mgsadmin\/content-constructor\/image\/show\/key\/b5b14a4d2036c3c138896b7c18d568c09b23850af1230229db95a796b28c2eaa\/image\/e3ttZWRpYSB1cmw9Ind5c2l3eWcvU2NyZWVuc2hvdF8yMDIxLTA1LTE3X2F0XzEzLjI5LjEzLnBuZyJ9fQ",
            "decoded": "{{media url=\"wysiwyg\/magento_image_third.png\"}}",
            "aspect_ratio": "84:83",
            "mobile": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            },
            "tablet": {
              "raw": "",
              "decoded": "",
              "aspect_ratio": ""
            }
          },
          "slogan": "test4",
          "description": "test4",
          "cta": {
            "label": "More",
            "href": ""
          },
          "content_align": {
            "x": 1,
            "y": 1
          },
          "sizeSelect": "2x1",
          "size": {
            "x": 2,
            "y": 1
          },
          "row": 1,
          "position": "left",
          "isAvailableForMobile": 1,
          "optimizers": {
            "color_scheme": "dark",
            "mirror_image": false,
            "scenarios": {
              "none": {
                "enabled": true,
                "intensity": "disabled",
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_none",
                  "label": "None"
                }
              },
              "overlay": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_overlay",
                  "label": "Overlay"
                }
              },
              "gradient": {
                "enabled": false,
                "intensity": 50,
                "direction": {
                  "x": 1,
                  "y": 1
                },
                "configurator": {
                  "icon": "#contrast_gradient",
                  "label": "Gradient shadow"
                }
              },
              "container": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_container",
                  "label": "Container"
                }
              },
              "text_shadow": {
                "enabled": false,
                "intensity": 50,
                "direction": "disabled",
                "configurator": {
                  "icon": "#contrast_text-shadow",
                  "label": "Text shadow"
                }
              }
            }
          },
          "teaserType": "full",
          "cc_css_classes": ""
        }
      ],
      "ignoredItems": [],
      "scenario": {
        "teaserWidth": {
          "id": "container"
        },
        "proportions": {
          "id": "1"
        },
        "contentPlacement": {
          "id": "over"
        },
        "desktopLayout": {
          "id": "2"
        },
        "mobileLayout": {
          "id": "mobile-in-columns"
        }
      },
      "isError": false,
      "componentVisibility": {
        "mobile": false,
        "desktop": true
      }
    }
  }
]
'
    );
$pageRepository->save($page);
