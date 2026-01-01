<?php

namespace App\Enums;

enum Page:string
{
    case ABOUT_US = 'about_us';
    case SERVICE = 'service';
    case GALLERY = 'gallery';
    case HOME_BANNER = 'home_banner';
    case ABOUT_GALLERY = 'about_gellery';

    public function label(): string
    {
        return match ($this) {
            self::ABOUT_US => 'About Us',
            self::SERVICE => 'Service',
            self::GALLERY => 'Gallery',
            self::HOME_BANNER => 'Home Banner',
            self::ABOUT_GALLERY => 'About Gallery',
        };
    }
    public static function options(): array
    {
        return array_map(
            fn($case) => ['value' => $case->value, 'label' => $case->label()],
            self::cases()
        );
    }
}