<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmAllMinCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmAllMinCssAssetCest
 *
 * Unit tests for codeception asset font awesome free all css webfont minified
 */
class NpmAllMinCssAssetCest
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
     * testNpmAllMinCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmAllMinCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllMinCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/all.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
        $I->assertRegexp('/svg-with-js.min.css/', $result);
        $I->assertRegexp('/v4-shims.min.css/', $result);
    }

    /**
     * testNpmAllMinCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmAllMinCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllMinCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmAllMinCssAsset::class]);
    }

    /**
     * testNpmAllMinCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmAllMinCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmAllMinCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
