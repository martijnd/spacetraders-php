<?php

declare(strict_types=1);

namespace SpaceTraders;

use SpaceTraders\Traits\MakesHttpRequests;
use GuzzleHttp\Client as HttpClient;
use SpaceTraders\Actions;

class SpaceTraders
{
    use MakesHttpRequests,
        Actions\ManagesAccounts,
        Actions\ManagesLoans;

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

    public function system(string $systemId)
    {
        return new System($systemId, $this->guzzle);
    }
}

class System
{
    use MakesHttpRequests;

    public function __construct(
        public string $systemId,
        public HttpClient $guzzle
    ) {
    }

    public function ships() {
        return $this->get("systems/$this->systemId/ship-listings");
    }
}
