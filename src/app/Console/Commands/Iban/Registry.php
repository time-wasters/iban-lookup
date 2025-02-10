<?php

namespace App\Console\Commands\Iban;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Registry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iban:registry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute registry';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Storage::put(storage_path('/app/private/utils/IBAN_Registry.txt', exec('curl https://www.swift.com/node/11971')));

        // Copy the registry converter from vendor
        exec('cp ' . base_path('/vendor/globalcitizen/php-iban/utils/convert-registry.php'
            . ' ' . storage_path('app/private/utils/convert-registry.php')));

        // Fix: Do not load php-iban.php again, it's already loaded with PSR
        $str = file_get_contents(storage_path('app/private/utils/convert-registry.php'));
        $str = str_replace(
            'require_once(dirname(dirname(__FILE__)) . \'/php-iban.php\');',
            '//require_once(dirname(dirname(__FILE__)) . \'/php-iban.php\');',
            $str
        );
        file_put_contents(storage_path('app/private/utils/convert-registry.php'), $str);

        // Fix: The two arguments are not supported. Registry text file is stored in storage.
        $str = file_get_contents(storage_path('app/private/utils/convert-registry.php'));
        $str = str_replace(
            '$data = `iconv -f utf-8 -t ascii --byte-subst="<0x%x>" --unicode-subst="<U+%04X>" \'IBAN_Registry.txt\'`;',
            '$data = `iconv -f utf-8 -t ascii \'storage/app/private/utils/IBAN_Registry.txt\'`;',
            $str
        );
        file_put_contents(storage_path('app/private/utils/convert-registry.php'), $str);

        // Try to convert
        require_once(storage_path('app/private/utils/convert-registry.php'));
    }
}
