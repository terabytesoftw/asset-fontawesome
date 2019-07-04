<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmFontAwesomeJsAssetCest
 *
 * Unit tests for codeception asset font awesome free js svgfont developer
 */
class NpmFontAwesomeJsAssetCest
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
     * testNpmFontAwesomeJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.js/', $result);
    }

    /**
     * testNpmFontAwesomeJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeJsAsset::class]);
    }

    /**
     * testNpmFontAwesomeJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmFontAwesomeJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
