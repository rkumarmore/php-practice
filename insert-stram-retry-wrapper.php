<?php

//create insert variable
class createWrapper
{
    public callback;

    public function __consrtuct($file_path)
    {
       $this->insert = function ($accumulator, $line, $count, $done)
       {
           return $this->copyStreamToDB($accumulator, $line, $count, $done);
       }
    }

    public function main($file_path)
    {
        $accumulator = (object)[
            'file'=>$file_path,
            'target'=>'dbname', //optional be creative
            'lines'=>[]
        ];

        $this->stramFile($file_path, $accumulator, $this->insert)
    }

    public function stramFile($file_path, $accumulator, $callback)
    {
        if($stream = $this->openFile($file_path)){
            $line= true;
            while($line){
                $line = $this->readline($stream);
                $accumulator = $callback($accumulator, $line, $count, false);
            }
            $callback($accumulator, $line, $count, true);
        }
    }

    public function copyStreanToDB($accumulator, $line, $count, $done)
    {
        if ($done) {
            $this->writeToDB($accumulator);
            return $accumulator;
        }

        if($count($line_array) != count($accumulator->headers)){
            //Throuh error
        }

        if($accumulator->headers){
            $accumulator->headers = str_getcsv(strtolower(str_replace('\xEF\xBB\xBF', '', $line)), ',');
        }

        $line_array = str_getcsv(utf8_encode(str_replace('\\', '', $line)), ',')
        $accumulator->lines[] = array_combine($accumulator->headers, $line_array);

        return $accumulator;
    }

    public function writeToDB($accumulator)
    {
        $func = function ($accumulator)
        {
            //insert command
            return true;
        }
        $params = (object)['accumulator'=>$accumulator];
        $this->retryWrapper($func, $params, 3);
    }

    public function openFile($file_path)
    {
       $func = function ($params)
       {
           $file_path = $params->file_path;
           $data = fopen($file_path , 'r');
           return $data;
       }

       $params = (object)['file_path'=>$file_path, ];
       return $this->retryWrapper($func, $params);
    }

    public function retryWrapper($func, $params,  $max_attempts=3, $wait=5000)
    {
        $wrapper = function ($func, $params, $attempt =0,)
        {
            try {
                return $func($params);
            } catch (Exception $ex) {
                if($attempt < $max_attempts){
                    usleep($wait);
                    return $wrapper($func, $params, $attempt+1, $max_attempts), ;
                }
                throw $ex;
            }
        }
    }

    
}
