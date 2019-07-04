<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnFontAwesomeJsAssetCest
 *
 * Unit tests for codeception asset font awesome js svgfont content delivery network
 */
class CdnFontAwesomeJsAssetCest
{
    /**
     * @var \yii\web\View;
     */
    private $view;

    /**
     *  _before
     *
     * @param UnitTester $I
     */
    public function _before(UnitTester $I): void
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

    /**
     * testCdnFontAwesomeJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnFontAwesomeJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnFontAwesomeJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnFontAwesomeJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.js/', $result);
    }

    /**
     * testCdnFontAwesomeJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnFontAwesomeJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnFontAwesomeJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnFontAwesomeJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeJsAsset::class]);
    }
}
