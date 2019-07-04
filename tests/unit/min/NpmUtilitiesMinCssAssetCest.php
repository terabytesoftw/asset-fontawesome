<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmUtilitiesMinCssAssetCest
 *
 * Unit tests for codeception asset utilities font awesome free css webfont minified
 */
class NpmUtilitiesMinCssAssetCest
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
     * testNpmUtilitiesMinCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesMinCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesMinCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/svg-with-js.min.css/', $result);
        $I->assertRegexp('/v4-shims.min.css/', $result);
    }

    /**
     * testNpmUtilitiesMinCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesMinCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesMinCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesMinCssAsset::class]);
    }

    /**
     * testNpmUtilitiesMinCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesMinCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmUtilitiesMinCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
