<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmRegularMinCssAsset;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinCssAsset;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmRegularMinCssAssetCest
 *
 * Unit tests for codeception asset font awesome free regular css webfont minified
 */
class NpmRegularMinCssAssetCest
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
     * testNpmRegularMinCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmRegularMinCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularMinCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
        $I->assertRegexp('/svg-with-js.min.css/', $result);
        $I->assertRegexp('/v4-shims.min.css/', $result);
    }

    /**
     * testNpmRegularMinCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmRegularMinCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularMinCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmRegularMinCssAsset::class]);
    }

    /**
     * testNpmRegularMinCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmRegularMinCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmRegularMinCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
