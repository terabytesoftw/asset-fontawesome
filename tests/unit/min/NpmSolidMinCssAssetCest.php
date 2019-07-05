<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\NpmSolidMinCssAsset;
use terabytesoft\assets\fontawesome\min\NpmFontAwesomeMinCssAsset;
use terabytesoft\assets\fontawesome\min\NpmUtilitiesMinCssAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NpmSolidMinCssAssetCest
 *
 * Unit tests for codeception asset font awesome free solid css webfont minified
 */
class NpmSolidMinCssAssetCest
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
     * testNpmSolidMinCssAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmSolidMinCssAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidMinCssAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
        $I->assertRegexp('/svg-with-js.min.css/', $result);
        $I->assertRegexp('/v4-shims.min.css/', $result);
    }

    /**
     * testNpmSolidMinCssAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmSolidMinCssAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidMinCssAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidMinCssAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmSolidMinCssAsset::class]);
    }

    /**
     * testNpmSolidMinCssAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmSolidMinCssAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmSolidMinCssAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);

        $I->sourcesPublishVerifyFilesOnly($bundle);
    }
}
