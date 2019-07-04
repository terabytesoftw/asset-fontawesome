<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnUtilitiesJsAssetCest
 *
 * Unit tests for codeception asset utilities font awesome free js svgfont content delivery network
 */
class CdnUtilitiesJsAssetCest
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
     * testCdnUtilitiesJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnUtilitiesJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnUtilitiesJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnUtilitiesJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testCdnUtilitiesJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnUtilitiesJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnUtilitiesJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnUtilitiesJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnUtilitiesJsAsset::class]);
    }
}
