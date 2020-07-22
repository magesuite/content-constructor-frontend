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
                if($item['media_type'] == 'VIDEO'){
                    continue;
                }
                $item['image']['decoded'] = $item['media_url'];
                $item['cta']['href'] = $item['permalink'];
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
            return $b['timestamp'] <=> $a['timestamp'];
        });

        return $feedData;
    }

    public function getApiResponse()
    {
        $token = $this->configuration->getInstagramAccessToken();

        if(!$token){
            return [];
        }

        $userId = $this->configuration->getInstagramUserId();

        if(!$userId) {
            $userId = $this->getUserId($token);
            $this->configuration->setInstagramUserId($userId);
        }

        if(!$userId){
            return [];
        }

        $response = $this->client->get(
            sprintf('https://graph.instagram.com/%d/media?fields=media_type,media_url,permalink,timestamp&access_token=%s&limit=50', $userId, $token)
        );

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function getUserId($token){
        $response = $this->client->get(
            sprintf('https://graph.instagram.com/me?fields=id&access_token=%s', $token)
        );

        $result = json_decode($response->getBody()->getContents(), true);

        return isset($result["id"]) ? $result["id"] : "";
    }
}