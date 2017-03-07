<?php

class Feature
{
    private $message = 'Done';

    public function featureOne()
    {
        return $this->message;
    }
}

$feature = new Feature();
echo $feature->featureOne();