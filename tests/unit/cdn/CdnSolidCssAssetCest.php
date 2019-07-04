<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnSolidCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnSolidCssAssetCest
 *
 * Unit tests for codeception asset font awesome solid css webFont content delivery network
 */
class CdnSolidCssAssetCest
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
     * testCdnSolidCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnSolidCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnSolidCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnSolidCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnUtilitiesCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testCdnSolidCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnSolidCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnSolidCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnSolidCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnUtilitiesCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnSolidCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnUtilitiesCssAsset::class]);
    }
}
