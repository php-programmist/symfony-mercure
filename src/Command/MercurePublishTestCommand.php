<?php

namespace App\Command;

use DateTime;
use Exception;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

#[AsCommand(
    name: 'app:mercure:publish-test',
    description: 'Публикация тестового пуша в MercureHub',
)]
class MercurePublishTestCommand extends Command
{
    public function __construct(
        private HubInterface $hub
    )
    {
        parent::__construct();
    }

    /**
     * @throws Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $update = new Update(
            'https://example.com/books/1',
            json_encode(['status' => (new DateTime())->format('c')], JSON_THROW_ON_ERROR)
        );

        $response = $this->hub->publish($update);
        $output->writeln($response);

        return Command::SUCCESS;
    }
}
