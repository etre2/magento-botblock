<?php namespace BotBlockBin\Composer\Messages;

use Symfony\Component\Console\Output\ConsoleOutput;

class PostInstallUpdateMessage
{
    protected static $setupInfoMessages = [
        "\t".'<info>etre2/magento-botblock is installed.</info>',
        "\t".'<comment>Note: In order for the self-update mechanism to work, make sure the domains/blocked file is writable by the webserver user:</comment>',
        "\t    ".'chmod a+w vendor/nabble/semalt-blocker/domains/blocked'
    ];

    public static function setupInfo()
    {
        $console = new ConsoleOutput();
        $console->writeln(self::$setupInfoMessages);
    }
}
