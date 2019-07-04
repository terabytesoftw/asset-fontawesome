<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmBrandMinJsAsset;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinJsAsset;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmBrandMinJsAssetCest
 *
 * Unit tests for codeception asset font awesome free brand js svgfont minified
 */
class NpmBrandMinJsAssetCest
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
     * testNpmBrandMinJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmBrandMinJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandMinJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.min.js/', $result);
        $I->assertRegexp('/fontawesome.min.js/', $result);
        $I->assertRegexp('/v4-shims.min.js/', $result);
    }

    /**
     * testNpmBrandMinJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmBrandMinJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandMinJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmBrandMinJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeMinJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesMinJsAsset::class]);
    }

    /**
     * testNpmBrandMinJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmBrandMinJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmBrandMinJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
