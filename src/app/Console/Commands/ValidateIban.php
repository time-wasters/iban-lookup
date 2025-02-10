<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHP_IBAN\IBAN;

class ValidateIban extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:validate-iban {iban}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Validates given IBAN';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $iban = new IBAN($this->argument('iban'));
            
        $this->info('verified: '. $iban->Verify());
        $this->info('account: '. $iban->Account());
        $this->info('bank: '. $iban->Bank());
        $this->info('bban: '. $iban->BBAN());
        $this->info('branch: '. $iban->Branch());
        $this->info('checksum: '. $iban->Checksum());
        $this->info('checksumStringReplace: '.$iban->ChecksumStringReplace());
        //$this->info('countries: '. $iban->Countries());
        $this->info('country: '. $iban->Country());
        $this->info('findCheckSum: '. $iban->FindChecksum());
        $this->info('findNationalChecksum: '. $iban->FindNationalChecksum());
        $this->info('humanFormat: '. $iban->HumanFormat());
    }
}
