<?php

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class InstagramFeedDataProvider
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeInterface;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\Configuration
     */
    protected $configuration;

    public function __construct(
        \GuzzleHttp\Client $client,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface,
        \Psr\Log\LoggerInterface $logger,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration

    )
    {
        $this->client = $client;
        $this->scopeInterface = $scopeInterface;
        $this->logger = $logger;
        $this->configuration = $configuration;
    }

    public function getFeedData($numberOfSlides)
    {
        try {
            $response = $this->getApiResponse();

            if(!isset($response['data']) || empty($response['data'])){
                return [];
            }

            $feedData = [];

            foreach ($response['data'] as $item) {
                if($item['type'] == 'video'){
                    continue;
                }
                $item['image']['decoded'] = $item['images']['standard_resolution']['url'];
                $item['cta']['href'] = $item['link'];
                $feedData[] = $item;
            }

            $feedData = $this->sortByDate($feedData);
            $feedData = array_slice($feedData, 0, $numberOfSlides);

            return $feedData;
        } catch (\Exception $e) {
            $this->logger->error($e->getMessage());
        }
        return [];
    }

    public function sortByDate($feedData)
    {
        usort($feedData, function($a, $b) {
            return $b['created_time'] <=> $a['created_time'];
        });

        return $feedData;
    }

    public function getApiResponse()
    {
        $token = $this->configuration->getInstagramAccessToken();

        if(!$token){
            return [];
        }

        $response = $this->client->get(
            'https://api.instagram.com/v1/users/self/media/recent',
            [
                'query' => [
                    'access_token' => $token
                ]
            ]
        );

        return json_decode($response->getBody()->getContents(), true);
    }

}