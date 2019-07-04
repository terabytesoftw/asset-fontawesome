<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmSolidCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmSolidCssAssetCest
 *
 * Unit tests for codeception asset font awesome solid css webfont developer
 */
class NpmSolidCssAssetCest
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
     * testNpmSolidCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmSolidCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testNpmSolidCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmSolidCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmSolidCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesCssAsset::class]);
    }

    /**
     * testNpmSolidCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmSolidCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmSolidCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
