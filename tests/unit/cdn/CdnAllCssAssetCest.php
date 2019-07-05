<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnAllCssAsset;
use terabytesoft\assets\fontawesome\cdn\CdnUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnAllCssAssetCest
 *
 * Unit tests for codeception asset font awesome free all css webfont content delivery network
 */
class CdnAllCssAssetCest
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
     * testCdnAllAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnAllCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnAllCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnAllCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');
        var_dump($result);

        $I->assertRegexp('/all.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testCdnAllCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnAllCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnAllCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnAllCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnAllCssAsset::class]);
    }
}
