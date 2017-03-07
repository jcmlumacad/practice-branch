<?php

class Feature
{
    private $message = 'Done';

    public function featureOne()
    {
        return $this->message;
    }

    public function featureTwo()
    {
        return 'Feature Two';
    }
}

$feature = new Feature();
echo $feature->featureOne();
echo $feature->featureTwo();
