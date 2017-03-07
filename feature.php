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
echo $feature->featureThree();
echo $feature->featureFour();
echo '<br>Class Feature Methods:<br>';
echo json_encode(get_class_methods($feature), JSON_PRETTY_PRINT);
