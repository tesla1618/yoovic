<?php

namespace App\Enums\ViewPaths\Vendor;

enum Profile
{
    const INDEX = [
        URI => 'index',
        VIEW => 'vendor-views.profile.index',
        ROUTE => 'vendor.profile.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'vendor-views.profile.update-view'
    ];
    const BANK_INFO_UPDATE = [
        URI => 'update-bank-info',
        VIEW => 'vendor-views.profile.bank-info-update-view'
    ];
    const SUBSCRIBE_PAGE = [
        URI => 'subscribe',
        VIEW => 'vendor-views.ysub.page'
    ];
}
