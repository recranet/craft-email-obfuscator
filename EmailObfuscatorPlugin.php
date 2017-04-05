<?php
namespace Craft;

class EmailObfuscatorPlugin extends BasePlugin
{
    public function init()
    {
        require_once __DIR__ . '/vendor/autoload.php';
    }

    public function getName()
    {
         return Craft::t('Email Obfuscator');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Recranet';
    }

    public function getDeveloperUrl()
    {
        return 'https://www.recranet.com';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/recranet/craft-email-obfuscator/master/releases.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.emailobfuscator.twigextensions.EmailObfuscateTwigExtension');

        return new EmailObfuscateTwigExtension();
    }
}
