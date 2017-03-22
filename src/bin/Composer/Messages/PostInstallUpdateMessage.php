<?php namespace BotBlockBin\Composer\Messages;

use Symfony\Component\Console\Output\ConsoleOutput;

class PostInstallUpdateMessage
{
    protected static $setupInfoMessages = [
        "\t".'<info>etre2/magento-botblock is installed.</info>',
        "\t".'<comment> - In order for the self-update mechanism to work, make sure the domains/blocked file is writable by the webserver user:</comment>',
        "\t    ".'chmod a+w vendor/nabble/semalt-blocker/domains/blocked',
        "\t".'<comment> - The self-update mechanism updates the blocked domains list every 7 days based on the file\'s last updated timestamp. No cron job needed to automate this process.</comment>',
    ];

    public static function setupInfo()
    {
        $console = new ConsoleOutput();
        $console->writeln(self::$setupInfoMessages);
    }
}
