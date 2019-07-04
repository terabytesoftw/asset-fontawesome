<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmUtilitiesJsAssetCest
 *
 * Unit tests for codeception asset utilities font awesome free js svgfont developer
 */
class NpmUtilitiesJsAssetCest
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
     * testNpmUtilitiesJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testNpmUtilitiesJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesJsAsset::class]);
    }

    /**
     * testNpmUtilitiesJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmUtilitiesJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
