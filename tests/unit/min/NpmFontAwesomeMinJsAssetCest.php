<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmFontAwesomeMinJsAssetCest
 *
 * Unit tests for codeception asset font awesome free js svgfont minified
 */
class NpmFontAwesomeMinJsAssetCest
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
     * testNpmFontAwesomeMinJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeMinJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeMinJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.min.js/', $result);
    }

    /**
     * testNpmFontAwesomeMinJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeMinJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeMinJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeMinJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeMinJsAsset::class]);
    }

    /**
     * testNpmFontAwesomeMinJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeMinJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmFontAwesomeMinJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
