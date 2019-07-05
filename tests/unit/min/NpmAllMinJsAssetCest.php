<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmAllMinJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmAllMinJsAssetCest
 *
 * Unit tests for codeception asset font awesome free all js svgfont minified
 */
class NpmAllMinJsAssetCest
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
     * testNpmAllMinJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmAllMinJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllMinJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllMinJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/all.min.js/', $result);
        $I->assertRegexp('/fontawesome.min.js/', $result);
        $I->assertRegexp('/v4-shims.min.js/', $result);
    }

    /**
     * testNpmAllMinJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmAllMinJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllMinJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllMinJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmAllMinJsAsset::class]);
    }

    /**
     * testNpmAllMinJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmAllMinJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmAllMinJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
