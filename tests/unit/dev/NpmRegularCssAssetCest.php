<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmRegularCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmRegularCssAssetCest
 *
 * Unit tests for codeception asset font awesome regular css webfont developer
 */
class NpmRegularCssAssetCest
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
     * testNpmRegularCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmRegularCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testNpmRegularCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmRegularCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmRegularCssAsset::class]);
    }

    /**
     * testNpmRegularCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmRegularCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmRegularCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
