<?php
namespace  App\Providers;
use Vimeo\Vimeo;


class VimeoProvider {


    /**
     * @var Vimeo
     */
    private $client;

    public function __construct()
    {
        /** @var TYPE_NAME $client */
        $this->client = new Vimeo(config('vimeo.client_id'), config('vimeo.client_secret'), config('vimeo.access_token'));
    }




    public function getInstance(){
        return $this->client;
    }

}
