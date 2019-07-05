<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmAllJsAsset;
use terabytesoft\assets\fontawesome\dev\NpmFontAwesomeJsAsset;
use terabytesoft\assets\fontawesome\dev\NpmUtilitiesJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmAllJsAssetCest
 *
 * Unit tests for codeception asset font awesome free all js svgfont developer
 */
class NpmAllJsAssetCest
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
     * testNpmAllJsAssetCestRegister
     *
     * @param UnitTester $I
     */
    public function testNpmAllJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/all.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testNpmAllJsAssetCestSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmAllJsAssetCestSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmAllJsAsset::class]);
    }

    /**
     * testNpmAllJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmAllJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmAllJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('js', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
