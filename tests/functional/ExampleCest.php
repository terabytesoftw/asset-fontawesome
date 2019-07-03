<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\FunctionalTester;
use terabytesoft\assets\fontawesome\cdn\css\CdnAllAsset;
use yii\web\AssetBundle;
use yii\web\View;

class ExampleCest
{
    public function _before(FunctionalTester $I)
    {
        $this->view = new View();
    }

    /**
     * _after
     *
     * @param UnitTester $I
     */
    public function _after(UnitTester $I): void
    {
        unset($this->view);
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $result = $this->view->renderFile(codecept_data_dir() . 'example.php');

        var_dump($result);
    }
}
