<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $primaryKey = 'iso2';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'iso2', 'name', 'iso3', 'phone_code'
    ];

    // Accessor: CSS class for flag-icons package (e.g., "fi fi-us")
    public function getFlagIconClassAttribute(): string
    {
        return 'fi fi-' . strtolower($this->iso2);
    }

    // Optional: Emoji flag derived from ISO 3166-1 alpha-2 code
    public function getFlagEmojiAttribute(): ?string
    {
        if (!is_string($this->iso2) || strlen($this->iso2) !== 2) {
            return null;
        }
        $code = strtoupper($this->iso2);
        $a = ord('A');
        $base = 0x1F1E6; // REGIONAL INDICATOR SYMBOL LETTER A
        $cp1 = $base + (ord($code[0]) - $a);
        $cp2 = $base + (ord($code[1]) - $a);
        return mb_convert_encoding('&#' . $cp1 . ';', 'UTF-8', 'HTML-ENTITIES') . mb_convert_encoding('&#' . $cp2 . ';', 'UTF-8', 'HTML-ENTITIES');
    }
}
