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

    public function featureThree()
    {
        return 'Feature Three';
    }

    public function featureFour()
    {
        return 'Feature Four';
    }
}

$feature = new Feature();
echo $feature->featureOne();
echo $feature->featureTwo();
echo $featureThree();
