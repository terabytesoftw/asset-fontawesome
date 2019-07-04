<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmFontAwesomeMinCssAssetCest
 *
 * Unit tests for codeception asset font awesome free css webfont minified
 */
class NpmFontAwesomeMinCssAssetCest
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
     * testNpmFontAwesomeMinCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeMinCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeMinCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.min.css/', $result);
    }

    /**
     * testNpmFontAwesomeMinCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeMinCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeMinCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeMinCssAsset::class]);
    }

    /**
     * testNpmFontAwesomeMinCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeMinCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmFontAwesomeMinCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
