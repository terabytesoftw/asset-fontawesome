<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinJsAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmUtilitiesMinJsAssetCest
 *
 * Unit tests for codeception asset utilities font awesome free js svgfont minified
 */
class NpmUtilitiesMinJsAssetCest
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
     * testNpmUtilitiesMinJsAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesMinJsAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesMinJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/v4-shims.min.js/', $result);
    }

    /**
     * testNpmUtilitiesMinJsAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesMinJsAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmUtilitiesMinJsAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmUtilitiesMinJsAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmUtilitiesMinJsAsset::class]);
    }

    /**
     * testNpmUtilitiesMinJsAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmUtilitiesMinJsAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmUtilitiesMinJsAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
