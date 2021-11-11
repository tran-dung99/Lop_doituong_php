<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime(true)*1000;
        $this->endTime = microtime(true)*1000;

    }

    public function getStartTime()
    {
        return "Start:$this->startTime";
    }

    public function getEndTime()
    {
        return "End time:$this->endTime ";
    }
   public function start()
   {
       $this->startTime = microtime(true)*1000;
   }
    public function stop($endTime)
    {
        $this->endTime = microtime(true)*1000;
    }

    public function getElapsedTime()
    {
        $milion = (($this->endTime) - ($this->startTime));
     return "thời gian đã trôi qua : $milion milisecond giây";
    }
}

?>