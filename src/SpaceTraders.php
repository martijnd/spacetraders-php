<?php

declare(strict_types=1);

namespace SpaceTraders;

use SpaceTraders\Traits\MakesHttpRequests;
use GuzzleHttp\Client as HttpClient;
use SpaceTraders\Actions\ManagesAccounts;

class SpaceTraders
{
    use MakesHttpRequests,
    ManagesAccounts;

    /**
     * @var string
     */
    private $apiKey;


    /** 
     * @var HttpClient
     */
    private $guzzle;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->guzzle = new HttpClient([
            'base_uri' => 'https://api.spacetraders.io/',
            'http_errors' => false,
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }
}
