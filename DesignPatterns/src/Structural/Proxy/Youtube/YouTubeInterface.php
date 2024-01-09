<?php
namespace App\Structural\Proxy\Youtube;

interface YoutubeInterface{
    public function listVideos();
    public function getVideoInfo();
    public function downloadVideo();
}