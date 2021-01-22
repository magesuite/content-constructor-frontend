<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders\ComponentsList;

class AccordionContainerWidth extends DataProviderComponents
{
    public function getBlocks()
    {
        $blocks = [
            0 => [
                'id' => 'componentcff5',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Accordion #1',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            1 => [
                'type' => 'paragraph',
                'id' => 'componentf0db_duplicate66466',
                'section' => 'content',
                'data' => [
                    'title' => 'Accordion #1',
                    'columns' => 'none',
                    'content' => '<p>Allow multiple sections to be opened at the same time: OFF<br>Unfold first entry on page loaded: OFF</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => true,
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            2 => [
                'type' => 'accordion',
                'id' => 'component9031',
                'section' => 'content',
                'data' => [
                    'multiple_collapsible' => '',
                    'expand_first' => '',
                    'groups' => [
                        0 => [
                            'headline' => '',
                            'items' => [
                                0 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_18837660',
                                ],
                                1 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_89569373',
                                ],
                                2 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_19289396',
                                ],
                                3 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_6537895',
                                ],
                                4 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60538247',
                                ],
                                5 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_91860327',
                                ],
                                6 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60951498',
                                ],
                                7 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_22019407',
                                ],
                                8 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_57356352',
                                ],
                            ],
                        ],
                    ],
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            3 => [
                'id' => 'componentcff5_duplicate27071',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Accordion #2',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            4 => [
                'type' => 'paragraph',
                'id' => 'componentf0db_duplicate69697',
                'section' => 'content',
                'data' => [
                    'title' => 'Accordion #2',
                    'columns' => 'none',
                    'content' => '<p>Allow multiple sections to be opened at the same time: ON<br>Unfold first entry on page loaded: OFF</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => true,
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            5 => [
                'type' => 'accordion',
                'id' => 'component9031_duplicate4404',
                'section' => 'content',
                'data' => [
                    'multiple_collapsible' => '1',
                    'expand_first' => '',
                    'groups' => [
                        0 => [
                            'headline' => '',
                            'items' => [
                                0 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_18837660',
                                ],
                                1 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_89569373',
                                ],
                                2 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_19289396',
                                ],
                                3 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_6537895',
                                ],
                                4 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60538247',
                                ],
                                5 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_91860327',
                                ],
                                6 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60951498',
                                ],
                                7 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_22019407',
                                ],
                                8 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_57356352',
                                ],
                            ],
                        ],
                    ],
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            6 => [
                'id' => 'componentcff5_duplicate35657',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Accordion #3',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            7 => [
                'id' => 'componentf0db_duplicate39538',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'title' => 'Accordion #3',
                    'columns' => 'none',
                    'content' => '<p>Allow multiple sections to be opened at the same time: OFF<br>Unfold first entry on page loaded: ON</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => '1',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            8 => [
                'type' => 'accordion',
                'id' => 'component9031_duplicate29802',
                'section' => 'content',
                'data' => [
                    'multiple_collapsible' => '',
                    'expand_first' => '1',
                    'groups' => [
                        0 => [
                            'headline' => '',
                            'items' => [
                                0 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_18837660',
                                ],
                                1 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_89569373',
                                ],
                                2 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_19289396',
                                ],
                                3 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_6537895',
                                ],
                                4 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60538247',
                                ],
                                5 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_91860327',
                                ],
                                6 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60951498',
                                ],
                                7 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_22019407',
                                ],
                                8 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_57356352',
                                ],
                            ],
                        ],
                    ],
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            9 => [
                'id' => 'componentcff5_duplicate3841',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Accordion #4',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            10 => [
                'id' => 'componentf0db_duplicate70593',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'title' => 'Accordion #4',
                    'columns' => 'none',
                    'content' => '<p>Allow multiple sections to be opened at the same time: ON<br>Unfold first entry on page loaded: ON</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => '1',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            11 => [
                'type' => 'accordion',
                'id' => 'component9031_duplicate54426',
                'section' => 'content',
                'data' => [
                    'multiple_collapsible' => '1',
                    'expand_first' => '1',
                    'groups' => [
                        0 => [
                            'headline' => '',
                            'items' => [
                                0 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_18837660',
                                ],
                                1 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_89569373',
                                ],
                                2 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_19289396',
                                ],
                                3 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_6537895',
                                ],
                                4 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60538247',
                                ],
                                5 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_91860327',
                                ],
                                6 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60951498',
                                ],
                                7 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_22019407',
                                ],
                                8 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_57356352',
                                ],
                            ],
                        ],
                    ],
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            12 => [
                'id' => 'componentcff5_duplicate94497',
                'section' => 'content',
                'type' => 'headline',
                'data' => [
                    'title' => 'Display Mode',
                    'subtitle' => '',
                    'headingTag' => 'h2',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            13 => [
                'id' => 'componentf0db_duplicate84883',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'title' => 'Desktop/tablet',
                    'columns' => 'none',
                    'content' => '<p>Desktop/tablet: ON<br>Mobile: OFF</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => '1',
                    'componentVisibility' => [
                        'mobile' => true,
                        'desktop' => '1',
                    ],
                ],
            ],
            14 => [
                'type' => 'accordion',
                'id' => 'component9031_duplicate72907',
                'section' => 'content',
                'data' => [
                    'multiple_collapsible' => '',
                    'expand_first' => '',
                    'groups' => [
                        0 => [
                            'headline' => '',
                            'items' => [
                                0 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_18837660',
                                ],
                                1 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_89569373',
                                ],
                                2 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_19289396',
                                ],
                                3 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_6537895',
                                ],
                                4 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60538247',
                                ],
                                5 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_91860327',
                                ],
                                6 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60951498',
                                ],
                                7 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_22019407',
                                ],
                                8 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_57356352',
                                ],
                            ],
                        ],
                    ],
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '',
                        'desktop' => '1',
                    ],
                ],
            ],
            15 => [
                'id' => 'componentf0db_duplicate151',
                'section' => 'content',
                'type' => 'paragraph',
                'data' => [
                    'title' => 'Mobile',
                    'columns' => 'none',
                    'content' => '<p>Desktop/tablet: OFF<br>Mobile: ON</p>',
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'migrated' => '1',
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '1',
                    ],
                ],
            ],
            16 => [
                'type' => 'accordion',
                'id' => 'component9031_duplicate3411',
                'section' => 'content',
                'data' => [
                    'multiple_collapsible' => '',
                    'expand_first' => '',
                    'groups' => [
                        0 => [
                            'headline' => '',
                            'items' => [
                                0 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_18837660',
                                ],
                                1 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_89569373',
                                ],
                                2 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_19289396',
                                ],
                                3 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_6537895',
                                ],
                                4 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60538247',
                                ],
                                5 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_91860327',
                                ],
                                6 => [
                                    'headline' => 'Lorem ipsum',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_60951498',
                                ],
                                7 => [
                                    'headline' => 'Lorem ipsum dolor sit amet',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_22019407',
                                ],
                                8 => [
                                    'headline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                    'content' => '<div>
<div class="cs-container cs-container--paragraph">
<div class="cs-container__inner">
<div class="cs-paragraph cs-paragraph--cols-none cs-paragraph--mode-full  | cs-cms-block">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Perferendis</a> quos at minima, eius, placeat similique eos! Aspernatur dolor, obcaecati. Non voluptas laborum voluptatem tempore? Tempora eum iste ipsum, vitae dicta placeat, beatae delectus, nobis consectetur omnis blanditiis! Placeat, vero, quasi!</p>
<p><strong>Consequuntur natus quas</strong>, dolor libero at provident adipisci minima <em>amet minus eum molestias numquam</em>, sunt suscipit tenetur, <span style="text-decoration: underline;">dolores quae, possimus dolore sapient</span>e officiis magni voluptas obcaecati. Distinctio, sed amet aut quo id itaque laboriosam optio cumque sequi saepe recusandae? Ratione ad repellendus totam laborum odio cum ipsum in iste laudantium, reiciendis quo explicabo beatae, vitae! Fugiat deserunt earum nam facilis qui, quidem neque architecto. Necessitatibus, quos itaque accusantium vitae aperiam eligendi autem unde doloribus odit possimus. Omnis ipsum, expedita rerum blanditiis repellat.</p>
<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Deleniti illo, odio sint. Harum impedit debitis unde consequatur quis libero, quae mollitia autem totam modi dignissimos odio aut error tempore omnis in qui.</li>
<li>Amet dolores hic rerum reiciendis mollitia</li>
<li>expedita adipisci facere quo assumenda,</li>
<li>explicabo repellendus perspiciatis quos. Deserunt, accusamus, adipisci!</li>
</ol>
</div>
</div>
</div>
</div>',
                                    'isEditorOpened' => '1',
                                    'editorId' => 'editor_57356352',
                                ],
                            ],
                        ],
                    ],
                    'scenarios' => [
                        'reading' => [
                            'name' => 'Container width',
                            'iconId' => 'tw_content-width-text',
                            'id' => 'full',
                        ],
                    ],
                    'componentVisibility' => [
                        'mobile' => '1',
                        'desktop' => '',
                    ],
                ],
            ],
        ];

        return $blocks;
    }
}
