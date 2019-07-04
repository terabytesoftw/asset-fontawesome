<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmFontAwesomeCssAssetCest
 *
 * Unit tests for codeception asset font awesome free css webFont developer
 */
class NpmFontAwesomeCssAssetCest
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
     * testNpmFontAwesomeCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.css/', $result);
    }

    /**
     * testNpmFontAwesomeCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeCssAsset::class]);
    }

    /**
     * testNpmFontAwesomeCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmFontAwesomeCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
