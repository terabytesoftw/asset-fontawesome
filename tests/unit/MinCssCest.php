<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\FontAwesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\min\css\NpmAllAsset;
use terabytesoft\assets\fontawesome\min\css\NpmBrandAsset;
use terabytesoft\assets\fontawesome\min\css\NpmFontAwesomeAsset;
use terabytesoft\assets\fontawesome\min\css\NpmRegularAsset;
use terabytesoft\assets\fontawesome\min\css\NpmSolidAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class MinCssCest
 *
 * Unit tests for codeception prod fontawesome css
 */
class MinCssCest
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
        $I->clearDirectory(\Yii::getAlias('@public/assets'));
    }

    /**
     * testNpmAllAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmAllAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/all.min.css/', $result);
    }

    /**
     * testNpmBrandAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmBrandAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
    }

    /**
     * testNpmFontAwesomeAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.min.css/', $result);
    }

    /**
     * testNpmRegularAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmRegularAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
    }

    /**
     * testNpmSolidAssetRegister
     *
     * @param UnitTester $I
     */
    public function testNpmSolidAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.min.css/', $result);
        $I->assertRegexp('/fontawesome.min.css/', $result);
    }

    /**
     * testNpmAllAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmAllAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmAllAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmAllAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmAllAsset::class]);
    }

    /**
     * testNpmBrandAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmBrandAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmBrandAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmBrandAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmBrandAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeAsset::class]);
    }

    /**
     * testNpmFontAwesomeAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmFontAwesomeAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeAsset::class]);
    }

    /**
     * testNpmRegularAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmRegularAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmRegularAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmRegularAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmRegularAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeAsset::class]);
    }

    /**
     * testNpmSolidAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testNpmSolidAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        NpmSolidAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(NpmSolidAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(NpmFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmSolidAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[NpmFontAwesomeAsset::class]);
    }

    /**
     * testNpmAllAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmAllAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmAllAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }

    /**
     * testNpmBrandAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmBrandAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmBrandAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }

    /**
     * testNpmFontAwesomeAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmFontAwesomeAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmFontAwesomeAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }

    /**
     * testNpmRegularAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmRegularAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmRegularAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }

    /**
     * testNpmSolidAssetSourcesPublish
     *
     * @param UnitTester $I
     */
    public function testNpmSolidAssetSourcesPublish(UnitTester $I): void
    {
        $bundle = NpmSolidAsset::register($this->view);

        $I->assertTrue(is_dir($bundle->basePath));

        $I->sourcesPublishVerifyFiles('css', $bundle);
    }
}
