<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmRegularMinJsAsset;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinJsAsset;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmRegularMinJsAssetCest
 *
 * Unit tests for codeception asset font awesome free regular js svgfont minified
 */
class NpmRegularMinJsAssetCest
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
     * testNpmRegularMinJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmRegularMinJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularMinJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.min.js/', $result);
        $I->assertRegexp('/fontawesome.min.js/', $result);
        $I->assertRegexp('/v4-shims.min.js/', $result);
    }

    /**
     * testNpmRegularMinJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmRegularMinJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularMinJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmRegularMinJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeMinJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesMinJsAsset::class]);
    }

    /**
     * testNpmRegularMinJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmRegularMinJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmRegularMinJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
