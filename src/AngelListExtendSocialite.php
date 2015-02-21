<?php
namespace SocialiteProviders\AngelList;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AngelListExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('angellist', __NAMESPACE__.'\Provider');
    }
}
