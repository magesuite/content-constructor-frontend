<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\DataProviders;

class InstagramFeedDataProvider
{
    public const MEDIA_TYPE_VIDEO = 'VIDEO';

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\GetFeedData $getFeedData,
        protected \Psr\Log\LoggerInterface $logger,
    ) {}

    public function getFeedData(int $numberOfSlides): array
    {
        try {
            $response = $this->getFeedData->execute($numberOfSlides);

            if (empty($response['data'])) {
                return [];
            }

            $feedData = [];

            foreach ($response['data'] as $item) {
                if ($item['media_type'] == self::MEDIA_TYPE_VIDEO) {
                    continue;
                }
                $item['image']['decoded'] = $item['media_url'];
                $item['cta']['href'] = $item['permalink'];
                $feedData[] = $item;
            }

            return $feedData;
        } catch (\Throwable $e) {
            $this->logger->error($e->getMessage());

            return [];
        }
    }
}
