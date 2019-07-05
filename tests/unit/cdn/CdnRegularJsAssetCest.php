<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnRegularJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnRegularJsAssetCest
 *
 * Unit tests for codeception asset font awesome regular js svgfont content delivery network
 */
class CdnRegularJsAssetCest
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
     * testCdnRegularJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnRegularJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnRegularJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnRegularJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testCdnRegularJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnRegularJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnRegularJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnRegularJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnRegularJsAsset::class]);
    }
}
