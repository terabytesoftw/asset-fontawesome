<?php

namespace terabytesoft\assets\fontawesome\tests;

use terabytesoft\assets\fontawesome\tests\UnitTester;
use terabytesoft\assets\fontawesome\cdn\js\CdnAllAsset;
use terabytesoft\assets\fontawesome\cdn\js\CdnBrandAsset;
use terabytesoft\assets\fontawesome\cdn\js\CdnFontAwesomeAsset;
use terabytesoft\assets\fontawesome\cdn\js\CdnRegularAsset;
use terabytesoft\assets\fontawesome\cdn\js\CdnSolidAsset;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class CdnJsCest
 *
 * Unit tests for codeception cdn fontawesome js
 */
class CdnJsCest
{
    /**
     * @var \yii\web\View;
     */
    private $view;

    /**
     * _before
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
     * testCdnAllAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnAllAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnAllAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnAllAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/all.js/', $result);
    }

    /**
     * testCdnBrandAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnBrandAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnBrandAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnBrandAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/brands.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
    }

    /**
     * testCdnFontAwesomeAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnFontAwesomeAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnFontAwesomeAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/fontawesome.js/', $result);
    }

    /**
     * testCdnRegularAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnRegularAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnRegularAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnRegularAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/regular.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
    }

    /**
     * testCdnSolidAssetRegister
     *
     * @param UnitTester $I
     */
    public function testCdnSolidAssetRegister(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnSolidAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnSolidAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $result = $this->view->renderFile(codecept_data_dir() . 'main.php');

        $I->assertRegexp('/solid.js/', $result);
        $I->assertRegexp('/fontawesome.js/', $result);
    }

    /**
     * testCdnAllAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnAllAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnAllAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnAllAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnAllAsset::class]);
    }

    /**
     * testCdnBrandAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnBrandAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnBrandAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnBrandAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnBrandAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeAsset::class]);
    }

    /**
     * testCdnFontAwesomeAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnFontAwesomeAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnFontAwesomeAsset::register($this->view);

        $I->assertCount(1, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeAsset::class]);
    }

    /**
     * testCdnRegularAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnRegularAssetSimpleDependency(UnitTester $I)
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnRegularAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnRegularAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnRegularAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeAsset::class]);
    }

    /**
     * testCdnSolidAssetSimpleDependency
     *
     * @param UnitTester $I
     */
    public function testCdnSolidAssetSimpleDependency(UnitTester $I): void
    {
        $I->assertEmpty($this->view->assetBundles);

        CdnSolidAsset::register($this->view);

        $I->assertCount(2, $this->view->assetBundles);

        $I->assertArrayHasKey(CdnSolidAsset::class, $this->view->assetBundles);
        $I->assertArrayHasKey(CdnFontAwesomeAsset::class, $this->view->assetBundles);

        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnSolidAsset::class]);
        $I->assertInstanceOf(AssetBundle::class, $this->view->assetBundles[CdnFontAwesomeAsset::class]);
    }
}
