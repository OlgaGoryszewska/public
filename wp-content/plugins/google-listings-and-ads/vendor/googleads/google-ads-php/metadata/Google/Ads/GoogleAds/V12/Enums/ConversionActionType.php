<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/conversion_action_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Enums;

class ConversionActionType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
;google/ads/googleads/v12/enums/conversion_action_type.protogoogle.ads.googleads.v12.enums"�
ConversionActionTypeEnum"�
ConversionActionType
UNSPECIFIED 
UNKNOWN
AD_CALL
CLICK_TO_CALL
GOOGLE_PLAY_DOWNLOAD
GOOGLE_PLAY_IN_APP_PURCHASE
UPLOAD_CALLS
UPLOAD_CLICKS
WEBPAGE
WEBSITE_CALL	
STORE_SALES_DIRECT_UPLOAD

STORE_SALES
FIREBASE_ANDROID_FIRST_OPEN$
 FIREBASE_ANDROID_IN_APP_PURCHASE
FIREBASE_ANDROID_CUSTOM
FIREBASE_IOS_FIRST_OPEN 
FIREBASE_IOS_IN_APP_PURCHASE
FIREBASE_IOS_CUSTOM0
,THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN5
1THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE,
(THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM,
(THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN1
-THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE(
$THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOM 
ANDROID_APP_PRE_REGISTRATION#
ANDROID_INSTALLS_ALL_OTHER_APPS
FLOODLIGHT_ACTION
FLOODLIGHT_TRANSACTION
GOOGLE_HOSTED
LEAD_FORM_SUBMIT

SALESFORCE
SEARCH_ADS_360$
 SMART_CAMPAIGN_AD_CLICKS_TO_CALL %
!SMART_CAMPAIGN_MAP_CLICKS_TO_CALL!!
SMART_CAMPAIGN_MAP_DIRECTIONS" 
SMART_CAMPAIGN_TRACKED_CALLS#
STORE_VISITS$B�
"com.google.ads.googleads.v12.enumsBConversionActionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

