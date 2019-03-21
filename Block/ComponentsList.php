<?php

namespace MageSuite\ContentConstructorFrontend\Block;

use MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList\Index;
use Magento\Framework\App\Request\Http;

class ComponentsList extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Http
     */
    private $request;

    /**
     * @var \Magento\Cms\Model\BlockFactory
     */
    private $blockFactory;

    /**
     * @var \Magento\Cms\Api\BlockRepositoryInterface
     */
    private $blockRepository;

    /**
     * @var \Magento\Cms\Model\PageFactory
     */
    private $pageFactory;

    /**
     * @var \Magento\Cms\Api\PageRepositoryInterface
     */
    private $pageRepository;

    /**
     * @var \Magento\Catalog\Helper\Category
     */
    protected $categoryHelper;
    
    private $providers = [
        'herocarousel-large' => 'HeroCarouselLarge',
        'herocarousel-slider' => 'HeroCarouselSlider',
        'herocarousel-hidden' => 'HeroCarouselHidden',
        'itlegacywindowwidth' => 'ITLegacyWindowWidth',
        'itlegacycontainerwidth' => 'ITLegacyContainerWidth',
        'itlegacywindowwidthslider' => 'ITLegacyWindowWidthSlider',
        'itlegacycontainerwidthslider' => 'ITLegacyContainerWidthSlider',
        'itwindowwidth' => 'ITWindowWidth',
        'itcontainerwidth' => 'ITContainerWidth',
        'itwindowwidthslider' => 'ITWindowWidthSlider',
        'itcontainerwidthslider' => 'ITContainerWidthSlider',
        'contrastoptimizers' => 'ContrastOptimizers',
        'productgridnohero' => 'ProductGridNoHero',
        'productgridheroleft' => 'ProductGridHeroLeft',
        'productgridheroright' => 'ProductGridHeroRight',
        'paragraph' => 'Paragraph',
    ];

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Cms\Model\BlockFactory $blockFactory,
        \Magento\Cms\Api\BlockRepositoryInterface $blockRepository,
        \Magento\Cms\Model\PageFactory $pageFactory,
        \Magento\Cms\Api\PageRepositoryInterface $pageRepository,
        Http $request,
        \Magento\Catalog\Helper\Category $categoryHelper,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->blockFactory = $blockFactory;
        $this->blockRepository = $blockRepository;
        $this->pageFactory = $pageFactory;
        $this->pageRepository = $pageRepository;
        $this->request = $request;
        $this->categoryHelper = $categoryHelper;
    }


    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getBlocksList()
    {
        $this->createCmsBlock();
        $this->createCmsPage();
        $page = $this->request->get('page');

        if (!isset($this->providers[$page])) {
            $provider = new Index($this->categoryHelper);
        } else {
            $providerClass = '\MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList\\' . $this->providers[$page];
            $provider = new $providerClass();
        }

        return $provider->getBlocks();
    }

    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function createCmsPage()
    {
        try {
            $this->pageRepository->getById(10001);
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $page = $this->pageFactory->create();
            $page->setData([
                'page_id' => 10001,
                'title' => 'Test Page Title',
                'identifier' => 'test-page-identifier',
                'stores' => [0],
                'is_active' => 1,
            ]);
            $this->pageRepository->save($page);
        }
    }

    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function createCmsBlock()
    {
        try {
            $block = $this->blockRepository->getById(10001);
            if($block->getContent() != $this->getContent()) {
                $block->setContent($this->getContent());
                $this->blockRepository->save($block);
            }
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            $block = $this->blockFactory->create();
            $block->setData([
                'block_id' => 10001,
                'title' => 'Test Block Title',
                'identifier' => 'test-block-identifier',
                'content' => $this->getContent(),
                'stores' => [0],
                'is_active' => 1,
            ]);
            $this->blockRepository->save($block);
        }
    }

    private function getContent() {
        $content = <<<EOD
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quos at minima, eius, placeat similique eos! 
Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae 
delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima amet minus eum molestias numquam, 
sunt suscipit tenetur, dolores quae, possimus dolore sapiente officiis magni voluptas obcaecati. Distinctio, sed amet aut 
quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste 
laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. 
Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
<div><img src="{{media url="creative_components/federica-galli-703572-unsplash.jpg"}}" width="640" height="341" /></div>
<p>Modi eum omnis minus minima, fugiat nam explicabo aperiam ipsam delectus ullam aspernatur fuga enim rerum nostrum 
exercitationem aliquid doloribus consequatur repellendus quasi praesentium natus perferendis tenetur rem pariatur odio? 
Sapiente eligendi quos sequi cumque voluptatibus. Repellendus laudantium similique nihil consequuntur, perspiciatis iure 
veritatis, illum nulla quos quam soluta libero asperiores, cumque dicta sunt officiis omnis autem dolore beatae, eos repellat 
dolorem commodi ipsam. Eligendi aperiam ea, impedit tempore perspiciatis incidunt optio facere reiciendis, assumenda ad 
ipsum cupiditate. Molestiae placeat nobis tempora doloribus unde reprehenderit distinctio ut, autem vero officiis inventore! 
Sit alias illum omnis facilis quas quaerat ratione animi nam minus quam, sint ut aliquam obcaecati voluptates saepe reprehenderit 
accusantium repellendus maxime fuga nostrum illo ab aperiam?&nbsp;<img src="{{media url="creative_components/annie-spratt-294450-unsplash.jpg"}}" width="574" height="402" /> 
Laboriosam odit quibusdam doloribus accusamus blanditiis impedit qui quia nemo maxime aperiam laborum obcaecati repellendus 
dolor inventore dolorem nihil, nobis velit, quae. Culpa, architecto, iure suscipit quam porro esse tempore ipsum voluptates 
placeat excepturi illo vero neque nesciunt quibusdam cupiditate hic doloremque praesentium debitis nobis! Cum, reiciendis 
enim, quos accusantium libero earum perspiciatis expedita corporis assumenda molestiae velit suscipit laborum corrupti explicabo 
ex obcaecati quidem ipsam repudiandae at iusto id ipsa quasi. Minima consectetur ullam reprehenderit ea, incidunt cumque fugit, 
culpa, iste, ipsam perspiciatis praesentium corrupti ex aperiam a natus ducimus! Distinctio laboriosam ab, consequuntur amet, 
quia dolores repudiandae magnam, mollitia molestias totam facere pariatur consequatur? Eligendi nobis, quos accusamus eaque 
est neque laborum, ullam impedit totam vero quibusdam ea quas. Obcaecati accusantium, temporibus unde, magnam optio recusandae, 
quidem quia reprehenderit incidunt sit cumque autem natus laudantium. Unde officia officiis quisquam esse consectetur laudantium 
dignissimos vitae dolor illum rem magni deleniti sunt ab fuga mollitia labore adipisci veniam quos aliquam harum quibusdam maiores 
reiciendis, facilis asperiores consequatur. Neque, iure. Voluptates expedita deserunt culpa quaerat harum perspiciatis, doloremque 
voluptatum fugiat voluptatibus veritatis neque nobis vitae repellat repudiandae labore cupiditate iusto! Minus quasi eligendi 
consequuntur aperiam molestias itaque expedita blanditiis doloribus beatae veniam error perspiciatis quaerat magni culpa mollitia, 
dolor fugiat quibusdam vel dolores deserunt!</p>
<ul>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ul>
<p>Doloremque repellendus dignissimos fugiat numquam odio cumque reiciendis cupiditate molestias unde corporis eaque, ipsum, 
consectetur dolorum quam voluptatibus maiores sequi perferendis! Quas pariatur officiis atque consequatur assumenda omnis, 
libero nihil, vero eaque nisi exercitationem delectus! Corporis beatae dignissimos, iste sequi quas minus molestias placeat praesentium non porrooooo.</p>
EOD;
        return $content;
    }
}
