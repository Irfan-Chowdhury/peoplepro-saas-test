<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

uses(
    Tests\TestCase::class,
    Illuminate\Foundation\Testing\RefreshDatabase::class,
    Tests\Authenticate::class,
    // App\Http\traits\TestTrait::class,
)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function sum($a, $b)
{
    return $a + $b;
}

function languageData():array
{
    return [
        'name' => 'English',
        'locale' => 'en',
        'is_default' => 0,
    ];
}
function featureData():array
{
    return [
        'name' => 'fa fa-address-book-o',
        'icon' => 'book',
    ];
}

function generalSettingData()
{
    return [
        'site_title' => "PeopleProSAAS",
        // 'site_logo'  => "logo.png",
        'time_zone' => "Asia/Dhaka",
        'phone' => '01829498634',
        'email' => 'support@lion-coders.com',
        'free_trial_limit' => 5,
        'currency_code' => "USD",
        'frontend_layout' => "regular",
        'date_format' => "d-m-Y",
        'footer' => "LionCoders",
        'footer_link' => "https://www.lion-coders.com",
        'developed_by' => 'LionCoders',
    ];
}

// function testTrait()
// {
//     $this->test();
// }
