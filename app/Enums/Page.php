<?php

namespace App\Enums;

enum Page:string
{
    case SERVICE = 'service';
    case GALLERY = 'gallery';
    case ABOUT_GALLERY = 'about_gellery';

    public function label(): string
    {
        return match ($this) {
            self::SERVICE => 'Service',
            self::GALLERY => 'Gallery',
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