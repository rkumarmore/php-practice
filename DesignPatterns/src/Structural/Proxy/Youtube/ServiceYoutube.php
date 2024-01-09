<?php
namespace App\Structural\Proxy\Youtube;

class ServiceYoutube implements YoutubeInterface{
    public function listVideos(){
        return "Service is giving you list of videos";
    }
    public function getVideoInfo(){
        return "Service is giving you video info";
    }
    public function downloadVideo(){
        return "Service is downloading video";
    }
}