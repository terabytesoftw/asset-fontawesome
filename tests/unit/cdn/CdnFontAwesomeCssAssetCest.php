<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\CdnFontAwesomeCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnFontAwesomeCssAssetCest
 *
 * Unit tests for codeception asset font awesome css webfont content delivery network
 */
class CdnFontAwesomeCssAssetCest
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
     * testCdnFontAwesomeCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnFontAwesomeCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnFontAwesomeCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnFontAwesomeCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.css/', $result);
    }

    /**
     * testCdnFontAwesomeCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnFontAwesomeCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnFontAwesomeCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnFontAwesomeCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeCssAsset::class]);
    }
}
