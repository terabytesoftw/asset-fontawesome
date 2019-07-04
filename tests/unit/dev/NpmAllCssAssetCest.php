<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmAllCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmAllCssAssetCest
 *
 * Unit tests for codeception asset font awesome free all css webfont developer
 */
class NpmAllCssAssetCest
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
     * testNpmAllCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmAllCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/all.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testNpmAllCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmAllCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmAllCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesCssAsset::class]);
    }

    /**
     * testNpmAllCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmAllCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmAllCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
