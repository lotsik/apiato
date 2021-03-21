<?php

namespace App\Containers\Documentation\UI\CLI\Commands;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Commands\ConsoleCommand;
use App\Ship\Transporters\DataTransporter;

class GenerateApiDocsCommand extends ConsoleCommand
{
    protected $signature = "apiato:apidoc";

    protected $description = "Generate API Documentations with (API-Doc-JS)";

    public function handle(): void
    {
        $transporter = new DataTransporter();
        $transporter->setInstance("command_instance", $this);

        Apiato::call('Documentation@GenerateDocumentationAction', [$transporter]);
    }
}
