<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmSolidMinJsAsset;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinJsAsset;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmSolidMinJsAssetCest
 *
 * Unit tests for codeception asset font awesome free solid js svgfont minified
 */
class NpmSolidMinJsAssetCest
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
     * testNpmSolidMinJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmSolidMinJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidMinJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.min.js/', $result);
        $I->assertRegexp('/fontawesome.min.js/', $result);
        $I->assertRegexp('/v4-shims.min.js/', $result);
    }

    /**
     * testNpmSolidMinJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmSolidMinJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidMinJsAsset::register($this->view);

        $I->assertCount(3, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmSolidMinJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeMinJsAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesMinJsAsset::class]);
    }

    /**
     * testNpmSolidMinJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmSolidMinJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmSolidMinJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
