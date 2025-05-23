<?php

declare(strict_types=1);

namespace Database\Seeder;

use Tempest\Console\ConsoleCommand;
use Tempest\Console\HasConsole;
use Tempest\Container\Tag;

final readonly class SeederCommand
{
    use HasConsole;

    public function __construct(
        #[Tag('seeders')] private array $seeders,
    )
    {
    }

    #[ConsoleCommand('db:seed')]
    public function seed(): void
    {
        foreach ($this->seeders as $seeder) {
            $this->writeln('Running ' . get_class($seeder));
            $seeder->run();
        }
        $this->writeln('Done.');
    }

}