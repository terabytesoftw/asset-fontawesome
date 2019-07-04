<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnAllJsAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnAllJsAssetCest
 *
 * Unit tests for codeception asset font awesome free all js svgfont content delivery network
 */
class CdnAllJsAssetCest
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
     * testCdnAllJsAssetCestRegister
     *
     * @param UnitTester $I
     */
    public function testCdnAllJsAssetCestRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnAllJsAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnAllJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnUtilitiesJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');
        var_dump($result);

        $I->assertRegexp('/all.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testCdnAllJsAssetCestSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnAllJsAssetCestSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnAllJsAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnAllJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnUtilitiesJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnAllJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnUtilitiesJsAsset::class]);
    }
}
