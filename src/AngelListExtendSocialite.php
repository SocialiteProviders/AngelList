<?php
namespace SocialiteProviders\AngelList;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AngelListExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'angellist', __NAMESPACE__.'\Provider'
        );
    }
}
