<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnRegularCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnRegularCssAssetCest
 *
 * Unit tests for codeception asset font awesome regular css webFont content delivery network
 */
class CdnRegularCssAssetCest
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
     * testCdnRegularCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnRegularCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnRegularCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnRegularCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testCdnRegularCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnRegularCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnRegularCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnRegularCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnRegularCssAsset::class]);
    }
}
