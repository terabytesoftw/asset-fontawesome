<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\dev\NpmSolidJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmSolidJsAssetCest
 *
 * Unit tests for codeception asset font awesome solid js svgfont developer
 */
class NpmSolidJsAssetCest
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
     * testNpmSolidJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmSolidJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
        $I->assertRegexp('/v4-shims.js/', $result);
    }

    /**
     * testNpmSolidJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmSolidJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmSolidJsAsset::class]);
    }

    /**
     * testNpmSolidJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmSolidJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmSolidJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
