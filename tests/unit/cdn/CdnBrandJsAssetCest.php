<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnBrandJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnBrandJsAssetCest
 *
 * Unit tests for codeception asset font awesome brand js svgfont content delivery network
 */
class CdnBrandJsAssetCest
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
     * testCdnBrandJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnBrandJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnBrandJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnBrandJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testCdnBrandJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnBrandJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnBrandJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnBrandJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnBrandJsAsset::class]);
    }
}
