<?php namespace Rozklad\ComposerInstallers;

use Composer\Package\PackageInterface;

class LangInstaller extends BaseInstaller {

    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        $package = explode('/', $package->getPrettyName());

        $path = str_replace('-', '/', $package[1]);

        $basePath = $this->getPath();

        return $basePath.'/extensions/'.$path;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return $packageType == 'platform-lang';
    }

}
