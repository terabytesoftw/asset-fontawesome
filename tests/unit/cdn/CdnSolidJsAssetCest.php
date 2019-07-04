<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnSolidJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnSolidJssAssetCest
 *
 * Unit tests for codeception asset font awesome solid js svgfont content delivery network
 */
class CdnSolidJssAssetCest
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
     * testCdnSolidJssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnSolidJssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnSolidJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnSolidJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnUtilitiesJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testCdnSolidJssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnSolidJssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnSolidJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnSolidJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnUtilitiesJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnSolidJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnUtilitiesJsAsset::class]);
    }
}
