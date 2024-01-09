<?php
namespace App\Structural\Proxy\Youtube;

class ServiceYoutube implements YoutubeInterface{
    protected $serviceYoutube;
    protected $cachedVideos = [];

    public function __construct(ServiceYoutube $serviceYoutube) {
        $this->serviceYoutube = $serviceYoutube;
    }
    public function listVideos(){

        if(!empty($this->cachedVideos)){
            return $this->cachedVideos;
        }

        return $this->serviceYoutube->listVideos();

        
    }
    public function getVideoInfo($video = null){
        if(in_array($video, $this->cachedVideos)){
            return $this->cachedVideos[$video];
        }
        return $this->serviceYoutube->getVideoInfo();
    }
    public function downloadVideo(){
        if(in_array($video, $this->cachedVideos)){
            return $this->download($video);
        }
        return $this->serviceYoutube->downloadVideo();
    }

    function download($video) {
        // Download video
        return;
    }
}