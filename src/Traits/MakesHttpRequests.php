<?php

namespace SpaceTraders\Traits;

trait MakesHttpRequests
{
    /**
     * Makes a GET request to the given URL.
     * 
     * @param string $url
     * @return array<string,mixed>
     */
    public function get(string $url): array
    {
        return $this->request('get', $url);
    }

    /**
     * Makes a request to the given url.
     * 
     * @param string $verb
     * @param string $url
     * @param array<string,string> $payload
     * 
     * @return array<string,mixed>
     */
    public function request(string $verb, string $url, array $payload = []): array
    {
        $response = $this->guzzle->request($verb, $url,
            $payload
        );

        $responseBody = (string) $response->getBody();

        /** @var array<string,mixed> $result */
        $result = json_decode($responseBody, true) ?: $responseBody;
        return $result;
    }
}
