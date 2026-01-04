<?php

namespace App\Enums;

enum PdfPage:string
{
    case CONTACT_US = 'contact_us';
    case METHOD = 'method';

    public function label(): string
    {
        return match ($this) {
            self::CONTACT_US => 'Contact Us',
            self::METHOD => 'Method',
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
