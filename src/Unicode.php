<?php

/**
  *
  * Example Usage:
  * echo Unicode::RIGHT_ARROW; // Outputs →
  * print_r(Unicode::getAll());
 /*
class Unicode
{
    // Arrows
    public const LEFT_ARROW = "\u2190"; // ←
    public const RIGHT_ARROW = "\u2192"; // →
    public const UP_ARROW = "\u2191"; // ↑
    public const DOWN_ARROW = "\u2193"; // ↓

    // Mathematical Symbols
    public const INFINITY = "\u221E"; // ∞
    public const SUMMATION = "\u2211"; // ∑
    public const SQUARE_ROOT = "\u221A"; // √
    
    // Currency Symbols
    public const DOLLAR_SIGN = "\u0024"; // $
    public const EURO_SIGN = "\u20AC"; // €
    public const POUND_SIGN = "\u00A3"; // £
    public const YEN_SIGN = "\u00A5"; // ¥
    
    // Emojis
    public const SMILEY_FACE = "\u263A"; // ☺
    public const HEART = "\u2764"; // ❤
    public const STAR = "\u2605"; // ★
    
    // Greek Letters
    public const ALPHA = "\u03B1"; // α
    public const BETA = "\u03B2"; // β
    public const GAMMA = "\u03B3"; // γ
    
    // Miscellaneous
    public const CHECK_MARK = "\u2713"; // ✓
    public const CROSS_MARK = "\u2717"; // ✗
    public const COPYRIGHT = "\u00A9"; // ©
    
    /**
     * Returns a list of all Unicode constants in this class.
     */
    public static function getAll(): array
    {
        $reflection = new \ReflectionClass(__CLASS__);
        return $reflection->getConstants();
    }
}
