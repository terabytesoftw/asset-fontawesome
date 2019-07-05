<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmBrandCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeCssAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmBrandCssAssetCest
 *
 * Unit tests for codeception asset font awesome brand css webfont developer
 */
class NpmBrandCssAssetCest
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
     * testNpmBrandCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmBrandCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.css/', $result);
        $I->assertRegexp('/fontawesome.css/', $result);
        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testNpmBrandCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmBrandCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmBrandCssAsset::class]);
    }

    /**
     * testNpmBrandCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmBrandCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmBrandCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
