<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmBrandJsAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeJsAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmBrandJsAssetCest
 *
 * Unit tests for codeception asset font awesome brand js svgfont developer
 */
class NpmBrandJsAssetCest
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
     * testNpmBrandJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmBrandJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testNpmBrandJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmBrandJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmBrandJsAsset::class]);
    }

    /**
     * testNpmBrandJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmBrandJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmBrandJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
