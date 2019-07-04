<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmRegularJsAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeJsAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmRegularJsAssetCest
 *
 * Unit tests for codeception asset font awesome regular js svgfont developer
 */
class NpmRegularJsAssetCest
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
     * testNpmRegularJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmRegularJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testNpmRegularJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmRegularJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmRegularJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesJsAsset::class]);
    }

    /**
     * testNpmRegularJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmRegularJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmRegularJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
