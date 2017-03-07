<?php

class Feature
{
    $message = 'Done';

    public function __construct()
    {
        parent::__construct();
    }

    public function featureOne()
    {
        return $message;
    }
}

$feature = new Feature();
$feature->featureOne();