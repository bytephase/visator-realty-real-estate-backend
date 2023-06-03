<?php
namespace App\Enums;

enum LeadSource: string {
    case WEBSITE = 'Website';
    case REFERRAL = 'Referral';
    case SOCIAL_MEDIA = 'Social Media';
    case ONLINE_AD = 'Online Ad';
    case EMAIL_MARKETING = 'Email Marketing';
    case OPEN_HOUSE = 'Open House';
    case DIRECT_MAIL = 'Direct Mail';
    case PHONE_INQUIRY = 'Phone Inquiry';
}
