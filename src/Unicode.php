<?php

declare(strict_types=1);

namespace Rayblair\Unicode;

/**
  *
  * Example Usage:
  * echo Unicode::RIGHT_ARROW; // Outputs →
  * print_r(Unicode::getAll());
  */
class Unicode
{
    // Arrows
    public const LEFT_ARROW = "\u{2190}"; // ←
    public const RIGHT_ARROW = "\u{2192}"; // →
    public const UP_ARROW = "\u{2191}"; // ↑
    public const DOWN_ARROW = "\u{2193}"; // ↓
    public const DOUBLE_LEFT_ARROW = "\u{21D0}"; // ⇐
    public const DOUBLE_RIGHT_ARROW = "\u{21D2}"; // ⇒
    public const DOUBLE_UP_ARROW = "\u{21D1}"; // ⇑
    public const DOUBLE_DOWN_ARROW = "\u{21D3}"; // ⇓
    public const LEFT_RIGHT_ARROW = "\u{2194}"; // ↔
    public const UP_DOWN_ARROW = "\u{2195}"; // ↕
    public const CIRCLED_RIGHT_ARROW = "\u{21BB}"; // ↻
    public const LEFT_HOOK_ARROW = "\u{21A9}"; // ↩
    public const RIGHT_HOOK_ARROW = "\u{21AA}"; // ↪
    public const LONG_LEFT_ARROW = "\u{27F5}"; // ⟵
    public const LONG_RIGHT_ARROW = "\u{27F6}"; // ⟶
    public const LONG_LEFT_RIGHT_ARROW = "\u{27F7}"; // ⟷
    public const LEFTWARDS_ARROW_WITH_HOOK = "\u{21A9}"; // ↩
    public const RIGHTWARDS_ARROW_WITH_HOOK = "\u{21AA}"; // ↪
    public const NORTH_EAST_ARROW = "\u{2197}"; // ↗
    public const NORTH_WEST_ARROW = "\u{2196}"; // ↖
    public const SOUTH_EAST_ARROW = "\u{2198}"; // ↘
    public const SOUTH_WEST_ARROW = "\u{2199}"; // ↙
    public const CLOCKWISE_ARROW = "\u{21BB}"; // ↻
    public const COUNTERCLOCKWISE_ARROW = "\u{21BA}"; // ↺

    // Mathematical Symbols
    public const INFINITY = "\u{221E}"; // ∞
    public const SUMMATION = "\u{2211}"; // ∑
    public const SQUARE_ROOT = "\u{221A}"; // √
    public const APPROXIMATELY_EQUAL = "\u{2248}"; // ≈
    public const NOT_EQUAL = "\u{2260}"; // ≠
    public const LESS_THAN_EQUAL = "\u{2264}"; // ≤
    public const GREATER_THAN_EQUAL = "\u{2265}"; // ≥
    public const PI_SYMBOL = "\u{03C0}"; // π
    public const MULTIPLICATION = "\u{00D7}"; // ×
    public const DIVISION = "\u{00F7}"; // ÷
    public const PLUS_MINUS = "\u{00B1}"; // ±
    public const INTEGRAL = "\u{222B}"; // ∫
    public const PARTIAL_DIFFERENTIAL = "\u{2202}"; // ∂
    public const ELEMENT_OF = "\u{2208}"; // ∈
    public const NOT_ELEMENT_OF = "\u{2209}"; // ∉
    public const UNION = "\u{222A}"; // ∪
    public const INTERSECTION = "\u{2229}"; // ∩
    public const FOR_ALL = "\u{2200}"; // ∀
    public const THERE_EXISTS = "\u{2203}"; // ∃
    public const EMPTY_SET = "\u{2205}"; // ∅
    public const SUBSET_OF = "\u{2282}"; // ⊂
    public const SUPERSET_OF = "\u{2283}"; // ⊃
    public const SUBSET_OR_EQUAL = "\u{2286}"; // ⊆
    public const SUPERSET_OR_EQUAL = "\u{2287}"; // ⊇
    public const LOGICAL_AND = "\u{2227}"; // ∧
    public const LOGICAL_OR = "\u{2228}"; // ∨
    public const LOGICAL_NOT = "\u{00AC}"; // ¬
    public const THEREFORE = "\u{2234}"; // ∴
    public const BECAUSE = "\u{2235}"; // ∵

    // Currency Symbols
    public const DOLLAR_SIGN = "\u{0024}"; // $
    public const EURO_SIGN = "\u{20AC}"; // €
    public const POUND_SIGN = "\u{00A3}"; // £
    public const YEN_SIGN = "\u{00A5}"; // ¥
    public const INDIAN_RUPEE_SIGN = "\u{20B9}"; // ₹
    public const BITCOIN_SIGN = "\u{20BF}"; // ₿
    public const WON_SIGN = "\u{20A9}"; // ₩
    public const SHEKEL_SIGN = "\u{20AA}"; // ₪
    public const CENT_SIGN = "\u{00A2}"; // ¢

    // Emojis
    public const SMILEY_FACE = "\u{263A}"; // ☺
    public const HEART = "\u{2764}"; // ❤
    public const STAR = "\u{2605}"; // ★
    public const FIRE = "\u{1F525}"; // 🔥
    public const THUMBS_UP = "\u{1F44D}"; // 👍
    public const CLAPPING_HANDS = "\u{1F44F}"; // 👏
    public const PARTY_POPPER = "\u{1F389}"; // 🎉
    public const THINKING_FACE = "\u{1F914}"; // 🤔
    public const FACE_WITH_TEARS_OF_JOY = "\u{1F602}"; // 😂
    public const CRYING_FACE = "\u{1F622}"; // 😢
    public const RED_HEART = "\u{2764}"; // ❤️
    public const BROKEN_HEART = "\u{1F494}"; // 💔
    public const CHECK_MARK_BUTTON = "\u{2705}"; // ✅
    public const CROSS_MARK_BUTTON = "\u{274C}"; // ❌

    // Shapes and Symbols
    public const BLACK_CIRCLE = "\u{25CF}"; // ●
    public const WHITE_CIRCLE = "\u{25CB}"; // ○
    public const BLACK_SQUARE = "\u{25A0}"; // ■
    public const WHITE_SQUARE = "\u{25A1}"; // □
    public const TRIANGLE_UP = "\u{25B2}"; // ▲
    public const TRIANGLE_DOWN = "\u{25BC}"; // ▼
    public const DIAMOND = "\u{25C6}"; // ◆
    public const SPADE = "\u{2660}"; // ♠
    public const HEART_SHAPE = "\u{2665}"; // ♥
    public const CLUB = "\u{2663}"; // ♣
    public const DIAMOND_SHAPE = "\u{2666}"; // ♦
    public const BLACK_STAR = "\u{2605}"; // ★
    public const WHITE_STAR = "\u{2606}"; // ☆
    public const INVERSE_BULLET = "\u{25D8}"; // ◘
    public const LOZENGE = "\u{25CA}"; // ◊
    public const BLACK_LOZENGE = "\u{29EB}"; // ⧫

    // Miscellaneous
    public const CHECK_MARK = "\u{2713}"; // ✓
    public const CROSS_MARK = "\u{2717}"; // ✗
    public const COPYRIGHT = "\u{00A9}"; // ©
    public const REGISTERED = "\u{00AE}"; // ®
    public const TRADEMARK = "\u{2122}"; // ™
    public const SECTION = "\u{00A7}"; // §
    public const PILCROW = "\u{00B6}"; // ¶
    public const DEGREE = "\u{00B0}"; // °
    public const BULLET = "\u{2022}"; // •
    public const ELLIPSIS = "\u{2026}"; // …
    public const PRIME = "\u{2032}"; // ′
    public const DOUBLE_PRIME = "\u{2033}"; // ″
    public const PER_MILLE = "\u{2030}"; // ‰
    public const INFINITY_SYMBOL = "\u{221E}"; // ∞
    public const ANGLE = "\u{2220}"; // ∠
    public const CONGRUENT = "\u{2245}"; // ≅
    public const NOT_EQUAL_TO = "\u{2260}"; // ≠

    // Additional Symbols
    public const MUSIC_NOTE = "\u{266A}"; // ♪
    public const EIGHTH_NOTE = "\u{266B}"; // ♫
    public const HOT_BEVERAGE = "\u{2615}"; // ☕
    public const WARNING_SIGN = "\u{26A0}"; // ⚠
    public const RADIOACTIVE = "\u{2622}"; // ☢
    public const BIOHAZARD = "\u{2623}"; // ☣
    public const PEACE_SYMBOL = "\u{262E}"; // ☮
    public const YIN_YANG = "\u{262F}"; // ☯
    public const HAMMER_AND_PICK = "\u{2692}"; // ⚒


    // Typography and Punctuation
    public const EN_DASH = "\u{2013}"; // –
    public const EM_DASH = "\u{2014}"; // —
    public const SINGLE_QUOTE_LEFT = "\u{2018}"; // '
    public const SINGLE_QUOTE_RIGHT = "\u{2019}"; // '
    public const DOUBLE_QUOTE_LEFT = "\u{201C}"; // "
    public const DOUBLE_QUOTE_RIGHT = "\u{201D}"; // "
    public const DAGGER = "\u{2020}"; // †
    public const DOUBLE_DAGGER = "\u{2021}"; // ‡

    /**
     * Returns a list of all Unicode constants in this class.
     */
    public static function getAll(): array
    {
        $reflection = new \ReflectionClass(__CLASS__);
        
        return $reflection->getConstants();
    }

    /**
     * Converts UTF-8 characters into Unicode escape sequences (\uXXXX).
     *
     * This function searches for UTF-8 characters and converts them into their corresponding 
     * Unicode escape sequences in the format "\uXXXX" (without curly braces).
     *
     * @param string $utf8String The input string containing UTF-8 characters.
     * @return string The encoded string with Unicode escape sequences.
     */
    public static function escape(string $utf8String): string
    {
        return preg_replace_callback('/./u', function (array $match): string {
            return sprintf('\u%04X', 
                mb_ord($match[0], 'UTF-8')
            );
        }, $utf8String);
    }
}
