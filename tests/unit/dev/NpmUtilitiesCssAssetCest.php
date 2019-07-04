<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmUtilitiesCssAssetCest
 *
 * Unit tests for codeception asset utilities font awesome free css webfont developer
 */
class NpmUtilitiesCssAssetCest
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
     * testNpmUtilitiesCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/svg-with-js.css/', $result);
        $I->assertRegexp('/v4-shims.css/', $result);
    }

    /**
     * testNpmUtilitiesCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesCssAsset::class]);
    }

    /**
     * testNpmUtilitiesCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmUtilitiesCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
