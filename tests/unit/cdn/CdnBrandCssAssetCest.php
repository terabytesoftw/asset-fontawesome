<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnBrandCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnBrandCssAssetCest
 *
 * Unit tests for codeception asset font awesome brand css webfont content delivery network
 */
class CdnBrandCssAssetCest
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
     * testCdnBrandCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnBrandCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnBrandCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnBrandCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testCdnBrandCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnBrandCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnBrandCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnBrandCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnBrandCssAsset::class]);
    }
}
