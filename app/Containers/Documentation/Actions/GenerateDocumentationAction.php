<?php

namespace App\Containers\Documentation\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class GenerateDocumentationAction extends Action
{
    public function run(DataTransporter $data): void
    {
        $console = $data->command_instance;

        // parse the markdown file.
        Apiato::call('Documentation@RenderTemplatesTask');

        // get docs types that needs to be generated by the user base on his configs.
        $types = Apiato::call('Documentation@GetAllDocsTypesTask');

        $console->info("Generating API Documentations for (" . implode(' & ', $types) . ")\n");

        // for each type, generate docs.
        $documentationUrls = array_map(function ($type) use ($console) {
            return Apiato::call('Documentation@GenerateAPIDocsTask', [$type, $console]);
        }, $types);

        $console->info("Done! You can access your API Docs at: \n" . implode("\n", $documentationUrls));
    }
}
