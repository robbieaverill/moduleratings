<?php

namespace SilverStripe\ModuleRatings\Check;

use SilverStripe\ModuleRatings\Check;

class CodeOrSrcFolderCheck extends Check
{
    public function getKey()
    {
        return 'has_code_or_src_folder';
    }

    public function getDescription()
    {
        return 'Has source code in either a "code" or a "src" folder';
    }

    public function run()
    {
        $options = ['code', 'src'];
        foreach ($options as $folder) {
            if (file_exists($this->getSuite()->getModuleRoot() . '/' . $folder)) {
                $this->setSuccessful(true);
            }
        }
    }
}
