<?php

namespace JDsWebService\AdminDashboardMaterialDark\Console;

use Illuminate\Console\Command;

class TestCommand extends Command {

    protected $signature = "material:test";

    protected $description = "Test connection between composer and laravel installation.";

    public function handle() {
        echo "Command run successfully! Laravel Installation and Composer Symlink is complete.";
    }

}