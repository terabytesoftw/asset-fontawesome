<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmBrandMinCssAsset;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinCssAsset;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmBrandMinCssAssetCest
 *
 * Unit tests for codeception asset font awesome free brand css webfont minified
 */
class NpmBrandMinCssAssetCest
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
     * testNpmBrandMinCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmBrandMinCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandMinCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandMinCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
        $I->assertRegexp('/svg-with-js.min.css/', $result);
        $I->assertRegexp('/v4-shims.min.css/', $result);
    }

    /**
     * testNpmBrandMinCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmBrandMinCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandMinCssAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandMinCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinCssAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmBrandMinCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeMinCssAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesMinCssAsset::class]);
    }

    /**
     * testNpmBrandMinCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmBrandMinCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmBrandMinCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
