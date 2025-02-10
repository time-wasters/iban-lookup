<?php

test('validates german ibans', function (string $iban) {
    $this->artisan('iban:validate ' . $iban)->assertExitCode(0);
})->with([
    // https://ibanvalidieren.de/beispiele.html
    // Germany DE
    'DE02120300000000202051',
    'DE02500105170137075030',
    'DE02100500000054540402',
    'DE02300209000106531065',
    'DE02200505501015871393',
    'DE02100100100006820101',
    'DE02300606010002474689',
    'DE02600501010002034304',
    'DE02700202700010108669',
    'DE02700100800030876808',
    'DE02370502990000684712',
    'DE88100900001234567892',
    'DE02701500000000594937',
]);

test('validates austrian ibans', function (string $iban) {
    $this->artisan('iban:validate ' . $iban)->assertExitCode(0);
})->with([
    // https://ibanvalidieren.de/beispiele.html
    // Austria AT
    'AT026000000001349870',
    'AT021420020010147558',
    'AT023200000000641605',
    'AT021200000703447144',
    'AT022011100003429660',
    'AT022081500000698597',
    'AT022040400040102634',
    'AT023400000002613800',
    'AT022032032102118431',
    'AT023500000001070671',
    'AT021860000012387890',
    'AT023600000000679514',
    'AT021700000432040976',
    'AT022050303300646365',
    'AT023225000000704957',
]);

test('validates swiss ibans', function (string $iban) {
    $this->artisan('iban:validate ' . $iban)->assertExitCode(0);
})->with([
    // https://ibanvalidieren.de/beispiele.html
    // Switzerland CH
    'CH0209000000100013997',
    'CH0204835000626882001',
    'CH0200700110000387896',
    'CH0208401000051138778',
    'CH0200767000C51001987',
    'CH020024024014511740P',
    'CH0200790016271403331',
    'CH0200781125534343504',
    'CH020023023012625140U',
    'CH0200769016143198123',
    'CH2200784102000123454',
    'CH0206300016120442405',
    'CH0200761016090504437',
    'CH0200778010152237210',
    'CH9305881020624751001',
]);

test('validates liechtenstein ibans', function (string $iban) {
    $this->artisan('iban:validate ' . $iban)->assertExitCode(0);
})->with([
    // https://ibanvalidieren.de/beispiele.html
    // Liechtenstein LI
    'LI0208800000017197386',
    'LI0208805502400560249',
    'LI02088100000191010AC',
    'LI0308803103143000000',
    'LI0508812105028570001',
    'LI0608808000220182703',
    'LI15088110605699K002E',
    'LI0608813201408880001',
    'LI2608802001003488101',
    'LI5708801200185100814',
]);
